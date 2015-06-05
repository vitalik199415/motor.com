<?php defined('SYSPATH') or die('No direct script access.');

class Model_Admin_Users extends Model {
    const USER         = 'users';
    const ID_USERS      = 'id';
    const USR_DATA     = 'users_data';
    const ROLES        = 'roles';
    const ROLES_USERS  = 'roles_users';
    const ID_ROLE      = 'role_id';
    const ID_USER      = 'user_id';

    public function get_users($id = FALSE) {
        if($id){
            $res = DB::select()
                    ->from(self::USER)
                    ->join(self::USR_DATA)
                    ->on(self::USER.'.'.self::ID_USERS, '=', self::USR_DATA.'.'.self::ID_USERS)
                    ->where(self::USER.'.'.self::ID_USERS, '=', $id)
                    ->as_assoc()->execute();
            return $res[0];
        } else {
            $res = DB::select()
                    ->from(self::USER)
                    ->join(self::USR_DATA)
                    ->on(self::USER.'.'.self::ID_USERS, '=', self::USR_DATA.'.'.self::ID_USERS)
                    ->as_assoc()->execute();
            return $res;
        }
    }

    public function set_admin($id) {
        if($id) {
            $admin_id = DB::select()
                        ->from(self::ROLES)
                        ->where('name', '=', 'admin')
                        ->limit(1)
                        ->as_assoc()->execute()[0]['id'];

            $admin = DB::select()
                        ->from(self::ROLES_USERS)
                        ->where(self::ID_USER, '=', $id)
                        ->where(self::ID_ROLE, '=', $admin_id)
                        ->limit(1)
                        ->as_assoc()->execute();
            if(count($admin) > 0) {
                $res = DB::delete(self::ROLES_USERS)
                            ->where(self::ID_USER, '=', $id)
                            ->where(self::ID_ROLE, '=', $admin_id)
                            ->execute();
                $data['is_admin'] = 0;
                DB::update(self::USER)->set($data)->where(self::ID_USERS, '=', $id)->execute();
            } else {
                $key_arr[0] = self::ID_USER;
                $key_arr[1] = self::ID_ROLE;

                $val_arr[0] = $id;
                $val_arr[1] = $admin_id;

                $res = DB::insert(self::ROLES_USERS, $key_arr)->values($val_arr)->execute();
                $data['is_admin'] = 1;
                DB::update(self::USER)->set($data)->where(self::ID_USERS, '=', $id)->execute();
            }
            return $res;
        }
        return FALSE;
    }

    public function save($data, $id) {
        $admin = DB::select()
            ->from(self::USR_DATA)
            ->where(self::ID_USERS, '=', $id)
            ->limit(1)
            ->as_assoc()->execute();
        if(count($admin) > 0) {
            $res = DB::update(self::USR_DATA)->set($data)->where(self::ID_USERS, '=', $id)->execute();
            if($res) { return TRUE; }
        } else {
            $key_arr = array();
            $val_arr = array();
            $key_arr[0] = 'id';
            $val_arr[0] = $id;
            foreach ($data as $key => $val) {
                $key_arr[] = $key;
                $val_arr[] = $val;
            }

            $res = DB::insert(self::USR_DATA, $key_arr)->values($val_arr)->execute();
            return $res;
        }
        return FALSE;
    }

    public function delete($id) {
        if($id) {
            $res = DB::delete(self::USER)->where(self::ID_USERS, '=', $id)->execute();
            return $res;
        }
        return FALSE;
    }

}