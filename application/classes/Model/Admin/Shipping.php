<?php defined('SYSPATH') or die('No direct script access.');

class Model_Admin_Shipping extends Model {
    const SHIPPING              = 'shipping_methods';
    const ID_SHIPPING           = 'id_shipping_methods';
    const SHIPPING_DESC         = 'shipping_methods_desc';
    const ID_SHIPPING_DESC      = 'id_shipping_methods_desc';

    public function get_shipping($id = FALSE, $lang = 'ru') {
        if($id){
            return $res = DB::select()
                ->from(self::SHIPPING)
                ->where(self::ID_SHIPPING, '=', $id)
                ->as_assoc()->execute();
        } else {
            return $res = DB::select()
                ->from(self::SHIPPING)
                ->join(self::SHIPPING_DESC)
                ->on(self::SHIPPING.'.'.self::ID_SHIPPING, '=', self::SHIPPING_DESC.'.'.self::ID_SHIPPING)
                ->where(self::SHIPPING_DESC.'.lang', '=', $lang)
                ->as_assoc()->execute()->as_array();
        }
    }

    public function get_shipping_desc($id) {
        $res = DB::select()
            ->from(self::SHIPPING_DESC)
            ->where(self::ID_SHIPPING, '=', $id)
            ->where('lang', '=', 'ru')
            ->as_assoc()->execute();

        $desc = array();
        foreach($res as $shipping) {
            $desc[$shipping['lang']]['name'] = $shipping['name'];
            $desc[$shipping['lang']]['description'] = $shipping['description'];
        }

        return $desc;
    }

    public function save($data, $id = FALSE) {
        if(count($data) > 0) {
            $langs = Model::factory('Admin_Langs')->get_active_langs();
            if($id) {
                //if($new) $data['main']['image'] = $new;
                if(!DB::update(self::SHIPPING)->set($data['main'])->where(self::ID_SHIPPING, '=', $id)->execute()) return FALSE;

                $key_arr = array(); $val_arr = array();
                foreach($langs as $key => $val) {
                    if(isset($data['desc'][$key])) {

                        if(!DB::update(self::SHIPPING_DESC)
                            ->set($data['desc'][$key])
                            ->where(self::ID_SHIPPING, '=', $id)
                            ->where('lang', '=', $key)
                            ->execute()) {
                        }
                    }
                }
                return TRUE;
            } else {
                foreach ($data['main'] as $key => $val) {
                    $key_arr[] = $key;
                    $val_arr[] = $val;
                }
                $last_id = DB::insert(self::SHIPPING, $key_arr)->values($val_arr)->execute();

                if(!$last_id) return FALSE;

                $key_arr = array(); $val_arr = array();
                foreach($langs as $key => $val) {
                    if(isset($data['desc'][$key])) {
                        $key_arr[0] = self::ID_SHIPPING;
                        $val_arr[0] = $last_id[0];

                        foreach ($data['desc'][$key] as $key_d => $val_d) {
                            $key_arr[] = $key_d;
                            $val_arr[] = $val_d;
                        }
                        $key_arr[] = 'lang';
                        $val_arr[] = $key;
                        DB::insert(self::SHIPPING_DESC, $key_arr)->values($val_arr)->execute();
                        $key_arr = array(); $val_arr = array();
                    }
                }
                return TRUE;
            }
        }
        return FALSE;
    }

    public function delete($id) {
        if($id) {
            $res = DB::delete(self::SHIPPING)->where(self::ID_SHIPPING, '=', $id)->execute();
            return $res;
        }
        return FALSE;
    }

}