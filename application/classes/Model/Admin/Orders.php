<?php defined('SYSPATH') or die('No direct script access.');

class Model_Admin_Orders extends Model
{
    const ORDERS = 'orders';
    const ID_ORDERS = 'id_orders';
    const ORDERS_ADDR = 'orders_address';
    const ID_ORDERS_ADDR = 'id_orders_address';
    const ORDERS_PROD = 'orders_products';
    const ID_ORDERS_PROD = 'id_orders_products';
    const ID_USERS      = 'id';
    const USR_DATA     = 'users_data';


    public function get_orders() {
        $res = DB::select()
                ->from(self::ORDERS)
                ->join(self::ORDERS_ADDR)
                ->on(self::ORDERS.'.'.self::ID_ORDERS, '=', self::ORDERS_ADDR.'.'.self::ID_ORDERS)
                ->as_assoc()->execute();
        return $res;
    }

    public function get_order_info($id) {
        $data = array();
        $data['main'] = DB::select()
            ->from(self::ORDERS)
            ->where(self::ID_ORDERS, '=', $id)
            ->as_assoc()->execute();

        $data['address'] = DB::select()
                            ->from(self::ORDERS_ADDR)
                            ->where(self::ID_ORDERS, '=', $id)
                            ->as_assoc()->execute()[0];

        $data['products'] = DB::select()
                            ->from(self::ORDERS_PROD)
                            ->where(self::ID_ORDERS, '=', $id)
                            ->as_assoc()->execute();

        $data['payment'] = Model::factory('Admin_Payment')->get_payment_desc($data['main'][0]['id_payment_methods'])[0];
        $data['shipping'] = Model::factory('Admin_Shipping')->get_shipping_desc($data['main'][0]['id_shipping_methods'])[0];

        return $data;

    }

}