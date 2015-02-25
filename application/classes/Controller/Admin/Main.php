<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Controller_Admin_Base {

	public function before(){
		parent::before();

		//if($this->auth->logged_in('admin') == 0) $this->redirect('admin/login');
	}

	public function action_index() {
		$site_conf = Kohana::$config->load('config');

		$this->template->content = View::factory('admin/main');
		$this->template->styles = array('style', 'pages/dashboard');
	}

	public function action_hash() {
		$this->template->content = $this->auth->hash_password('user');
	}

} // End Welcome
