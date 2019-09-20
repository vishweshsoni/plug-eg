<?php
/**
 *  @package plug-eg
 */    
class PlugEgDeActivate{
        public static function deactivate(){
                flush_rewrite_rules();
        }
}