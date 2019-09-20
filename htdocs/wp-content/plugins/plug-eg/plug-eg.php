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

    public $plugin;
    function __construct(){
        $this->plugin = plugin_basename( __FILE__ );
    }

    function activate(){
      require_once plugin_dir_path( __FILE__ ).'/config/plug-eg-activate.php';      
      //flush rewrite rules
      //when we change anything it will chnage everytihn by rewriting 
      PlugEgActivate::activate();
    } 
      
    function register(){
        add_action('admin_enqueue_scripts',array($this,'enqueue'));


        add_action('admin_menu',array($this,'add_admin_pages'));
        
        add_filter("plugin_action_links_$this->plugin",array($this,'settings_links') );

      }
    public function settings_links($links){
        $settings_link='<a href="admin.php?page=plug_eg">settings</a>';
        array_push($links,$settings_link);
        return $links; 
    }
    public function add_admin_pages(){
        add_menu_page('PlugEg','PluginEg','manage_options','plug_eg',array($this,'admin_index'),'dashicons-store',110);
    }

    public function admin_index(){
        require_once plugin_dir_path( __FILE__ ).'templates/admin.php';
    }
    protected function create_post_type(){
        add_action( 'init',array($this,'custom_post_type'));
    }

    function enqueue(){
        //enque all scripts
        wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/mystyle.css', __FILE__ ));
        wp_enqueue_style( 'mypluginscript', plugins_url( '/assets/myscript.js', __FILE__ ));
    }

    function custom_post_type(){
        register_post_type( 'book',['public'=>true,'label'=>'Books'] );      
    }


 }

 //Check if Class Exis or not
 
    $plugineg = new PlugEg();
    $plugineg->register();
 

 //activation
 //it will triger activate function form our class.
 register_activation_hook( __FILE__,array('PlugEgActivate','activate'));

 //deactivation
 //it will triger deactviate function from out class.
 require_once plugin_dir_path( __FILE__ ).'config/plug-eg-deactivate.php';
 register_deactivation_hook( __FILE__,array('PlugEgDeActivate','deactivate'));

 
 