<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Single extends Controller_Base {

    public $prod_model;

    public function before()
    {
        $this->news_model = Model::factory('News');
        parent::before();
    }

    public function action_index()
    {
        if ($this->request->param('param')) {
//            $data['categories'] = Model::factory('Categories')->get_cat($this->lang);
            $data['categories'] = Controller_Menu::build_menu($this->lang);
            $data['brands'] = Model::factory('Brands')->get_brands($this->lang);
            $data['menu'] = Model::factory('Admin_Menu')->get_all_menu(FALSE, $this->lang);
            $main['news'] = $this->news_model->get_news_detail($this->request->param('param'), $this->lang);
            $this->template->left_sidebar = View::factory('front/left_block', $data);
            $this->template->content = View::factory('front/news_detail', $main);
            $this->template->title = 'Products';
        }
    }
}