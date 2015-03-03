<?php
/**
 * @file
 * npnm_views.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function npnm_views_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'get_all_famous_videos';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'get_all_famous_videos';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Profile image */
  $handler->display->display_options['fields']['field_profile_image']['id'] = 'field_profile_image';
  $handler->display->display_options['fields']['field_profile_image']['table'] = 'field_data_field_profile_image';
  $handler->display->display_options['fields']['field_profile_image']['field'] = 'field_profile_image';
  $handler->display->display_options['fields']['field_profile_image']['label'] = 'profile_image';
  $handler->display->display_options['fields']['field_profile_image']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_profile_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_profile_image']['type'] = 'image_url';
  $handler->display->display_options['fields']['field_profile_image']['settings'] = array(
    'url_type' => '0',
    'image_style' => '150x150',
    'image_link' => '',
  );
  /* Field: Content: YouTube link */
  $handler->display->display_options['fields']['field_youtube_link']['id'] = 'field_youtube_link';
  $handler->display->display_options['fields']['field_youtube_link']['table'] = 'field_data_field_youtube_link';
  $handler->display->display_options['fields']['field_youtube_link']['field'] = 'field_youtube_link';
  $handler->display->display_options['fields']['field_youtube_link']['label'] = 'youtube_link';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'video_de_famoso' => 'video_de_famoso',
  );

  /* Display: Services */
  $handler = $view->new_display('services', 'Services', 'services_1');
  $handler->display->display_options['path'] = 'getAllFamousVideos';
  $export['get_all_famous_videos'] = $view;

  $view = new view();
  $view->name = 'get_all_instagram_posts';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'get_all_instagram_posts';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Field: Content: Link */
  $handler->display->display_options['fields']['field_link']['id'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['table'] = 'field_data_field_link';
  $handler->display->display_options['fields']['field_link']['field'] = 'field_link';
  $handler->display->display_options['fields']['field_link']['label'] = 'link';
  /* Field: Content: Thumbnail link */
  $handler->display->display_options['fields']['field_thumbnail_link']['id'] = 'field_thumbnail_link';
  $handler->display->display_options['fields']['field_thumbnail_link']['table'] = 'field_data_field_thumbnail_link';
  $handler->display->display_options['fields']['field_thumbnail_link']['field'] = 'field_thumbnail_link';
  $handler->display->display_options['fields']['field_thumbnail_link']['label'] = 'thumbnail';
  /* Field: Field: Fullname */
  $handler->display->display_options['fields']['field_user_fullname']['id'] = 'field_user_fullname';
  $handler->display->display_options['fields']['field_user_fullname']['table'] = 'field_data_field_user_fullname';
  $handler->display->display_options['fields']['field_user_fullname']['field'] = 'field_user_fullname';
  $handler->display->display_options['fields']['field_user_fullname']['label'] = 'fullname';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Sort criterion: Content: Timestamp (field_timestamp) */
  $handler->display->display_options['sorts']['field_timestamp_value']['id'] = 'field_timestamp_value';
  $handler->display->display_options['sorts']['field_timestamp_value']['table'] = 'field_data_field_timestamp';
  $handler->display->display_options['sorts']['field_timestamp_value']['field'] = 'field_timestamp_value';
  $handler->display->display_options['sorts']['field_timestamp_value']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'instagram_post' => 'instagram_post',
  );

  /* Display: Services */
  $handler = $view->new_display('services', 'Services', 'services_1');
  $handler->display->display_options['path'] = 'getAllInstagramPosts';
  $export['get_all_instagram_posts'] = $view;

  return $export;
}
