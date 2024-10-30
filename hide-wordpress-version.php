<?php
/*
  Plugin Name: Hide My Wordpress version
  Description: Protect your wordpress from hack's and prevent generate meta element that will expose your wp version to the world.
  protect your wp website from hack and deface with just one click!
  Author: Oren hahiashvili
  Author URI: https://www.script.co.il
  Text Domain: hide-my-wordpress-version
  Version: 1.0.0
*/
defined('ABSPATH') or die('not allowed.');
remove_action('wp_head', 'wp_generator');