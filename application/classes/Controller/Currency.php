<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Currency extends Controller_Base {

/*    public function before() {
        parent::before();
    }*/

    public function action_index() {
        $code = $this->request->param('param');

        if($code) {
            $data = Model::factory('Admin_Currency')->get_currency_info($code);
            $curr['code'] = $code;
            $curr['rate'] = $data['rate'];
            $this->session->set('currency', $curr);

            /*$config = Kohana::$config->load('config');
            $config['currency'] = $code;
            $config->save();*/

            header('LOCATION:'.$_SERVER['HTTP_REFERER']);
            //echo "<script>history.go(-1).delay(1000);</script>";
            die();
        }
    }

}