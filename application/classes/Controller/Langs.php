<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Langs extends Controller_Base {

/*    public function before() {
        parent::before();
    }*/

    public function action_index() {
        $lang = $this->request->param('param');
        if($lang) {
            $this->session->set('lang', $lang);

            /*$config = Kohana::$config->load('config');
            $config['lang'] = $lang;
            $config->save();*/

            header('LOCATION:'.$_SERVER['HTTP_REFERER']);
            //echo "<script>history.go(-1).delay(1000);</script>";
            die();
        }
    }

}