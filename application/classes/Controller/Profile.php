<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Profile extends Controller_Base {

    private $error = array();
    private $users;

    public function before() {
        $this->users = Model::factory('Admin_Users');
        parent::before();
    }

    public function action_index() {

        $data = array();

        $data['main'] = $this->users->get_users($this->user_id);

        $this->template->title = 'Profile';
        $this->template->content = View::factory('front/profile', $data);
    }

    public function action_save()
    {
        $id = Auth::instance()->get_user()->id;
        if($_POST) {
            $data = $_POST;

            if(!$this->users->save($data, $id)) {
                Message::add_error(__('Error saving data'));
                $this->redirect('profile');
            } else {
                Message::add_success(__('Changes saved successfully'));
                $this->redirect('profile');
            }
        } else {
            $this->redirect('profile');
        }
    }
}