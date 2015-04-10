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
            $data['categories'] = Model::factory('Categories')->get_cat($this->lang);
            $data['curr'] = Model::factory('Admin_Currency')->get_currency_info($this->currency);
            $data['product'] = $this->prod_model->get_product_detail($this->request->param('param'), $this->lang)['product'];
            $data['images'] = $this->prod_model->get_product_detail($this->request->param('param'), $this->lang)['images'];
            $this->template->left_sidebar = View::factory('front/left_sidebar', $data);
            $this->template->content = View::factory('front/product_detail', $data);
            $this->template->title = 'Products';
        }
    }
}