<?php

class Controller_Admin_Login extends Controller_Admin_Base {

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

        $this->template->title = 'Вход';
        $this->template->styles = array('style', 'pages/signin');
        $this->template->scripts = array('signin');
        $this->template->navbar = View::factory('admin/login/loginnavbar');
        $this->template->content = View::factory('admin/login/login', $data);
    }

    public function action_auth() {

        if($this->request->post('login') && $this->request->post('password')) {
            $er = FALSE;
            $post = $this->request->post();
            if(trim($post['login']) == '') {
                $this->template->content = 'login error';
                $this->error[] = 'Не корректное или пустое поле "Логин".';
                $er = TRUE;
            }
            if(trim($post['password']) == '') {
                $this->template->content = 'pass error';
                $this->error[] = 'Не корректное или пустое поле "Пароль".';
                $er = TRUE;
            }
            if($er) {
                $this->session->set('ErrorArray', $this->error);
                $this->redirect('admin/login');
            }

            if(isset($post['remember'])) { $rem = TRUE; } else { $rem = FALSE; }
            $this->template->content = 'auth';

            $success = Auth::instance()->login($post['login'], $post['password'], $rem);
            if($success) {
                $this->template->content = 'success';
                $this->redirect('admin');
            }
        } else {
            $this->error[] = 'Не корректное или пустое поле "Логин" или "Пароль".';
            $this->session->set('ErrorArray', $this->error);
            $this->redirect('admin');
        }
    }

    public function action_logout() {
        $this->auth->logout();
        $this->redirect('admin/login');
    }
}