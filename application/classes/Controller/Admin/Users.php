<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Users extends Controller_Admin_Base {

    private $users;

    public function before() {
        parent::before();
        $this->users = Model::factory('Admin_Users');
    }

    public function action_index() {
        $data['main'] = $this->users->get_users();

        $data['err_mess'] = $this->session->get('ErrMess');
        $this->session->delete('ErrMess');
        $data['success_mess'] = $this->session->get('SuccessMess');
        $this->session->delete('SuccessMess');

        $this->template->title = 'Пользователи';
        $this->template->content = View::factory('admin/users/main', $data);
    }

    public function action_admin() {
        $id = $this->request->param('id');
        if($id) {
            if(!$this->users->set_admin($id)) {
                $this->session->set('ErrMess', 'Ошибка при выполнении действия!');
                $this->redirect('admin/users');
            } else {
                $this->session->set('SuccessMess', 'Действие успешно выполнено!');
                $this->redirect('admin/users');
            }
        } else {
            $this->session->set('ErrMess', 'Параметр ID не установлено, действие не возможно!');
            $this->redirect('admin/users');
        }

    }

    public function action_delete() {
        $id = $this->request->param('id');

        if($id) {
            if(!$this->users->delete($id)) {
                $this->session->set('ErrMess', 'Ошибка при удалении пользователя!');
                $this->redirect('admin/users');
            } else {
                $this->session->set('SuccessMess', 'Пользователя успешно удалено!');
                $this->redirect('admin/users');
            }
        } else {
            $this->session->set('ErrMess', 'Параметр ID не установлено, удаление не возможно!');
            $this->redirect('admin/users');
        }
    }
}