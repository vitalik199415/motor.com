<?php defined('SYSPATH') or die('No direct script access.');

class Model_Products extends Model {

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


    public function get_products($start, $limit, $lang, $brand = FALSE, $category = FALSE) {

        if($brand) {

            $res = DB::select()
                ->from(self::PRODUCTS)
                ->join(self::PRODUCTS_DESC)
                ->on(self::PRODUCTS.'.'.self::ID_PRODUCTS, '=', self::PRODUCTS_DESC.'.'.self::ID_PRODUCTS_DESC)
                ->join(self::PRODUCTS_IMG)
                ->on(self::PRODUCTS.'.'.self::ID_PRODUCTS, '=', self::PRODUCTS_IMG.'.'.self::ID_PRODUCTS_DESC)
                ->join(self::CAR_BRANDS)
                ->on(self::PRODUCTS.'.'.self::ID_CAR_BRANDS, '=', self::CAR_BRANDS.'.'.self::ID_CAR_BRANDS)
                ->where(self::PRODUCTS_DESC.'.lang', '=', $lang)
                ->where(self::CAR_BRANDS.'.url', '=', $brand)
                ->offset($start)
                ->limit($limit)
                ->execute();
            return $res;

            if($category) {

                $res = DB::select()
                    ->from(self::PRODUCTS)
                    ->join(self::PRODUCTS_DESC)
                    ->on(self::PRODUCTS.'.'.self::ID_PRODUCTS, '=', self::PRODUCTS_DESC.'.'.self::ID_PRODUCTS_DESC)
                    ->join(self::PRODUCTS_IMG)
                    ->on(self::PRODUCTS.'.'.self::ID_PRODUCTS, '=', self::PRODUCTS_IMG.'.'.self::ID_PRODUCTS_DESC)
                    ->join(self::CAR_BRANDS)
                    ->on(self::PRODUCTS.'.'.self::ID_CAR_BRANDS, '=', self::CAR_BRANDS.'.'.self::ID_CAR_BRANDS)
                    ->join(self::CAT_PROD)
                    ->on(self::PRODUCTS.'.'.self::ID_PRODUCTS, '=', self::CAT_PROD.'.'.self::ID_PRODUCTS)
                    ->join(self::CATEGORIES)
                    ->on(self::CATEGORIES.'.'.self::ID_CATEGORIES, '=', self::CAT_PROD.'.'.self::ID_CATEGORIES)
                    ->where(self::PRODUCTS_DESC.'.lang', '=', $lang)
                    ->where(self::CAR_BRANDS.'.url', '=', $brand)
                    ->where(self::CATEGORIES.'.url', '=', $category)
                    ->offset($start)
                    ->limit($limit)
                    ->execute();
                return $res;

            }
        }

        $res = DB::select()
                ->from(self::PRODUCTS)
                ->join(self::PRODUCTS_DESC)
                ->on(self::PRODUCTS.'.'.self::ID_PRODUCTS, '=', self::PRODUCTS_DESC.'.'.self::ID_PRODUCTS_DESC)
                ->join(self::PRODUCTS_IMG)
                ->on(self::PRODUCTS.'.'.self::ID_PRODUCTS, '=', self::PRODUCTS_IMG.'.'.self::ID_PRODUCTS_DESC)
                ->where(self::PRODUCTS_DESC.'.lang', '=', $lang)
                ->offset($start)
                ->limit($limit)
                ->execute();
        return $res;

    }




}
