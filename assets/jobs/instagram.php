<?php
require_once("../helpers/func.php");
echo "Start cron job - ".date("Y-m-d H:i:s")."<br/>";
$db = db_connect();
//1- si hay imagen y no thumb crear thumb
//2- si hay imagen nueva bajar y luego crear thumb
//echo "----".file_put_contents("../images/categories/abstracto/14221156809-copy.jpg", file_get_contents("../images/categories/abstracto/14221156809.jpg"))."----";

$grams = getInstagramTaggedMedia('nopasanadamaestro');
foreach ($grams['data'] as $photo) {
  $time = $photo['created_time'];
  $link = $photo['link'];
  $type = $photo['type'];
  $id = $photo['id'];
  $user_username = $photo['user']['username'];
  $user_fullname = $photo['user']['full_name'];
  $url = $photo['images']['thumbnail']['url'];
  //print "<img src=$url>";
  print "time: $time </br> link $link  </br> type: $type  </br> id: $id  </br> username: $user_username  </br> userfull: $user_username  </br> url: $url  </br> </br>";
}

foreach ($categories as $cname => $photoset_id) {
  echo "Category: ".$cname."<br/>";

  // Initialize counters.
  $count_add = 0;
  $count_delete = 0;

  // Get photos from Flickr API.
  $photoset = getFlickrPhotoset($photoset_id);
  //$photoset = getJson($cname);
  $data = $photoset['photoset']['photo'];

  // Generate array that will contain every photo id
  // for each category on the app server.
  $dir_photos_ids = array();

  // Generate array that will contain every photo id
  // for each category on Flickr.
  $flickr_photos_ids = array();

  // Open dir an check per photo_id if in directory.
  // If not, copy the photo to dir.
  $doc_root = "/home1/lukaz89/public_html/alonsoadriana.com.ar";
  $dir = $doc_root."/images/categories/".$cname."/";
  if ($dirmanager = opendir($dir)) {

    // Fill "dir_photos_ids" array with all the ids from the photos
    // that are currently in the directory.
    while (false !== ($file = readdir($dirmanager))) {
      if ($file != "." && $file != ".." && $file != "thumbnails" && $file != ".DS_Store") {
        $dir_photos_ids[] = substr($file,0,-4);
      }
    }

    // Fill "flickr_photos_ids" array with all the ids from the photos
    // that are currently on the Flickr service.
    foreach ($data as $key => $value) {
      $flickr_photos_ids[] = $value['id'];
    }

    // Array with the photos that are on Flickr but not on the directory.
    $diff_flickr_dir = array_diff($flickr_photos_ids, $dir_photos_ids);

    // Begin databse transaction.
    $db->beginTransaction();

    // Get the position of the photo on the Flickr API response array.
    foreach ($diff_flickr_dir as $key => $value) {
      foreach ($data as $key => $val) {
        if ($val['id'] == $value) {
          $id = $data[$key]['id'];
          $secret = $data[$key]['secret'];
          $server = $data[$key]['server'];
          $farm = $data[$key]['farm'];
          $title = $data[$key]['title'];

          // Generate Flickr photo URL.
          $image_url = 'https://farm'.$farm.'.staticflickr.com/'.$server.'/'.$id.'_'.$secret;
          //$image_thumb = $image_url . '_t.jpg';
          $image_medium = $image_url.'_z.jpg';

          // Get image id and create image name.
          $image = $id.".jpg";

          // Download image to directory.
          file_put_contents($dir.$image, file_get_contents($image_medium));
          echo "Downloaded ".$image." to ".$dir."<br/>";

          // Create thumnail image.
          createThumbs($dir, $id, 200);
          echo "Created thumbnail of ".$image."<br/>";

          // Store photo info in database.
          $stmt = $db->prepare("INSERT INTO aa_images(img_id, img_title, img_category) VALUES (?, ?, ?)");
          $stmt->execute(array($id, $title, $cname));
          echo "Prepare to insert photo $id, $title, $cname"."<br/>";

          // Count how much photos where added.
          $count_add++;
        }
      }
    }

    // Execute all the queries.
    $db->commit();
    echo "Total photos added: ".$count_add."<br/>";

    // Array with the photos that are one the directory but not longer on Flickr.
    $diff_dir_flickr = array_diff($dir_photos_ids, $flickr_photos_ids);

    // Begin databse transaction.
    $db->beginTransaction();

    // Delete all photos that are not longer on Flickr.
    foreach ($diff_dir_flickr as $key => $value) {
      // Delete photo info from database.
      $stmt = $db->prepare("DELETE FROM aa_images WHERE img_id = ?");
      $stmt->execute(array($value));
      echo "Prepare to delete photo $value"."<br/>";

      if (unlink($dir.$value.".jpg")) {
        echo "Deleted ".$value." from ".$dir;

        // Delete all photos thumbnails that are not longer on Flickr.
        if (unlink($dir."thumbnails/".$value.".jpg")) {
          echo "Deleted thumbnail ".$value." from ".$dir."thumbnails/"."<br/>";
        } else {
          echo "Could not delete thumbnail ".$value." from ".$dir."thumbnails/"."<br/>";
        }
      } else {
        echo "Could not delete ".$value." from ".$dir."<br/>";
      }

      // Count how much photos where deleted.
      $count_delete++;
    }

    // Execute all the queries.
    $db->commit();
    echo "Total photos deleted: ".$count_delete."<br/><br/>";

    rewinddir();
  }
  closedir($dirmanager);
}
echo "End cron job - ".date("Y-m-d H:i:s")."<br/>";

?>
