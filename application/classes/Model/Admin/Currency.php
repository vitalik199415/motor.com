<?php defined('SYSPATH') or die('No direct script access.');

class Model_Admin_Currency extends Model {
    const CURR         = 'currency';
    const ID_CURR      = 'id_currency';

    public function get_currency($id = FALSE) {
        if($id){
            return $res = DB::select()->from(self::CURR)->where(self::ID_CURR, '=', $id)->as_assoc()->execute();
        } else {
            return $res = DB::select()->from(self::CURR)->as_assoc()->execute();
        }
    }

    public function get_active_currency() {
        return $res = DB::select()->from(self::CURR)->where('active', '=', 1)->as_assoc()->execute();
    }

    public function get_currency_info($code) {
        $res = DB::select()->from(self::CURR)->where('code', '=', $code)->as_assoc()->execute();
        return $res[0];
    }

    public function save($data, $id = FALSE) {
        if(count($data) > 0) {
            if($id) {
                if(DB::update(self::CURR)->set($data['main'])->where(self::ID_CURR, '=', $id)->execute())
                    return TRUE;
            } else {
                foreach ($data['main'] as $key => $val) {
                    $key_arr[] = $key;
                    $val_arr[] = $val;
                }

                if(DB::insert(self::CURR, $key_arr)->values($val_arr)->execute())
                    return TRUE;
            }
        }
        return FALSE;
    }

    public function delete($id) {
        if($id) {
            $res = DB::delete(self::CURR)->where(self::ID_CURR, '=', $id)->execute();
            return $res;
        }
        return FALSE;
    }

}