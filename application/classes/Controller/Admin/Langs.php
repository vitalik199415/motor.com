<?php
/**
 * Created by PhpStorm.
 * User: vitalik
 * Date: 16.02.15
 * Time: 16:47
 */

class Controller_Admin_Langs extends Controller_Admin_Base {

    public function before() {
        parent::before();
    }

    public function action_index() {
        $data['langs'] = Model::factory('Admin_Langs')->get_langs();

        $data['err_mess'] = Session::instance()->get('ErrMess');
        $this->session->delete('ErrMess');
        $data['success_mess'] = Session::instance()->get('SuccessMess');
        $this->session->delete('SuccessMess');

        $this->template->content = View::factory('admin/langs/main', $data);
    }

    public function action_add() {
        $this->template->content = View::factory('admin/langs/add_edit');
    }

    public function action_edit() {
        $id = $this->request->param('id');
        $res = Model::factory('Admin_Langs')->get_langs($id);
        $data['main'] = $res[0];
        $data['id'] = $id;

        $this->template->content = View::factory('admin/langs/add_edit', $data);
    }

    public function action_save() {
        if(isset($_POST['main'])) {
            if($id = $this->request->param('id') AND $id > 0) {
                $langs = Model::factory('Admin_Langs');

                if(!$langs->save($_POST, $id)) {
                    Session::instance()->set('ErrMess', 'Ошибка при сохранении изменений!');
                    $this->redirect('admin/langs');
                } else {
                    Session::instance()->set('SuccessMess', 'Изменения успешно сохранено!');
                    $this->redirect('admin/langs');
                }
            } else {
                $langs = Model::factory('Admin_Langs');

                if(!$langs->save($_POST)) {
                    Session::instance()->set('ErrMess', 'Ошибка при сохранении изменений!');
                    $this->redirect('admin/langs');
                } else {
                    Session::instance()->set('SuccessMess', 'Изменения успешно сохранено!');
                    $this->redirect('admin/langs');
                }
            }
        }
    }

    public function action_delete() {
        $id = $this->request->param('id');

        if($id) {
            $langs = Model::factory('Admin_Langs');
            if(!$langs->delete($id)) {
                $this->session->set('ErrMess', 'Ошибка при удалении языка!');
                $this->redirect('admin/langs');
            } else {
                $this->session->set('SuccessMess', 'Язык успешно удалено!');
                $this->redirect('admin/langs');
            }
        } else {
            $this->session->set('ErrMess', 'Параметр ID не установлено, удаление не возможно!');
            $this->redirect('admin/langs');
        }
    }
}