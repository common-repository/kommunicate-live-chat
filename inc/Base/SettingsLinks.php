<?php

 /**
  * @package kommunicate-wp-live-chat
  * @author Kommunicate.io
 */

namespace Inc\Base;

use Inc\Base\BaseController;

class SettingsLinks extends BaseController
{
   
   public function register() 
   {

    add_filter( "plugin_action_links_$this->plugin", array( $this, 'SettingsLink' ) );

   }

   public function SettingsLink( $links ) 
   {
     
      $docs_link = '<a href="https://docs.kommunicate.io/" target="_blank">Docs</a>';
      $settings_link = '<a href="admin.php?page=kommunicate-live-chat">Settings</a>';
      array_push( $links, $docs_link, $settings_link );
      return $links;
   }
}