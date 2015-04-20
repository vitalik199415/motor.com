<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Limitn extends Controller_Base {

    /*    public function before() {
            parent::before();
        }*/

    public function action_index() {
        $lang = $this->request->param('param');
        if($lang) {
            $this->session->set('news_limit', $lang);
/*
            $config = Kohana::$config->load('config');
            $config['product_limit'] = $lang;
            $config->save();*/

            header('LOCATION:'.$_SERVER['HTTP_REFERER']);
            die();
        }
    }

}