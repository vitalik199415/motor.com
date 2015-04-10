<?php defined('SYSPATH') or die('No direct script access.');

class Message {

    public static function add_error($mess) {
        $messages = Session::instance()->get('ErrMess');
        $messages .= $mess.'<br/>';
        Session::instance()->set('ErrMess', $messages);
    }

    public static function add_success($mess) {
        $messages = Session::instance()->get('SuccessMess');
        $messages .= $mess.'<br/>';
        Session::instance()->set('SuccessMess', $messages);
    }

    public static function add_info($mess) {
        $messages = Session::instance()->get('InfoMess');
        $messages .= $mess.'<br/>';
        Session::instance()->set('InfoMess', $messages);
    }



}