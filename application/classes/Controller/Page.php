<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Base {

    public function before() {
        parent::before();
    }

    public function action_index()
    {
        $alias = $this->request->param('param');
        $data = Model::factory('Pages')->get_page($alias, $this->lang);
        if(count($data) <= 0) { throw new HTTP_Exception_404(); }

//        $data['categories'] = Model::factory('Categories')->get_cat($this->lang);
        $data['categories'] = Controller_Menu::build_menu($this->lang);
        $data['brands'] = Model::factory('Brands')->get_brands($this->lang);
        $data['menu'] = Model::factory('Admin_Menu')->get_all_menu(FALSE, $this->lang);

        $this->template->title = $data['title'];
        $this->template->description = $data['seo_description'];
        $this->template->keywords = $data['seo_keywords'];
        $this->template->left_sidebar = View::factory('front/left_block', $data);
        $this->template->content = View::factory('front/pages', $data);
    }


} // End Page
