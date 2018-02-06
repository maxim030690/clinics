<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 23.12.2016
 * Time: 15:28
 */
class JtitHerpesView
{
    private $data;

    public function render($data, $path){
        ob_start();
        require_once $path;
        $this->data = $data;

        return ob_get_clean();

    }
}