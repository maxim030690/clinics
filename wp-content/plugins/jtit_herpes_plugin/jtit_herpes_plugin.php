<?php

/*
Plugin Name: JTIT_herpes_plugin
Plugin URI: http://jointoit.com
Description: Plugin for jtit_herpes_theme
Version: 1.0.1 29.12.2016 19:00
Author: Sergiy Zub
Author URI: http://jointoit.com
*/


class JTIT_herpes_plugin {

    private static $instance;

    public function __construct() {
    }

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        if(!self::$instance) {
            return new self();
        }
        return self::$instance;
    }


    public function run(){
        /// PATHS
        if (!defined('DS')){
            define('DS', DIRECTORY_SEPARATOR);
        }
        if (!defined('JTIT_PATH')){
            define('JTIT_PATH', dirname(__FILE__).DS);
        }

        if (!defined('JTIT_URL')){
            define('JTIT_URL', plugin_dir_url(__FILE__));
        }

        require_once JTIT_PATH . 'lib'.DS.'Dump.php';
        Dump::setView(false);

        if (is_admin() && !defined('DOING_AJAX')){
            /// ADMIN
            require_once JTIT_PATH . 'admin'.DS.'JTIT_herpes_admin.php';
            $admin_object = new JTIT_herpes_admin();
        } else {
            /// PUBLIC
            require_once JTIT_PATH . 'site'.DS.'JtitHerpesPublic.php';
            $user_object = new JtitHerpesPublic();
        }


    }


}

$plugin = JTIT_herpes_plugin::getInstance();
$plugin->run();