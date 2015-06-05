<?php defined('SYSPATH') or die('No direct script access.');

class Model_Cart extends Model {
    const CART = 'cart';
    const ID_PROD = 'product_id';
    const ID_USER = 'user_id';
    const ID_SESS = 'session_id';

    const PRODUCTS              = 'products';
    const ID_PRODUCTS           = 'id_products';
    const CAT_PROD              = 'categories_products';
    const CATEGORIES            = 'categories';
    const ID_CATEGORIES         = 'id_categories';
    const PRODUCTS_DESC         = 'products_description';
    const ID_PRODUCTS_DESC      = 'id_products_description';
    const PRODUCTS_IMG          = 'products_images';
    const ID_PRODUCTS_IMG       = 'id_products_images';
    const CAR_BRANDS                = 'car_brands';
    const ID_CAR_BRANDS             = 'id_car_brands';

    public function get_cart($user_id = FALSE, $session_id = FALSE, $lang) {
        if($user_id) {
            $res = DB::select()
                ->from(self::CART)
                ->join(self::PRODUCTS)
                ->on(self::CART.'.'.self::ID_PROD, '=', self::PRODUCTS.'.'.self::ID_PRODUCTS)
                ->join(self::PRODUCTS_DESC)
                ->on(self::CART.'.'.self::ID_PROD, '=', self::PRODUCTS_DESC.'.'.self::ID_PRODUCTS)
                ->join(self::PRODUCTS_IMG)
                ->on(self::CART.'.'.self::ID_PROD, '=', self::PRODUCTS_IMG.'.'.self::ID_PRODUCTS)
                ->where(self::PRODUCTS_DESC.'.lang', '=', $lang)
                ->where(self::PRODUCTS_IMG.'.preview', '=', 1)
                ->where(self::CART.'.'.self::ID_USER, '=', $user_id)
                ->as_assoc()
                ->execute();
        } else
            if($session_id) {
                $res = DB::select()
                    ->from(self::CART)
                    ->join(self::PRODUCTS)
                    ->on(self::CART.'.'.self::ID_PROD, '=', self::PRODUCTS.'.'.self::ID_PRODUCTS)
                    ->join(self::PRODUCTS_DESC)
                    ->on(self::CART.'.'.self::ID_PROD, '=', self::PRODUCTS_DESC.'.'.self::ID_PRODUCTS)
                    ->join(self::PRODUCTS_IMG)
                    ->on(self::CART.'.'.self::ID_PROD, '=', self::PRODUCTS_IMG.'.'.self::ID_PRODUCTS)
                    ->where(self::PRODUCTS_DESC.'.lang', '=', $lang)
                    ->where(self::PRODUCTS_IMG.'.preview', '=', 1)
                    ->where(self::CART.'.'.self::ID_SESS, '=', $session_id)
                    ->as_assoc()
                    ->execute();
            }
        return $res;
    }

    public function add_to_cart($user_id = FALSE, $session_id = FALSE, $prod_id, $qty = 1) {

        if($user_id) {
            $data = DB::select()->from(self::CART)->where(self::ID_USER, '=', $user_id)->where(self::ID_PROD, '=', $prod_id)->limit(1)->as_assoc()->execute();
            if(count($data) > 0) {
                return $res = 'Product already in cart';
            } else {
                $key_arr[0] = self::ID_USER;
                $key_arr[1] = self::ID_PROD;
                $key_arr[2] = 'qty';

                $val_arr[0] = $user_id;
                $val_arr[1] = $prod_id;
                $val_arr[2] = $qty;

                if(DB::insert(self::CART, $key_arr)->values($val_arr)->execute()){
                    return TRUE;
                }
            }
        } else
            if($session_id) {
                $data = DB::select()->from(self::CART)->where(self::ID_SESS, '=', $session_id)->where(self::ID_PROD, '=', $prod_id)->limit(1)->as_assoc()->execute();
                if(count($data) > 0) {
                    return $res = 'Product already in cart';
                } else {
                    $key_arr[0] = self::ID_SESS;
                    $key_arr[1] = self::ID_PROD;
                    $key_arr[2] = 'qty';

                    $val_arr[0] = $session_id;
                    $val_arr[1] = $prod_id;
                    $val_arr[2] = $qty;

                    if(DB::insert(self::CART, $key_arr)->values($val_arr)->execute()){
                        return TRUE;
                    }
                }
            }
        return FALSE;
    }

    public function quantity_up($id) {
        if($id) {
            $qty = DB::select('qty')->from(self::CART)->where('id_cart', '=', $id)->as_assoc()->execute()[0]['qty'];

            $data['qty'] = $qty + 1;
            if (DB::update(self::CART)->set($data)->execute()) {
                return TRUE;
            }
        }
        return FALSE;
    }

    public function quantity_down($id) {
        if($id) {
            $qty = DB::select('qty')->from(self::CART)->where('id_cart', '=', $id)->as_assoc()->execute()[0]['qty'];

            if($qty > 1) {
                $data['qty'] = $qty - 1;
                if (DB::update(self::CART)->set($data)->execute()) {
                    return TRUE;
                }
            }
        }
        return FALSE;
    }

    public function delete($id) {
        if($id) {
            $res = DB::delete(self::CART)->where('id_cart', '=', $id)->execute();
            if($res) {
                return TRUE;
            }
        }
        return FALSE;
    }
}