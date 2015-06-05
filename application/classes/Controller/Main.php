<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Base {

	public function before() {
		parent::before();
	}

	public function action_index()
	{
//		$data['categories'] = Model::factory('Categories')->get_cat($this->lang);
		$data['categories'] = Controller_Menu::build_menu($this->lang);

//		$data['brands'] = Model::factory('Brands')->get_brands($this->lang);
		$data['menu'] = Model::factory('Admin_Menu')->get_all_menu(FALSE, $this->lang);
		$data['brands'] = Model::factory('Brands')->get_brands($this->lang);

		$this->template->left_sidebar = View::factory('front/left_block', $data);
		$this->template->content = View::factory('front/main', $data);
	}

} // End Main
