<?php defined('SYSPATH') or die('No direct script access.');

class Template {

    public static function add_css($name) {
        $styles = Session::instance()->get('admin_styles');
        if(is_array($styles)) {
            if(!in_array($name, $styles)){
                array_push($styles, $name);
            }
        } else {
            $styles = array();
            array_push($styles, $name);
        }
        Session::instance()->set('admin_styles', $styles);
    }

    public static function add_js($name) {
        $scripts = Session::instance()->get('admin_scripts');
        if(is_array($scripts)) {
            if(!in_array($name, $scripts)){
                array_push($scripts, $name);
            }
        } else {
            $scripts = array();
            array_push($scripts, $name);
        }
        Session::instance()->set('admin_scripts', $scripts);
    }

}