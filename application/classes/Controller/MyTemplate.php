<?php

abstract class Controller_MyTemplate extends Controller_Template {
    public $template = 'admin/template';
    public $session;
    public function before() {
        parent::before();
        $this->session = Session::instance();
    }
}