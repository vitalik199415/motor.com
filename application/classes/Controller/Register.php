<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Register extends Controller_Base {

    private $error = array();

    public function before() {
        parent::before();
    }

    public function action_index() {
        //if($this->auth->logged_in('admin') != 0) { $this->redirect('admin'); }
        $data = array();
        if ($this->session->get('ErrorArray')) {
            $data['errors'] = $this->session->get('ErrorArray');
            $this->session->delete('ErrorArray');
        }

        $this->template->title = 'Register';
        $this->template->content = View::factory('front/register', $data);
    }

    public function action_register()
    {
        // Если есть данные, присланные методом POST
        if ($_POST)
        {
            if(Model::factory('Register')->register($_POST)) {
                $this->redirect(URL::set_url('login'));
            } else {
                $this->redirect(URL::set_url('register'));
            }
        }
        // Загрузка формы логина
        $this->redirect(URL::set_url('login'));
    }
}