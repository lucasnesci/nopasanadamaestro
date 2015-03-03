<?php
/**
 * @file
 * npnm_content_types.features.inc
 */

/**
 * Implements hook_node_info().
 */
function npnm_content_types_node_info() {
  $items = array(
    'instagram_post' => array(
      'name' => t('Instagram Post'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'video_de_famoso' => array(
      'name' => t('Video de famoso'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
