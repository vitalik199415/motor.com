<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Base extends Controller_Template {

    public $lang;
    public $session;
    public $auth;
    public $currency;
    public $user_id;
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
            $this->user_id = $this->auth->get_user()->id;
        }

        if ($this->session->get('InfoMess')) {
            $this->template->info = $this->session->get('InfoMess');
            $this->session->delete('InfoMess');
        }

        if ($this->session->get('SuccessMess')) {
            $this->template->success = $this->session->get('SuccessMess');
            $this->session->delete('SuccessMess');
        }

        if ($this->session->get('ErrMess')) {
            $this->template->error = $this->session->get('ErrMess');
            $this->session->delete('ErrMess');
        }

        $data['langs'] = Model::factory('Admin_Langs')->get_active_langs();
        $data['lang']  = Model::factory('Admin_Langs')->get_lang_info($this->lang);
        $data['currency'] = Model::factory('Admin_Currency')->get_active_currency();
        $data['curr'] = Model::factory('Admin_Currency')->get_currency_info($this->currency);

        $data['menu'] = Model::factory('Admin_Menu')->get_all_menu(FALSE, $this->lang);
        $data['categories'] = Controller_Menu::build_menu($this->lang);

        $this->template->title = 'Motor.COM';

        $this->template->header = View::factory('front/header', $data);
        $this->template->left_sidebar = View::factory('front/left_block', $data);
        //$this->template->profiler = View::factory('profiler/stats');
        $this->template->footer = View::factory('front/footer');
    }

    public static function build_tree($cats,$parent_id, $url, $only_parent = false){
        if(is_array($cats) and isset($cats[$parent_id])){
            $tree = '<ul>';
            if($only_parent==false){
                foreach($cats[$parent_id] as $cat){
                    $tree .= '<li><a href="'.URL::set_url('products/'.$url.'/'.$cat['url']).'">'.$cat['name'];
                    $tree .=  build_tree($cats,$cat['id_parent'], $url);
                    $tree .= '</a></li>';
                }
            }elseif(is_numeric($only_parent)){
                $cat = $cats[$parent_id][$only_parent];
                $tree .= '<li>'.$cat['name'].' #'.$cat['id'];
                $tree .=  build_tree($cats,$cat['id'], $url);
                $tree .= '</li>';
            }
            $tree .= '</ul>';
        }
        else return null;
        return $tree;
    }

    public static function set_url($url) {
        return URL::base().$url;
    }

}