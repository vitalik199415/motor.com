<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Brands extends Controller_Admin_Base {

    public function before() {
        parent::before();
    }

    public function action_index() {
        $data['main'] = Model::factory('Admin_Brands')->get_brands();

        $data['err_mess'] = $this->session->get('ErrorMess');
        $this->session->delete('ErrorMess');
        $data['success_mess'] = $this->session->get('SuccessMess');
        $this->session->delete('SuccessMess');

        $this->template->title = 'Марки автомобилей';
        $this->template->content = View::factory('admin/brands/main', $data);
    }

    public function action_add() {
        $this->template->title = 'Добавление марки';

        $data['langs'] = Model::factory('Admin_Langs')->get_active_langs();
        $this->template->content = View::factory('admin/brands/add_edit', $data);
    }

    public function action_edit() {
        $id = $this->request->param('id');
        $brand = Model::factory('Admin_Brands');
        $res = $brand->get_brands($id);

        $data['main'] = $res[0];
        $data['desc'] = $brand->get_brands_desc($id);
        $data['id'] = $id;
        $data['langs'] = Model::factory('Admin_Langs')->get_active_langs();

        $this->template->title = 'Редактирование марки';
        $this->template->content = View::factory('admin/brands/add_edit', $data);
    }

    public function action_save() {
        if(isset($_POST['main'])) {
            $brands = Model::factory('Admin_Brands');
            if($id = $this->request->param('id') AND $id > 0) {
                if(!$brands->save($_POST, $id)) {
                    Message::add_error('Ошибка при сохранении изменений!');
                    $this->redirect('admin/brands');
                } else {
                    Message::add_success('Изменения успешно сохранено!');
                    $this->redirect('admin/brands');
                }
            } else {
                if(!$brands->save($_POST)) {
                    Message::add_error('Ошибка при добавлении марки!');
                    $this->redirect('admin/brands');
                } else {
                    Message::add_success('Запись успешно добавлено!');
                    $this->redirect('admin/brands');
                }
            }
        }
    }

    public function action_delete() {
        $id = $this->request->param('id');

        if($id) {
            $brands = Model::factory('Admin_Brands');
            if(!$brands->delete($id)) {
                Message::add_error('Ошибка при удалении категории!');
                $this->redirect('admin/categories');
            } else {
                Message::add_success('Категорию успешно удалено!');
                $this->redirect('admin/categories');
            }
        } else {
            Message::add_error('Параметр ID не установлено, удаление не возможно!');
            $this->redirect('admin/categories');
        }
    }
}