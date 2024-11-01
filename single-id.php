<?php
/*
Plugin Name: Single ID
Description: This plugin allows the user to create single-id.php pages where the id corresponds to category id.
Author: Gezim Basha
Author URI: unnum.wordpress.com
Version: 1.0
License: GPLv2 or later
*/

define('SID_PATH', WP_PLUGIN_URL . '/' . plugin_basename(
dirname(__FILE__) ) . '/' );
define('SID_NAME', "Single ID");
define ("SID_VERSION", "1.0");
define ("SID_SLUG", 'single-id');

// Global check to see if the filter is neccessary
$SID_FILTER_BOOLEAN = true;

function sid_add_singleid($single_template)
{
  // Get the root template directory for later use
  $tmpl = get_template_directory();

  // Self explanatory I presume
  $postid = get_queried_object_id();

  // Retrieve the category id from the
  $id = get_the_category($postid)[0]->term_id;

  // If the ID has been grabbed, and the file single-id.php exists, where the id is an integer
  // we assign the full path to the single_template value
  // otherwise just set the global check to false so we don't do anything with the plugin to mess things up
  if($id && file_exists($tmpl."/single-$id.php"))
    $single_template = $tmpl."/single-$id.php";
  else
    $SID_FILTER_BOOLEAN = false;
  return $single_template;
}

// And ultimately, if all checks out, apply the filter
if($SID_FILTER_BOOLEAN)
  add_filter("single_template", "sid_add_singleid");