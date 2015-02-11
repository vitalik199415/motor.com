<?php

abstract class Controller_Admin_Base extends Controller_Template {

    public $session;
    public $auth;
    public $template = 'admin/template';

    public function before() {
        parent::before();
        $this->auth = Auth::instance();
        View::set_global('title', 'Admin panel');
        View::set_global('description', 'Admin panel');
        $this->template->styles = array('style');

        $this->session = Session::instance();

        if(strpos(Request::initial()->uri(), 'admin/login') === FALSE) {
            if($this->auth->logged_in('admin') == 0) {
                $this->session->set('ErrorArray', array('You don`t have permission!'));
                $this->redirect('admin/login');
            }
        }
    }

}