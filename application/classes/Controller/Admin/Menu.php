<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Menu extends Controller_Admin_Base {

    public function before() {
        parent::before();

    }

    public function action_index() {
        $data['main'] = Model::factory('Admin_Menu')->get_all_menu();


        $data['err_mess'] = $this->session->get('ErrorMess');
        $this->session->delete('ErrorMess');
        $data['success_mess'] = $this->session->get('SuccessMess');
        $this->session->delete('SuccessMess');

        $this->template->title = 'Меню сайта';
        $this->template->content = View::factory('admin/menu/main', $data);
    }

    public function action_add() {
        $this->template->title = 'Добавление пункта меню';

        $data['menu'] = Model::factory('Admin_Menu')->get_menu();
        $data['langs'] = Model::factory('Admin_Langs')->get_active_langs();
        $this->template->content = View::factory('admin/menu/add_edit', $data);
    }

    public function action_edit() {
        $id = $this->request->param('id');
        $cat = Model::factory('Admin_Menu');
        $res = $cat->get_all_menu($id);

        $data['main'] = $res[0];
        $data['desc'] = $cat->get_menu_desc($id);
        $data['id'] = $id;
        $data['menu'] = $cat->get_menu($id);
        $data['langs'] = Model::factory('Admin_Langs')->get_active_langs();

        $this->template->title = 'Редактирование пункта меню';
        $this->template->content = View::factory('admin/menu/add_edit', $data);
    }

    public function action_save() {
        if(isset($_POST['main'])) {
            $menu = Model::factory('Admin_Menu');
            if($id = $this->request->param('id') AND $id > 0) {
                if(!$menu->save($_POST, $id)) {
                    Message::add_error('Ошибка при сохранении изменений!');
                    $this->redirect('admin/menu');
                } else {
                    Message::add_success('Изменения успешно сохранено!');
                    $this->redirect('admin/menu');
                }
            } else {
                if(!$menu->save($_POST)) {
                    Message::add_error('Ошибка при добавлении меню!');
                    $this->redirect('admin/menu');
                } else {
                    Message::add_success('Запись успешно добавлено!');
                    $this->redirect('admin/menu');
                }
            }
        }
    }

    public function action_delete() {
        $id = $this->request->param('id');

        if($id) {
            $categories = Model::factory('Admin_Menu');
            if(!$categories->delete($id)) {
                Message::add_error('Ошибка при удалении меню!');
                $this->redirect('admin/menu');
            } else {
                Message::add_success('Меню успешно удалено!');
                $this->redirect('admin/menu');
            }
        } else {
            Message::add_error('Параметр ID не установлено, удаление не возможно!');
            $this->redirect('admin/menu');
        }
    }

    public function action_up() {
        $id = $this->request->param('id');

        if($id) {
            $categories = Model::factory('Admin_Menu');
            if(!$categories->up($id)) {
                Message::add_error('Ошибка при смене позиции!');
                $this->redirect('admin/menu');
            } else {
                Message::add_success('Позиция успешно изменена!');
                $this->redirect('admin/menu');
            }
        } else {
            Message::add_error('Параметр ID не установлено, действие не возможно!');
            $this->redirect('admin/menu');
        }
    }

    public function action_down() {
        $id = $this->request->param('id');

        if($id) {
            $categories = Model::factory('Admin_Menu');
            if(!$categories->down($id)) {
                Message::add_error('Ошибка при смене позиции!');
                $this->redirect('admin/menu');
            } else {
                Message::add_success('Позиция успешно изменена!');
                $this->redirect('admin/menu');
            }
        } else {
            Message::add_error('Параметр ID не установлено, действие не возможно!');
            $this->redirect('admin/menu');
        }
    }
}