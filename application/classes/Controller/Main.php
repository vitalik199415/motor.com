<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Base {

	public function before() {
		parent::before();
	}

	public function action_index()
	{
		$data['categories'] = Model::factory('Categories')->get_cat($this->lang);
		$data['brands'] = Model::factory('Brands')->get_brands($this->lang);
		$this->template->left_sidebar = View::factory('front/left_sidebar', $data);
		$this->template->content = hashD('user', 2).'|'.sha1('azaza');
	}

} // End Main
