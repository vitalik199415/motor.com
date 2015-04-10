<?php defined('SYSPATH') or die('No direct script access.');

class Model_Admin_Pages extends Model {
    const PAGES         = 'pages';
    const ID_PAGES      = 'id_pages';

    public function get_pages($id = FALSE) {
        if($id){
            return $res = DB::select()
                              ->from(self::PAGES)
                              ->where(self::ID_PAGES, '=', $id)
                              ->as_assoc()->execute();
        } else {
            return $res = DB::select()->from(self::PAGES)->as_assoc()->execute();
        }
    }

    public function save($data, $id = FALSE) {
        if(count($data) > 0) {
            if($id) {
                if(DB::update(self::PAGES)->set($data['main'])->where(self::ID_PAGES, '=', $id)->execute())
                    return TRUE;
            } else {
                foreach ($data['main'] as $key => $val) {
                    $key_arr[] = $key;
                    $val_arr[] = $val;
                }

                if(DB::insert(self::PAGES, $key_arr)->values($val_arr)->execute())
                    return TRUE;
            }
        }
        return FALSE;
    }

    public function delete($id) {
        if($id) {
            $res = DB::delete(self::PAGES)->where(self::ID_PAGES, '=', $id)->execute();
            return $res;
        }
        return FALSE;
    }

}