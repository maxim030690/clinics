<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 23.12.2016
 * Time: 15:37
 */
class JtitHerpesPublic
{

    private $model;
    private $view;
    private $view_path;

    public function __construct()
    {
        //view path
        $this->view_path = JTIT_PATH . 'site' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR;

        //model object
        require_once JTIT_PATH . 'lib' . DIRECTORY_SEPARATOR . 'JtitHerpesModel.php';
        $this->model = new JtitHerpesModel();

        //view object
        require_once JTIT_PATH.'lib'.DIRECTORY_SEPARATOR.'JtitHerpesView.php';
        $this->view = new JtitHerpesView();

        add_shortcode('jtit_tests_form', array($this, 'jtit_print_tests_form'));
        add_shortcode('jtit_home_map', array($this, 'jtit_print_home_map'));
        add_shortcode('jtit_shopping_card', array($this, 'jtit_print_shopping_card'));
        add_shortcode('jtit_individual_tests_form', array($this, 'jtit_individual_tests_form'));
        add_shortcode('jtit_find_lab', array($this, 'jtit_find_lab'));
		add_shortcode('jtit_map_main', array($this, 'jtit_map_main'));
        add_shortcode('jtit_find_select_testing_center', array($this, 'jtit_select_testing_center'));
        add_shortcode('jtit_test_and_price_order_now', array($this, 'jtit_test_and_price_order_now'));
		add_shortcode('jtit_description_of_the_laboratory', array($this, 'jtit_description_of_the_laboratory'));

        add_action('wp_enqueue_scripts', array($this,'load_style'));

        if (!empty($_POST)){
            $this->check_action($_POST);
        }
    }
	
	public function jtit_description_of_the_laboratory(){
        $data = '';
        return $this->view->render($data, $this->view_path.'description_of_the_laboratory.php');
    }

    public function jtit_test_and_price_order_now(){
        $data = '';
        return $this->view->render($data, $this->view_path.'test_and_price_order_now.php');
    }

    public function jtit_select_testing_center(){
        $data['table'] = '';
        $data['description_of_the_laboratory'] = $this->model->search_zip_get_tested_now();
        return $this->view->render($data, $this->view_path.'select_testing_center.php');
    }

    public function jtit_find_lab(){
        $data['table'] = $this->model->jtit_find_lab_table();
        $data['sort_zip'] = $this->model->jtit_find_lab_sortzip();
        return $this->view->render($data, $this->view_path.'find_lab.php');
    }
	public function jtit_map_main(){
        $data['table'] = $this->model->jtit_find_lab_table();
        $data['sort_zip'] = $this->model->jtit_find_lab_sortzip();
        return $this->view->render($data, $this->view_path.'map_main.php');
    }

    public function jtit_individual_tests_form(){
        $data = '';
        return $this->view->render($data, $this->view_path.'individual_tests_form.php');
    }

    public function jtit_print_shopping_card(){
        $data = '';
        return $this->view->render($data, $this->view_path.'shopping_card.php');
    }

    public function jtit_print_tests_form(){
        $data = '';
        return $this->view->render($data, $this->view_path.'tests_form.php');
    }

    public function jtit_print_home_map(){
        $data = '';
        return $this->view->render($data, $this->view_path.'map.php');
    }

    public function load_style(){

        wp_enqueue_script('npm.js', JTIT_URL.'assets/js/jquery-3.1.1.js', array(), null );
        wp_enqueue_script('jquery-ui-datepicker');
        wp_enqueue_script('uap-public-functions');
    }

    public function check_action($post){
		
		/* Yura 22.02.2017 start */
		if ($post['jtit_action'] == 'jtit_add_test'){
			$post_temp = $post;
			$post = array('product_id' => $post_temp['product_id']);
            $this->model->sent_order($post);
        }
		
		$this->model->redirect_to();
		
        /*if ($post['jtit_action'] == 'jtit_add_test'){
            $this->model->add_test($post);
        } elseif($post['order']) {
            print $this->model->sent_order($post);
            die;
        }*/
		/* Yura 22.02.2017 end */
    }

}