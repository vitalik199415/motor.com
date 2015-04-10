<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Pages extends Controller_Admin_Base {

    public function before() {
        parent::before();
    }

    public function action_index() {
        $data['main'] = Model::factory('Admin_Pages')->get_pages();

        $data['err_mess'] = $this->session->get('ErrorMess');
        $this->session->delete('ErrorMess');
        $data['success_mess'] = $this->session->get('SuccessMess');
        $this->session->delete('SuccessMess');

        $this->template->title = 'Страницы сайта';
        $this->template->content = View::factory('admin/pages/main', $data);
    }

    public function action_add() {
        $this->template->title = 'Добавление страницы';

        $data['langs'] = Model::factory('Admin_Langs')->get_active_langs();
        $this->template->content = View::factory('admin/pages/add_edit', $data);
    }

    public function action_edit() {
        $id = $this->request->param('id');
        $res = Model::factory('Admin_Pages')->get_pages($id);

        $data['main'] = $res[0];
        $data['id'] = $id;
        $data['langs'] = Model::factory('Admin_Langs')->get_active_langs();

        $this->template->title = 'Редактирование страницы';
        $this->template->content = View::factory('admin/pages/add_edit', $data);
    }

    public function action_save() {
        if(isset($_POST['main'])) {
            if($id = $this->request->param('id') AND $id > 0) {
                $pages = Model::factory('Admin_Pages');

                if(!$pages->save($_POST, $id)) {
                    Message::add_error('Ошибка при сохранении изменений!');
                    $this->redirect('admin/pages');
                } else {
                    Message::add_success('Изменения успешно сохранено!');
                    $this->redirect('admin/pages');
                }
            } else {
                $pages = Model::factory('Admin_Pages');

                if(!$pages->save($_POST)) {
                    Message::add_error('Ошибка при добавлении страницы!');
                    $this->redirect('admin/pages');
                } else {
                    Message::add_success('Запись успешно добавлено!');
                    $this->redirect('admin/pages');
                }
            }
        }
    }

    public function action_delete() {
        $id = $this->request->param('id');

        if($id) {
            $pages = Model::factory('Admin_Pages');
            if(!$pages->delete($id)) {
                Message::add_error('Ошибка при удалении страницы!');
                $this->redirect('admin/pages');
            } else {
                Message::add_success('Страницу успешно удалено!');
                $this->redirect('admin/pages');
            }
        } else {
            Message::add_error('Параметр ID не установлено, удаление не возможно!');
            $this->redirect('admin/pages');
        }
    }
}