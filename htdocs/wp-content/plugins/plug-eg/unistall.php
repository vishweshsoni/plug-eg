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

//clear database store data
$books= get_post( array('post_type'=>'book','numberofposts'=>-1));
foreach($books as $val){
        wp_delete_post( $val->ID,true); 
}