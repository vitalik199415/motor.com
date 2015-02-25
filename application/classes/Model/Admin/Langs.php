<?php
/**
 * Created by PhpStorm.
 * User: vitalik
 * Date: 16.02.15
 * Time: 17:17
 */

class Model_Admin_Langs extends Model {
    const LANGS         = 'langs';
    const ID_LANGS      = 'id_langs';

    public function get_langs($id = FALSE) {
        if($id){
            return $res = DB::select()->from(self::LANGS)->where(self::ID_LANGS, '=', $id)->as_assoc()->execute();
        } else {
            return $res = DB::select()->from(self::LANGS)->as_assoc()->execute();
        }
    }

    public function save($data, $id = FALSE) {
        if(count($data) > 0) {
            if($id) {
                if(DB::update(self::LANGS)->set($data['main'])->where(self::ID_LANGS, '=', $id)->execute())
                    return TRUE;
            } else {
                foreach ($data['main'] as $key => $val) {
                    $key_arr[] = $key;
                    $val_arr[] = $val;
                }

                if(DB::insert(self::LANGS, $key_arr)->values($val_arr)->execute())
                    return TRUE;
            }
        }
        return FALSE;
    }

    public function delete($id) {
        if($id) {
            $res = DB::delete(self::LANGS)->where(self::ID_LANGS, '=', $id)->execute();
            return $res;
        }
        return FALSE;
    }

}