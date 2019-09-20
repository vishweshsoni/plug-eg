<?php
/**
 *  @package plug-eg
 */    
class PlugEgActivate{
        public static function activate(){
                flush_rewrite_rules();
        }
}