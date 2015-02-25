<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Admin_Menu extends Controller_Admin_Base {

    public function before() {
        parent::before();
    }

    public function action_index() {
        $this->template->content = $this->response->body('Menu');
    }
}