<?php defined('SYSPATH') or die('No direct script access.');

class Model_Register extends Model {

    const USERS = 'users';
    const ID_USERS = 'id';
    const ROLES = 'roles';
    const ROLES_USERS = 'roles_users';
    const USR_DATA = 'users_data';



    public function register($data) {
        if($data['rep_password'] == $data['password']) {
            $key_arr[] = 'email';
            $key_arr[] = 'username';
            $key_arr[] = 'password';

            $val_arr[] = $data['email'];
            $val_arr[] = $data['login'];
            $val_arr[] = $data['password'];

            $key = DB::insert(self::USERS, $key_arr)->values($val_arr)->execute()[0];



            $pass['password'] = hashD($data['password'], $key);
            if($key && DB::update(self::USERS)->set($pass)->where(self::USERS.'.'.self::ID_USERS, '=', $key)->execute()) {
                $key_arr = array(); $val_arr = array();
                $key_arr[] = 'user_id';
                $key_arr[] = 'role_id';

                $val_arr[] = $key;
                $val_arr[] = DB::select('id')->from(self::ROLES)->where('name', '=', 'login')->as_assoc()->execute()[0]['id'][0];

                DB::insert(self::ROLES_USERS, $key_arr)->values($val_arr)->execute();

                $key_arr = array(); $val_arr = array();

                $key_arr[] = 'id';
                $key_arr[] = 'fname';
                $key_arr[] = 'sname';
                $key_arr[] = 'city';
                $key_arr[] = 'address';
                $key_arr[] = 'phone';

                $val_arr[] = $key;
                $val_arr[] = $data['fname'];
                $val_arr[] = $data['sname'];
                $val_arr[] = $data['city'];
                $val_arr[] = $data['address'];
                $val_arr[] = $data['phone'];

                DB::insert(self::USR_DATA, $key_arr)->values($val_arr)->execute();

                return TRUE;
            }

        }
        return FALSE;
    }

}