<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller_Base {

    public function before() {
        parent::before();
    }

    public function action_index()
    {
        $this->template->content = View::factory('front/contact-us');
    }

} // End Main
