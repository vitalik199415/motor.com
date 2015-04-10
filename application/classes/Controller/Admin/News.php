<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_News extends Controller_Admin_Base {

    public function before() {
        parent::before();
    }

    public function action_index() {
        $data['main'] = Model::factory('Admin_News')->get_news();

        $data['err_mess'] = $this->session->get('ErrorMess');
        $this->session->delete('ErrorMess');
        $data['success_mess'] = $this->session->get('SuccessMess');
        $this->session->delete('SuccessMess');

        $this->template->title = 'Новости сайта';
        $this->template->content = View::factory('admin/news/main', $data);
    }

    public function action_add() {
        $this->template->title = 'Добавление новости';

        $data['langs'] = Model::factory('Admin_Langs')->get_active_langs();
        $this->template->content = View::factory('admin/news/add_edit', $data);
    }

    public function action_edit() {
        $id = $this->request->param('id');
        $res = Model::factory('Admin_News')->get_news($id);

        $data['main'] = $res[0];
        $data['id'] = $id;
        $data['langs'] = Model::factory('Admin_Langs')->get_active_langs();

        $this->template->title = 'Редактирование новости';
        $this->template->content = View::factory('admin/news/add_edit', $data);
    }

    public function action_save() {
        if(isset($_POST['main'])) {
            $news = Model::factory('Admin_News');
            if($id = $this->request->param('id') AND $id > 0) {
                if(!$news->save($_POST, $id)) {
                    Message::add_error('Ошибка при сохранении изменений!');
                    $this->redirect('admin/news');
                } else {
                    Message::add_success('Изменения успешно сохранено!');
                    $this->redirect('admin/news');
                }
            } else {
                if(!$news->save($_POST)) {
                    Message::add_error('Ошибка при добавлении новости!');
                    $this->redirect('admin/news');
                } else {
                    Message::add_success('Новость успешно добавлено!');
                    $this->redirect('admin/news');
                }
            }
        }
    }

    public function action_delete() {
        $id = $this->request->param('id');

        if($id) {
            $news = Model::factory('Admin_News');
            if(!$news->delete($id)) {
                Message::add_error('Ошибка при удалении новости!');
                $this->redirect('admin/news');
            } else {
                Message::add_success('Новость успешно удалено!');
                $this->redirect('admin/news');
            }
        } else {
            Message::add_error('Параметр ID не установлено, удаление не возможно!');
            $this->redirect('admin/news');
        }
    }
}