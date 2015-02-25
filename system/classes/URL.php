<?php defined('SYSPATH') OR die('No direct script access.');

class URL extends Kohana_URL {
    public static function set_url($url = NULL) {
        return URL::base().$url;
    }
}
