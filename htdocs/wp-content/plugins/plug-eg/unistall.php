<?php
/**
 * Trigger this code when plugin call uninstall
 * 
 * @package plug-eg
 * 
 */
if(!defined('WP_UNINSTALL_PLUGIN')){
        die;
}

// Method 1 using for each loop
//clear database store data
$books= get_post( array('post_type'=>'book','numberofposts'=>-1));
foreach($books as $val){
        wp_delete_post( $val->ID,true); 
}


//method 2 using sql
//access the database via sql
// global $wpdb;
// $wpdb->query("DELETE FROM wp_posts WHERE post_type='book'");
// $wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id from wp_posts)");
// $wpdb->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN(SELECT id FROM wp_posts)");