<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('<a href="'.URL::base().'admin">Admin page!</a>');
	}

} // End Welcome
