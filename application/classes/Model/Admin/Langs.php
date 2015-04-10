<?php defined('SYSPATH') or die('No direct script access.');

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

    public function get_active_langs() {
        $res = DB::select()->from(self::LANGS)->where('active', '=', 1)->as_assoc()->execute();

        $langs = array();
        foreach($res as $lang) {
            $langs[$lang['code']] = $lang['name'];
        }

        return $langs;
    }

    public function get_lang_info($lang) {
        $res = DB::select()->from(self::LANGS)->where('code', '=', $lang)->as_assoc()->execute();
        return $res[0];
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