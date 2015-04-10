<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Base extends Controller_Template {

    public $lang;
    public $session;
    public $auth;
    public $currency;
    public $template = 'front/template';

    public function before()
    {
        parent::before();
        $data = array();
        $this->session = Session::instance();
        $this->auth = Auth::instance();
        $config = Kohana::$config->load('config');

        if($this->session->get('lang') != '') {
            I18n::lang($this->session->get('lang'));
        } else { I18n::lang($config['lang']); }
        $this->lang = I18n::lang();

        if($this->session->get('currency') != '') {
            $this->currency = $this->session->get('currency')['code'];
        } else { $this->currency = $config['currency']; }

        if(!$this->session->get('product_limit')) {
            $this->session->set('product_limit', $config['product_limit']);
        }

        View::set_global('title', 'Motor.COM');
        View::set_global('description', 'Motor.COM');

        if ($this->auth->logged_in('admin') != 0) {
            $this->session->set('admin', 1);
            $data['admin'] = 1;
        }

        if ($this->auth->logged_in() != 0) {
            $data['login'] = $this->auth->get_user()->username;
        }

        $data['langs'] = Model::factory('Admin_Langs')->get_active_langs();
        $data['lang']  = Model::factory('Admin_Langs')->get_lang_info($this->lang);
        $data['currency'] = Model::factory('Admin_Currency')->get_active_currency();
        $data['curr'] = Model::factory('Admin_Currency')->get_currency_info($this->currency);

        $this->template->title = 'Motor.COM';

        $this->template->header = View::factory('front/header', $data);
        $this->template->footer = View::factory('front/footer');
    }

    public static function set_url($url) {
        return URL::base().$url;
    }

}