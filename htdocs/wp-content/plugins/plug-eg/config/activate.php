<?php
/**
 *  @package plug-eg
 */    
namespace config;
class Activate{
        public static function activate(){
                flush_rewrite_rules();
        }
}