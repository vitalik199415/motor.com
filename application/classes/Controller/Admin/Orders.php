<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Orders extends Controller_Admin_Base {

    private $users;

    public function before() {
        parent::before();
    }

    public function action_index() {
        $data['main'] = Model::factory('Admin_Orders')->get_orders();

        $data['err_mess'] = $this->session->get('ErrMess');
        $this->session->delete('ErrMess');
        $data['success_mess'] = $this->session->get('SuccessMess');
        $this->session->delete('SuccessMess');

        $this->template->title = 'Заказы';
        $this->template->content = View::factory('admin/orders/main', $data);
    }

    public function action_view() {
        $id = $this->request->param('id');
        if($id) {
            $data = Model::factory('Admin_Orders')->get_order_info($id);
            $this->template->title = 'Просмотр заказа';
            $this->template->content = View::factory('admin/orders/view', $data);
        } else {
            $this->session->set('ErrMess', 'Параметр ID не установлено, действие не возможно!');
            $this->redirect('admin/orders');
        }

    }

    public function action_delete() {
        $id = $this->request->param('id');

        if($id) {
            if(!$this->orders->delete($id)) {
                $this->session->set('ErrMess', 'Ошибка при удалении пользователя!');
                $this->redirect('admin/orders');
            } else {
                $this->session->set('SuccessMess', 'Пользователя успешно удалено!');
                $this->redirect('admin/orders');
            }
        } else {
            $this->session->set('ErrMess', 'Параметр ID не установлено, удаление не возможно!');
            $this->redirect('admin/orders');
        }
    }
}