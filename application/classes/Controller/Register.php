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

            /*// Создаем переменную, отвечающую за связь с моделью данных User
            $model = ORM::factory('User');
            // Вносим в эту переменную значения, переданные из POST
            $model->values(array(
                'username' => $_POST['login'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'password_confirm' => $_POST['rep_password'],
            ));
            try
            {
                // Пытаемся сохранить пользователя (то есть, добавить в базу)
                $model->save();
                // Назначаем ему роли
                // $model->add('Roles', ORM::factory('Role')->where('name', '=', 'login')->find());
                $roles = ORM::factory('Roles_users');


                $user = ORM::factory('User')
                    ->where('username', '=', $_POST['login'])->find();
                $password = hashD($_POST['password'], $user->id);
                $user->password = $password;
                $user->save();

                // И отправляем его на страницу пользователя
                $this->redirect(URL::set_url('login'));
            }
            catch (ORM_Validation_Exception $e)
            {
                // Это если возникли какие-то ошибки
                echo $e;
            }*/
        }
        // Загрузка формы логина
        $this->redirect(URL::set_url('login'));
    }
}