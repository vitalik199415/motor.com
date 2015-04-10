<?php defined('SYSPATH') or die('No direct script access.');

class Model_Admin_News extends Model {
    const NEWS         = 'news';
    const ID_NEWS      = 'id_news';

    public function get_news($id = FALSE) {
        if($id){
            return $res = DB::select()
                ->from(self::NEWS)
                ->where(self::ID_NEWS, '=', $id)
                ->as_assoc()->execute();
        } else {
            return $res = DB::select()->from(self::NEWS)->as_assoc()->execute();
        }
    }

    public function save($data, $id = FALSE) {
        if(count($data) > 0) {
            if($id) {
                $data['main']['date'] = date('Y-m-d H:i:s');
                if(DB::update(self::NEWS)->set($data['main'])->where(self::ID_NEWS, '=', $id)->execute())
                    return TRUE;
            } else {
                $key_arr[0] = 'date'; $val_arr[0] = date('Y-m-d H:i:s');
                foreach ($data['main'] as $key => $val) {
                    $key_arr[] = $key;
                    $val_arr[] = $val;
                }

                if(DB::insert(self::NEWS, $key_arr)->values($val_arr)->execute())
                    return TRUE;
            }
        }
        return FALSE;
    }

    public function delete($id) {
        if($id) {
            $res = DB::delete(self::NEWS)->where(self::ID_NEWS, '=', $id)->execute();
            return $res;
        }
        return FALSE;
    }

}