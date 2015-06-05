<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Shipping extends Controller_Admin_Base {

    public function before() {
        parent::before();

    }

    public function action_index() {
        $data['main'] = Model::factory('Admin_Shipping')->get_shipping();


        $data['err_mess'] = $this->session->get('ErrorMess');
        $this->session->delete('ErrorMess');
        $data['success_mess'] = $this->session->get('SuccessMess');
        $this->session->delete('SuccessMess');

        $this->template->title = 'Cпособы оплаты';
        $this->template->content = View::factory('admin/shipping/main', $data);
    }

    public function action_add() {
        $this->template->title = 'Добавление метода оплаты';

        $data['langs'] = Model::factory('Admin_Langs')->get_active_langs();
        $this->template->content = View::factory('admin/shipping/add_edit', $data);
    }

    public function action_edit() {
        $id = $this->request->param('id');
        $cat = Model::factory('Admin_Shipping');
        $res = $cat->get_shipping($id);

        $data['main'] = $res[0];
        $data['desc'] = $cat->get_shipping_desc($id);
        $data['id'] = $id;
        $data['langs'] = Model::factory('Admin_Langs')->get_active_langs();

        $this->template->title = 'Редактирование метода оплаты';
        $this->template->content = View::factory('admin/shipping/add_edit', $data);
    }

    public function action_save() {
        if(isset($_POST['main'])) {
            $shipping = Model::factory('Admin_Shipping');
            if($id = $this->request->param('id') AND $id > 0) {
                if(!$shipping->save($_POST, $id)) {
                    Message::add_error('Ошибка при сохранении изменений!');
                    $this->redirect('admin/shipping');
                } else {
                    Message::add_success('Изменения успешно сохранено!');
                    $this->redirect('admin/shipping');
                }
            } else {
                if(!$shipping->save($_POST)) {
                    Message::add_error('Ошибка при добавлении метода!');
                    $this->redirect('admin/shipping');
                } else {
                    Message::add_success('Запись успешно добавлено!');
                    $this->redirect('admin/shipping');
                }
            }
        }
    }

    public function action_delete() {
        $id = $this->request->param('id');

        if($id) {
            $shipping = Model::factory('Admin_Shipping');
            if(!$shipping->delete($id)) {
                Message::add_error('Ошибка при удалении метода!');
                $this->redirect('admin/shipping');
            } else {
                Message::add_success('Метод успешно удалено!');
                $this->redirect('admin/shipping');
            }
        } else {
            Message::add_error('Параметр ID не установлено, удаление не возможно!');
            $this->redirect('admin/shipping');
        }
    }

}