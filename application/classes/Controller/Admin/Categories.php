<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Categories extends Controller_Admin_Base {

    public function before() {
        parent::before();

    }

    public function action_index() {
        $data['main'] = Model::factory('Admin_Categories')->get_categories();

        $data['err_mess'] = $this->session->get('ErrorMess');
        $this->session->delete('ErrorMess');
        $data['success_mess'] = $this->session->get('SuccessMess');
        $this->session->delete('SuccessMess');

        $this->template->title = 'Категории товаров';
        $this->template->content = View::factory('admin/categories/main', $data);
    }

    public function action_add() {
        $this->template->title = 'Добавление категории';

        $data['categories'] = Model::factory('Admin_Categories')->get_cat();
        $data['langs'] = Model::factory('Admin_Langs')->get_active_langs();
        $this->template->content = View::factory('admin/categories/add_edit', $data);
    }

    public function action_edit() {
        $id = $this->request->param('id');
        $cat = Model::factory('Admin_Categories');
        $res = $cat->get_categories($id);

        $data['main'] = $res[0];
        $data['desc'] = $cat->get_cat_desc($id);
        $data['id'] = $id;
        $data['categories'] = $cat->get_cat($id);
        $data['langs'] = Model::factory('Admin_Langs')->get_active_langs();

        $this->template->title = 'Редактирование категории';
        $this->template->content = View::factory('admin/categories/add_edit', $data);
    }

    public function action_save() {
        if(isset($_POST['main'])) {
            $categories = Model::factory('Admin_Categories');
            if($id = $this->request->param('id') AND $id > 0) {
                if(!$categories->save($_POST, $id)) {
                    Message::add_error('Ошибка при сохранении изменений!');
                    //Session::instance()->set('ErrMess', 'Ошибка при сохранении изменений!');
                    $this->redirect('admin/categories');
                } else {
                    Message::add_success('Изменения успешно сохранено!');
                    //Session::instance()->set('SuccessMess', 'Изменения успешно сохранено!');
                    $this->redirect('admin/categories');
                }
            } else {
                if(!$categories->save($_POST)) {
                    Message::add_error('Ошибка при добавлении категории!');
                    //Session::instance()->set('ErrMess', 'Ошибка при добавлении категории!');
                    $this->redirect('admin/categories');
                } else {
                    Message::add_success('Запись успешно добавлено!');
                    //Session::instance()->set('SuccessMess', 'Запись успешно добавлено!');
                    $this->redirect('admin/categories');
                }
            }
        }
    }

    public function action_delete() {
        $id = $this->request->param('id');

        if($id) {
            $categories = Model::factory('Admin_Categories');
            if(!$categories->delete($id)) {
                Message::add_error('Ошибка при удалении категории!');
                //$this->session->set('ErrMess', 'Ошибка при удалении категории!');
                $this->redirect('admin/categories');
            } else {
                Message::add_success('Категорию успешно удалено!');
                //$this->session->set('SuccessMess', 'Категорию успешно удалено!');
                $this->redirect('admin/categories');
            }
        } else {
            Message::add_error('Параметр ID не установлено, удаление не возможно!');
            //$this->session->set('ErrMess', 'Параметр ID не установлено, удаление не возможно!');
            $this->redirect('admin/categories');
        }
    }
}