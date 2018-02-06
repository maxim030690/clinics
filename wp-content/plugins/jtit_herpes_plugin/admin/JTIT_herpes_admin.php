<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 23.12.2016
 * Time: 15:05
 */
class JTIT_herpes_admin
{

    private $view;
    private $view_path;
    private $model;

    /**
     * MLM_JTI_admin constructor.
     */
    public function __construct() {
        $this->view_path = JTIT_PATH.'admin'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR;

        require_once JTIT_PATH.'lib'.DIRECTORY_SEPARATOR.'JtitHerpesModel.php';
        $this->model = new JtitHerpesModel();

        require_once JTIT_PATH.'lib'.DIRECTORY_SEPARATOR.'JtitHerpesView.php';
        $this->view = new JtitHerpesView();

        add_action('admin_menu', array($this, 'jtit_add_menu'));

        //SCRIPTS && STYLE
        add_action('admin_enqueue_scripts', array($this,'load_bootstrap'));
//        add_action('admin_enqueue_scripts', array($this,'load_style'));


        if (!empty($_POST)){
            $this->check_action($_POST);
        }

    }


    public function check_action($post){
        if($post['jtit_action'] == 'save_tests_prices'){
            $this->model->set_tests_prices($post);
        } elseif ($post['jtit_action'] == 'save_order_url'){
            $this->model->set_order_url($post);
        } elseif ($post['jtit_action'] == 'save_city_name'){
            $this->model->set_city_name($post);
        } elseif ($post['jtit_action'] == 'save_affiliate_ID'){
            $this->model->set_affiliate_ID($post);
        }
    }



    public function jtit_add_menu() {
        add_menu_page('JTIT Toplevel', 'JTIT herpes settings', 'manage_options', 'my-top-level-slug', array($this,'print_page'));

//        add_submenu_page( 'my-top-level-slug', 'JTIT Toplevel', 'JTIT herpes plugin',
//            'manage_options', 'my-top-level-slug');
//        add_submenu_page( 'my-top-level-slug', 'JTIT Submenu Page', 'JTIT herpes plugin Settings',
//            'manage_options', 'my-top-level-slug1', array($this,'print_settings_page'));

    }

    public function print_page(){
        $data = array();
        echo $this->view->render($data,$this->view_path.'settings_page.php');
    }

    public function print_settings_page(){
        $data = array();
        echo $this->view->render($data,$this->view_path.'settings_page.php');
//        return $this->view->render($data,$this->view_path.'settings_page.php');
//        echo 'settings page';

    }

    public function load_bootstrap(){

    }

}

