<?php defined('SYSPATH') or die('No direct script access.');

class Model_Admin_Payment extends Model {
    const PAYMENT              = 'payment_methods';
    const ID_PAYMENT           = 'id_payment_methods';
    const PAYMENT_DESC         = 'payment_methods_desc';
    const ID_PAYMENT_DESC      = 'id_payment_methods_desc';

    public function get_payment($id = FALSE, $lang = 'ru') {
        if($id){
            return $res = DB::select()
                ->from(self::PAYMENT)
                ->where(self::ID_PAYMENT, '=', $id)
                ->as_assoc()->execute();
        } else {
            return $res = DB::select()
                ->from(self::PAYMENT)
                ->join(self::PAYMENT_DESC)
                ->on(self::PAYMENT.'.'.self::ID_PAYMENT, '=', self::PAYMENT_DESC.'.'.self::ID_PAYMENT)
                ->where(self::PAYMENT_DESC.'.lang', '=', $lang)
                ->as_assoc()->execute()->as_array();
        }
    }

    public function get_payment_desc($id) {
        $res = DB::select()
            ->from(self::PAYMENT_DESC)
            ->where(self::ID_PAYMENT, '=', $id)
            ->where('lang', '=', 'ru')
            ->as_assoc()->execute();

        $desc = array();
        foreach($res as $payment) {
            $desc[$payment['lang']]['name'] = $payment['name'];
            $desc[$payment['lang']]['description'] = $payment['description'];
        }

        return $desc;
    }

    public function save($data, $id = FALSE) {
        if(count($data) > 0) {
            $langs = Model::factory('Admin_Langs')->get_active_langs();
            if($id) {
                //if($new) $data['main']['image'] = $new;
                if(!DB::update(self::PAYMENT)->set($data['main'])->where(self::ID_PAYMENT, '=', $id)->execute()) return FALSE;

                $key_arr = array(); $val_arr = array();
                foreach($langs as $key => $val) {
                    if(isset($data['desc'][$key])) {

                        if(!DB::update(self::PAYMENT_DESC)
                            ->set($data['desc'][$key])
                            ->where(self::ID_PAYMENT, '=', $id)
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
                $last_id = DB::insert(self::PAYMENT, $key_arr)->values($val_arr)->execute();

                if(!$last_id) return FALSE;

                $key_arr = array(); $val_arr = array();
                foreach($langs as $key => $val) {
                    if(isset($data['desc'][$key])) {
                        $key_arr[0] = self::ID_PAYMENT;
                        $val_arr[0] = $last_id[0];

                        foreach ($data['desc'][$key] as $key_d => $val_d) {
                            $key_arr[] = $key_d;
                            $val_arr[] = $val_d;
                        }
                        $key_arr[] = 'lang';
                        $val_arr[] = $key;
                        DB::insert(self::PAYMENT_DESC, $key_arr)->values($val_arr)->execute();
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
            $res = DB::delete(self::PAYMENT)->where(self::ID_PAYMENT, '=', $id)->execute();
            return $res;
        }
        return FALSE;
    }

    public function up($id) {
        $sort = DB::select('sort')->from(self::PAYMENT)->where(self::ID_PAYMENT, '=', $id)->execute()[0]['sort'];

        $data['sort'] = $sort-1;
        if(!DB::update(self::PAYMENT)->set($data)->where(self::ID_PAYMENT, '=', $id)->execute()){ return FALSE; }

        $id = DB::select(self::ID_PAYMENT)->from(self::PAYMENT)->where('sort', '=', $data['sort'])->execute()[0][self::ID_PAYMENT];
        $data['sort'] = $sort;
        if(!DB::update(self::PAYMENT)->set($data)->where(self::ID_PAYMENT, '=', $id)->execute()) { return FALSE; }
    }

    public function down($id) {
        $sort = DB::select('sort')->from(self::PAYMENT)->where(self::ID_PAYMENT, '=', $id)->execute()[0]['sort'];

        $data['sort'] = $sort+1;
        if(!DB::update(self::PAYMENT)->set($data)->where(self::ID_PAYMENT, '=', $id)->execute()) { return FALSE; }

        $id = DB::select(self::ID_PAYMENT)->from(self::PAYMENT)->where('sort', '=', $data['sort'])->execute()[0][self::ID_PAYMENT];
        $data['sort'] = $sort;
        if(!DB::update(self::PAYMENT)->set($data)->where(self::ID_PAYMENT, '=', $id)->execute()) { return FALSE; }
    }

}