<?php

/**
 * Trigger this file on Plugin uninstall
 */

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

// $testimonials = get_posts([
//     'post_type' => 'mv-testimonials',
//     'numberposts' => -1
// ]);

// foreach ($testimonials as $testimonial) {
//     wp_delete_post($testimonial->ID, true);
// }

global $wpdb;
$wpdb->query("DELETE FROM wp_posts WHERE post_type = 'mv-testimonials'");
$wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)");
$wpdb->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)");
