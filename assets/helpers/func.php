<?php

// http://wiki.hashphp.org/PDO_Tutorial_for_MySQL_Developers
// Connect to the database.
function db_connect() {
  try {
    $db = new PDO('mysql:host=localhost;dbname=alonsoadriana;charset=utf8', 'root', 'root');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
  } catch (PDOException $ex) {
    error_log($ex->getMessage());
  }
}

// Get FLickr photoset (album) from a specific id.
function getInstagramTaggedMedia($hashtag) {
  $client_id = 'a1832e16662b4e3eb4de131ac3884588';
  // Set POST variables.
  $url = 'https://api.instagram.com/v1/tags/'.$hashtag.'/media/recent?client_id='.$client_id;

  // Open connection.
  $ch = curl_init();

  // Set the url, number of POST vars, POST data.
  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, TRUE);

  // Execute post.
  $result = curl_exec($ch);

  // Close connection.
  curl_close($ch);

  return json_decode($result, TRUE);
}

// http://webcheatsheet.com/php/create_thumbnail_images.php
//http://www.cristalab.com/tutoriales/clase-de-php-para-crear-thumbnails-de-imagenes-c73376l/
//http://phpimageworkshop.com/tutorial/2/creating-thumbnails.html

// Create the thumbnail of the photo and save it on $dir/thumbnail
function createThumbs($dir, $image, $thumbSize) {
  //Your Image
  $imgSrc = $dir.$image.".jpg";

  //getting the image dimensions
  list($width, $height) = getimagesize($imgSrc);

  //saving the image into memory (for manipulation with GD Library)
  $myImage = imagecreatefromjpeg($imgSrc);

  // calculating the part of the image to use for thumbnail
  if ($width > $height) {
    $y = 0;
    $x = ($width - $height) / 2;
    $smallestSide = $height;
  } else {
    $x = 0;
    $y = ($height - $width) / 2;
    $smallestSide = $width;
  }

  // copying the part into thumbnail
  //$thumbSize = 100;
  $thumb = imagecreatetruecolor($thumbSize, $thumbSize);
  imagecopyresampled($thumb, $myImage, 0, 0, $x, $y, $thumbSize, $thumbSize, $smallestSide, $smallestSide);

  //final output
  //header('Content-type: image/jpeg');
  imagejpeg($thumb, $dir."thumbnails/".$image.".jpg", 100);
}

?>