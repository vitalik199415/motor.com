<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Payment extends Controller_Admin_Base {

    public function before() {
        parent::before();

    }

    public function action_index() {
        $data['main'] = Model::factory('Admin_Payment')->get_payment();


        $data['err_mess'] = $this->session->get('ErrorMess');
        $this->session->delete('ErrorMess');
        $data['success_mess'] = $this->session->get('SuccessMess');
        $this->session->delete('SuccessMess');

        $this->template->title = 'Cпособы оплаты';
        $this->template->content = View::factory('admin/payment/main', $data);
    }

    public function action_add() {
        $this->template->title = 'Добавление метода оплаты';

        $data['langs'] = Model::factory('Admin_Langs')->get_active_langs();
        $this->template->content = View::factory('admin/payment/add_edit', $data);
    }

    public function action_edit() {
        $id = $this->request->param('id');
        $cat = Model::factory('Admin_Payment');
        $res = $cat->get_payment($id);

        $data['main'] = $res[0];
        $data['desc'] = $cat->get_payment_desc($id);
        $data['id'] = $id;
        $data['langs'] = Model::factory('Admin_Langs')->get_active_langs();

        $this->template->title = 'Редактирование метода оплаты';
        $this->template->content = View::factory('admin/payment/add_edit', $data);
    }

    public function action_save() {
        if(isset($_POST['main'])) {
            $payment = Model::factory('Admin_Payment');
            if($id = $this->request->param('id') AND $id > 0) {
                if(!$payment->save($_POST, $id)) {
                    Message::add_error('Ошибка при сохранении изменений!');
                    $this->redirect('admin/payment');
                } else {
                    Message::add_success('Изменения успешно сохранено!');
                    $this->redirect('admin/payment');
                }
            } else {
                if(!$payment->save($_POST)) {
                    Message::add_error('Ошибка при добавлении метода!');
                    $this->redirect('admin/payment');
                } else {
                    Message::add_success('Запись успешно добавлено!');
                    $this->redirect('admin/payment');
                }
            }
        }
    }

    public function action_delete() {
        $id = $this->request->param('id');

        if($id) {
            $payment = Model::factory('Admin_Payment');
            if(!$payment->delete($id)) {
                Message::add_error('Ошибка при удалении метода!');
                $this->redirect('admin/payment');
            } else {
                Message::add_success('Метод успешно удалено!');
                $this->redirect('admin/payment');
            }
        } else {
            Message::add_error('Параметр ID не установлено, удаление не возможно!');
            $this->redirect('admin/payment');
        }
    }

}