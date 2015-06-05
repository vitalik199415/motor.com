<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Base {

    public function before() {
        parent::before();
    }

    public function action_index()
    {
        // Проверям, вдруг пользователь уже зашел
        if(Auth::instance()->logged_in())
        {
            // И если это так, то отправляем его сразу на страницу пользователей
            $this->redirect(URL::set_url('/'));

        }

        $data = array();
        $data['info_mess'] = $this->session->get('InfoMess');
        $this->session->delete('InfoMess');

        $this->template->title = 'Вход';

        $this->template->content = View::factory('front/login', $data);
    }

    public function action_login()
    {
        // Если же пользователь не зашел, но данные на страницу пришли, то:
        if ($_POST)
        {
            if(isset($_POST['remember'])) { $rem = TRUE; } else { $rem = FALSE; }
            // в $status помещаем результат функции login
            $status = $this->auth->login($_POST['login'], $_POST['password'], $rem);
            // Если логин успешен, то
            if ($status)
            {
                // Отправляем пользователя на главную страницу
                $this->redirect(URL::set_url('profile'));
            }
            else
            {
                Message::add_info('Login error');
                $this->redirect(URL::set_url('login'));
            }
        }
        // Грузим view логина
        $this->redirect(URL::set_url('login'));
    }

    // Метод разлогивания
    public function action_logout()
    {
        // Пытаемся разлогиниться
        $this->auth->logout();
        $this->redirect(URL::set_url('login'));
    }

} // End Welcome
