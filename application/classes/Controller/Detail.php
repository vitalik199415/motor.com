<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Detail extends Controller_Base {

    public $prod_model;

    public function before()
    {
        $this->prod_model = Model::factory('Products');
        parent::before();
    }

    public function action_index()
    {
        if ($this->request->param('param')) {
//            $data['categories'] = Model::factory('Categories')->get_cat($this->lang);
            $data['categories'] = Controller_Menu::build_menu($this->lang);
            $data['brands'] = Model::factory('Brands')->get_brands($this->lang);
            $data['menu'] = Model::factory('Admin_Menu')->get_all_menu(FALSE, $this->lang);
            $main['curr'] = Model::factory('Admin_Currency')->get_currency_info($this->currency);
            $main['product'] = $this->prod_model->get_product_detail($this->request->param('param'), $this->lang)['product'];
            $main['images'] = $this->prod_model->get_product_detail($this->request->param('param'), $this->lang)['images'];
            if(count($main['product'])<=0) {
                throw new HTTP_Exception_404;
            }

            $this->template->left_sidebar = View::factory('front/left_block', $data);
            $this->template->content = View::factory('front/product_detail', $main);
            $this->template->title = 'Products';
        }
    }
}