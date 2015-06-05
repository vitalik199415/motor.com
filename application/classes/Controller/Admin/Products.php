<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Products extends Controller_Admin_Base {

    public function before() {
        parent::before();

        Template::add_js('simplebox_util');
        Template::add_css('fotorama');

    }

    public function action_index() {
        $data['main'] = Model::factory('Admin_Products')->get_products();

        $data['err_mess'] = $this->session->get('ErrorMess');
        $this->session->delete('ErrorMess');
        $data['success_mess'] = $this->session->get('SuccessMess');
        $this->session->delete('SuccessMess');

        $this->template->title = 'Каталог товаров';
        $this->template->content = View::factory('admin/products/main', $data);
    }

    public function action_add() {
        $this->template->title = 'Добавление товара';

        $data['categories'] = Model::factory('Admin_Categories')->get_categories();
        $data['brands'] = Model::factory('Admin_Brands')->get_brand();
        $data['langs'] = Model::factory('Admin_Langs')->get_active_langs();
        $this->template->content = View::factory('admin/products/add_edit', $data);
    }

    public function action_edit() {
        $id = $this->request->param('id');
        $prod = Model::factory('Admin_Products');
        $res = $prod->get_products($id);

        $data['err_mess'] = $this->session->get('ErrorMess');
        $this->session->delete('ErrorMess');
        $data['success_mess'] = $this->session->get('SuccessMess');
        $this->session->delete('SuccessMess');

        $data['main'] = $res[0];
        $data['desc'] = $prod->get_product_desc($id);
        $data['brands'] = Model::factory('Admin_Brands')->get_brand();
        $data['categories'] = Model::factory('Admin_Categories')->get_categories();
        $data['cat'] = $prod->get_cat($id);
        $data['images'] = $prod->get_product_images($id);
        $data['id'] = $id;
        $data['langs'] = Model::factory('Admin_Langs')->get_active_langs();

        $this->template->title = 'Редактирование товара';
        $this->template->content = View::factory('admin/products/add_edit', $data);
    }

    public function action_save() {
        if(isset($_POST['main'])) {
            $products = Model::factory('Admin_Products');
            if($id = $this->request->param('id') AND $id > 0) {
                if(!$products->save($_POST, $id)) {
                    Message::add_error('Ошибка при сохранении изменений!');
                    //Session::instance()->set('ErrMess', 'Ошибка при сохранении изменений!');
                    $this->redirect('admin/products');
                } else {
                    Message::add_success('Изменения успешно сохранено!');
                    //Session::instance()->set('SuccessMess', 'Изменения успешно сохранено!');
                    $this->redirect('admin/products');
                }
            } else {
                if(!$products->save($_POST)) {
                    Message::add_error('Ошибка при добавлении товара!');
                    //Session::instance()->set('ErrMess', 'Ошибка при добавлении категории!');
                    $this->redirect('admin/products');
                } else {
                    Message::add_success('Товар успешно добавлено!');
                    //Session::instance()->set('SuccessMess', 'Запись успешно добавлено!');
                    $this->redirect('admin/products');
                }
            }
        }
    }

    public function action_set_preview() {
        $id_img = $this->request->param('id');
        $id_p = $_GET['id_p'];

        if($id_img) {
            $products = Model::factory('Admin_Products');
            if(!$products->set_preview($id_img, $id_p)) {
                Message::add_error('Ошибка при установке главного изображения!');
                $this->redirect('admin/products/edit/'.$id_p);
            } else {
                Message::add_success('Изображение успешно установлено как главное!');
                $this->redirect('admin/products/edit/'.$id_p);
            }
        } else {
            Message::add_error('Параметр ID не установлено, действие не возможно!');
            $this->redirect('admin/products');
        }
    }

    public function action_delete() {
        $id = $this->request->param('id');

        if($id) {
            $products = Model::factory('Admin_Products');
            if(!$products->delete($id)) {
                Message::add_error('Ошибка при удалении товара!');
                $this->redirect('admin/products');
            } else {
                Message::add_success('Товар успешно удалено!');
                $this->redirect('admin/products');
            }
        } else {
            Message::add_error('Параметр ID не установлено, удаление не возможно!');
            $this->redirect('admin/products');
        }
    }

    public function action_del_img() {
        $id = $this->request->param('id');
        $id_p = $_GET['id_p'];

        if($id) {
            $products = Model::factory('Admin_Products');
            if(!$products->del_img($id)) {
                Message::add_error('Ошибка при удалении изображения!');
                $this->redirect('admin/products/edit/'.$id_p);
            } else {
                Message::add_success('Изображение успешно удалено!');
                $this->redirect('admin/products/edit/'.$id_p);
            }
        } else {
            Message::add_error('Параметр ID не установлено, удаление не возможно!');
            $this->redirect('admin/products/edit/'.$id_p);
        }
    }
}