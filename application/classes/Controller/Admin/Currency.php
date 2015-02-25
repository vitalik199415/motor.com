<?php
/**
 * Created by PhpStorm.
 * User: vitalik
 * Date: 24.02.15
 * Time: 17:58
 */

class Controller_Admin_Currency extends Controller_Admin_Base {

    public function before() {
        parent::before();
    }

    public function action_index() {
        $data['main'] = Model::factory('Admin_Currency')->get_currency();

        $data['err_mess'] = $this->session->get('ErrMess');
        $this->session->delete('ErrMess');
        $data['success_mess'] = $this->session->get('SuccessMess');
        $this->session->delete('SuccessMess');

        $this->template->title = 'Валюта';
        $this->template->content = View::factory('admin/currency/main', $data);
    }

    public function action_add() {
        $this->template->title = 'Добавление валюты';
        $this->template->content = View::factory('admin/currency/add_edit');
    }

    public function action_edit() {
        $id = $this->request->param('id');
        $res = Model::factory('Admin_Currency')->get_currency($id);
        $data['main'] = $res[0];
        $data['id'] = $id;

        $this->template->title = 'Редактирование валюты';
        $this->template->content = View::factory('admin/currency/add_edit', $data);
    }

    public function action_save() {
        if(isset($_POST['main'])) {
            if($id = $this->request->param('id') AND $id > 0) {
                $langs = Model::factory('Admin_Currency');

                if(!$langs->save($_POST, $id)) {
                    Session::instance()->set('ErrMess', 'Ошибка при сохранении изменений!');
                    $this->redirect('admin/currency');
                } else {
                    Session::instance()->set('SuccessMess', 'Изменения успешно сохранено!');
                    $this->redirect('admin/currency');
                }
            } else {
                $langs = Model::factory('Admin_Currency');

                if(!$langs->save($_POST)) {
                    Session::instance()->set('ErrMess', 'Ошибка при сохранении изменений!');
                    $this->redirect('admin/currency');
                } else {
                    Session::instance()->set('SuccessMess', 'Изменения успешно сохранено!');
                    $this->redirect('admin/currency');
                }
            }
        }
    }

    public function action_delete() {
        $id = $this->request->param('id');

        if($id) {
            $langs = Model::factory('Admin_Currency');
            if(!$langs->delete($id)) {
                $this->session->set('ErrMess', 'Ошибка при удалении валюты!');
                $this->redirect('admin/currency');
            } else {
                $this->session->set('SuccessMess', 'Язык успешно удалено!');
                $this->redirect('admin/currency');
            }
        } else {
            $this->session->set('ErrMess', 'Параметр ID не установлено, удаление не возможно!');
            $this->redirect('admin/currency');
        }
    }
}