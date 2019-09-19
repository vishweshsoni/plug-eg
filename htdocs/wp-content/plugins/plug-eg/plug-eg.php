<?php
/**
 *  @package plug-eg
 */
/**
   Plugin Name: plug-eg
   Plugin URI: https://github.com/vishweshsoni/plug-eg 
   Description: My First Attempt to writing custom plugin
   version: 1.0.0
   Author: Vishwesh Soni
   Author URI: https://github.com/vishweshsoni
   License:GPL v2 or later
   Text-Domain: plug-eg
*/
/*
      This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.if not,write to the free software 
    Foundation,Inc. 51 Frankstine Street,Fifth Floor,Boston,MA 02110-1301,USA.
    
    Copyright 2005-2015 Automattic Inc.
 */


//  if(! defined('ABSPATH')){
//         die;
//  }
defined('ABSPATH') or die('hey what are you doing!');
//This is main Class
 class PlugEg{

   function __construct() {
     add_action('init', array($this , 'custom_post_type' ));
   }


  function activate(){
    $this->custom_post_type();
    //flush rewrite rules
    //when we change anything it will chnage everytihn by rewriting
    flush_rewrite_rules();
  } 
  
  
  function deactivate(){

  }

  
  

  function custom_post_type(){
      register_post_type( 'book',['public'=>true,'label'=>'Books'] );      
  }

 }

 //Check if Class Exis or not
 if(class_exists('PlugEg')){
    $plugineg = new PlugEg();
 }

 //activation
 //it will triger activate function form our class.
 register_activation_hook( __FILE__,array($plugineg,'activate'));

 //deactivation
 //it will triger deactviate function from out class.
 register_deactivation_hook( __FILE__,array($plugineg,'deactivate'));

 
