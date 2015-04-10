<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Admin_Base extends Controller_Template {

    public $lang;
    public $session;
    public $auth;
    public $template = 'admin/template';

    public function before()
    {
        parent::before();

        $this->auth = Auth::instance();
        View::set_global('title', 'Admin panel');
        View::set_global('description', 'Admin panel');
        //$this->template->styles = array('pages/dashboard', 'style');
        Template::add_css('admin/style');
        Template::add_css('admin/pages/dashboard');
        $this->session = Session::instance();

        $this->lang = I18n::lang();

        if (strpos(Request::initial()->uri(), 'admin/login') === FALSE) {
            if ($this->auth->logged_in('admin') == 0) {
                //$this->session->set('ErrorArray', array('Залогиньтесь для пользования админкой!'));
                $this->redirect('admin/login');
            }
        } else {
            if ($this->auth->logged_in('admin') == 1) {
                //$this->session->set('ErrorArray', array('Залогиньтесь для пользования админкой!'));
                $this->redirect('admin');
            }
        }

        if ($this->auth->logged_in('admin') != 0) {
            $user['login'] = $this->auth->get_user()->username;
            $user['email'] = $this->auth->get_user()->email;
            $this->template->navbar = View::factory('admin/navbar', $user);
            $this->template->subnavbar = View::factory('admin/subnavbar');
            //$this->template->footer = View::factory('admin/footer');
        }
    }

    public static function set_url($url) {
        return URL::base().$url;
    }

}