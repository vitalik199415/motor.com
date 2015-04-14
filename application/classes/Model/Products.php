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

        $columns = array(
            self::PRODUCTS.'.'.self::ID_PRODUCTS,
            self::PRODUCTS.'.sku',
            self::PRODUCTS.'.price',
            self::PRODUCTS.'.in_stock',
            self::PRODUCTS.'.new',
            self::PRODUCTS.'.sale',
            self::PRODUCTS_DESC.'.name',
            self::PRODUCTS_DESC.'.short_description',
            self::PRODUCTS_IMG.'.image'
        );

        if($brand && $category) {
            $res = DB::select_array($columns)
                ->distinct(TRUE)
                ->from(self::PRODUCTS)
                ->join(self::PRODUCTS_DESC)
                ->on(self::PRODUCTS . '.' . self::ID_PRODUCTS, '=', self::PRODUCTS_DESC . '.' . self::ID_PRODUCTS)
                ->join(self::PRODUCTS_IMG)
                ->on(self::PRODUCTS . '.' . self::ID_PRODUCTS, '=', self::PRODUCTS_IMG . '.' . self::ID_PRODUCTS)
                ->join(self::CAR_BRANDS)
                ->on(self::PRODUCTS . '.' . self::ID_CAR_BRANDS, '=', self::CAR_BRANDS . '.' . self::ID_CAR_BRANDS)
                ->join(self::CAT_PROD)
                ->on(self::PRODUCTS . '.' . self::ID_PRODUCTS, '=', self::CAT_PROD . '.' . self::ID_PRODUCTS)
                ->join(self::CATEGORIES)
                ->on(self::CATEGORIES . '.' . self::ID_CATEGORIES, '=', self::CAT_PROD . '.' . self::ID_CATEGORIES)
                ->where(self::PRODUCTS_DESC . '.lang', '=', $lang)
                ->where(self::PRODUCTS_IMG.'.preview', '=', 1)
                ->where(self::CAR_BRANDS . '.url', '=', $brand)
                ->where(self::CATEGORIES . '.url', '=', $category)
                ->offset($start)
                ->limit($limit)
                ->as_assoc()
                ->execute();
            return $res;
        } else
        if($brand) {
            $res = DB::select_array($columns)
                ->distinct(TRUE)
                ->from(self::PRODUCTS)
                ->join(self::PRODUCTS_DESC)
                ->on(self::PRODUCTS.'.'.self::ID_PRODUCTS, '=', self::PRODUCTS_DESC.'.'.self::ID_PRODUCTS)
                ->join(self::PRODUCTS_IMG)
                ->on(self::PRODUCTS.'.'.self::ID_PRODUCTS, '=', self::PRODUCTS_IMG.'.'.self::ID_PRODUCTS)
                ->join(self::CAR_BRANDS)
                ->on(self::PRODUCTS.'.'.self::ID_CAR_BRANDS, '=', self::CAR_BRANDS.'.'.self::ID_CAR_BRANDS)
                ->where(self::PRODUCTS_DESC.'.lang', '=', $lang)
                ->where(self::PRODUCTS_IMG.'.preview', '=', 1)
                ->where(self::CAR_BRANDS.'.url', '=', $brand)
                ->offset($start)
                ->limit($limit)
                ->as_assoc()
                ->execute();
            return $res;
        } else {
            $res = DB::select_array($columns)
                    ->distinct(TRUE)
                    ->from(self::PRODUCTS)
                    ->join(self::PRODUCTS_DESC)
                    ->on(self::PRODUCTS.'.'.self::ID_PRODUCTS, '=', self::PRODUCTS_DESC.'.'.self::ID_PRODUCTS)
                    ->join(self::PRODUCTS_IMG)
                    ->on(self::PRODUCTS.'.'.self::ID_PRODUCTS, '=', self::PRODUCTS_IMG.'.'.self::ID_PRODUCTS)
                    ->where(self::PRODUCTS_DESC.'.lang', '=', $lang)
                    ->where(self::PRODUCTS_IMG.'.preview', '=', 1)
                    ->offset($start)
                    ->limit($limit)
                    ->as_assoc()
                    ->execute();
            return $res;
        }
    }

    public function products_count($param, $brand = FALSE, $category = FALSE) {
        switch($param) {
            case 'new': $res = DB::select(array(DB::expr('COUNT(`'.self::PRODUCTS.'`.`'.self::ID_PRODUCTS.'`)'), 'total'))
                                ->from(self::PRODUCTS)
                                ->where(self::PRODUCTS.'.sale', '=', 1)
                                ->execute();
                        return $res[0];
                        break;
            case 'sale': $res = DB::select(array(DB::expr('COUNT(`'.self::PRODUCTS.'`.`'.self::ID_PRODUCTS.'`)'), 'total'))
                                ->from(self::PRODUCTS)
                                ->where(self::PRODUCTS.'.sale', '=', 1)
                                ->execute();
                        return $res[0];
                        break;
            case 'all': if($brand && $category) {
                            $res = DB::select(array(DB::expr('COUNT(`'.self::PRODUCTS.'`.`'.self::ID_PRODUCTS.'`)'), 'total'))
                                ->from(self::PRODUCTS)
                                ->join(self::CAR_BRANDS)
                                ->on(self::PRODUCTS . '.' . self::ID_CAR_BRANDS, '=', self::CAR_BRANDS . '.' . self::ID_CAR_BRANDS)
                                ->join(self::CAT_PROD)
                                ->on(self::PRODUCTS . '.' . self::ID_PRODUCTS, '=', self::CAT_PROD . '.' . self::ID_PRODUCTS)
                                ->join(self::CATEGORIES)
                                ->on(self::CATEGORIES . '.' . self::ID_CATEGORIES, '=', self::CAT_PROD . '.' . self::ID_CATEGORIES)
                                ->where(self::CAR_BRANDS . '.url', '=', $brand)
                                ->where(self::CATEGORIES . '.url', '=', $category)
                                ->where(self::PRODUCTS.'.sale', '=', 1)
                                ->execute();
                            return $res[0];
                        } else
                            if($brand) {
                                $res = DB::select(array(DB::expr('COUNT(`'.self::PRODUCTS.'`.`'.self::ID_PRODUCTS.'`)'), 'total'))
                                    ->from(self::PRODUCTS)
                                    ->join(self::CAR_BRANDS)
                                    ->on(self::PRODUCTS.'.'.self::ID_CAR_BRANDS, '=', self::CAR_BRANDS.'.'.self::ID_CAR_BRANDS)
                                    ->where(self::CAR_BRANDS.'.url', '=', $brand)
                                    ->where(self::PRODUCTS.'.sale', '=', 1)
                                    ->execute();
                                return $res[0];
                            } else {
                                $res = DB::select(array(DB::expr('COUNT(`'.self::PRODUCTS.'`.`'.self::ID_PRODUCTS.'`)'), 'total'))
                                    ->from(self::PRODUCTS)
                                    ->where(self::PRODUCTS.'.sale', '=', 1)
                                    ->execute();
                                return $res[0];
                            }
                            break;
        }

    }

    public function new_products($lang) {

        $columns = array(
            self::PRODUCTS.'.'.self::ID_PRODUCTS,
            self::PRODUCTS.'.sku',
            self::PRODUCTS.'.price',
            self::PRODUCTS.'.in_stock',
            self::PRODUCTS.'.new',
            self::PRODUCTS.'.sale',
            self::PRODUCTS_DESC.'.name',
            self::PRODUCTS_DESC.'.short_description',
            self::PRODUCTS_IMG.'.image'
        );

        $res = DB::select_array($columns)
            ->distinct(TRUE)
            ->from(self::PRODUCTS)
            ->join(self::PRODUCTS_DESC)
            ->on(self::PRODUCTS.'.'.self::ID_PRODUCTS, '=', self::PRODUCTS_DESC.'.'.self::ID_PRODUCTS)
            ->join(self::PRODUCTS_IMG)
            ->on(self::PRODUCTS.'.'.self::ID_PRODUCTS, '=', self::PRODUCTS_IMG.'.'.self::ID_PRODUCTS)
            ->where(self::PRODUCTS_DESC.'.lang', '=', $lang)
            ->where(self::PRODUCTS.'.new', '=', 1)
            ->where(self::PRODUCTS_IMG.'.preview', '=', 1)
            ->as_assoc()
            ->execute();
        return $res;
    }

    public function sale_products($lang) {

        $columns = array(
            self::PRODUCTS.'.'.self::ID_PRODUCTS,
            self::PRODUCTS.'.sku',
            self::PRODUCTS.'.price',
            self::PRODUCTS.'.in_stock',
            self::PRODUCTS.'.new',
            self::PRODUCTS.'.sale',
            self::PRODUCTS_DESC.'.name',
            self::PRODUCTS_DESC.'.short_description',
            self::PRODUCTS_IMG.'.image'
        );

        $res = DB::select_array($columns)
            ->from(self::PRODUCTS)
            ->join(self::PRODUCTS_DESC)
            ->on(self::PRODUCTS.'.'.self::ID_PRODUCTS, '=', self::PRODUCTS_DESC.'.'.self::ID_PRODUCTS)
            ->join(self::PRODUCTS_IMG)
            ->on(self::PRODUCTS.'.'.self::ID_PRODUCTS, '=', self::PRODUCTS_IMG.'.'.self::ID_PRODUCTS)
            ->where(self::PRODUCTS_DESC.'.lang', '=', $lang)
            ->where(self::PRODUCTS.'.sale', '=', 1)
            ->where(self::PRODUCTS_IMG.'.preview', '=', 1)
            ->as_assoc()
            ->execute();
        return $res;
    }

    public function get_product_detail($param, $lang){
        $product = DB::select()
            ->from(self::PRODUCTS)
            ->join(self::PRODUCTS_DESC)
            ->on(self::PRODUCTS.'.'.self::ID_PRODUCTS, '=', self::PRODUCTS_DESC.'.'.self::ID_PRODUCTS)
            ->where(self::PRODUCTS_DESC.'.lang', '=', $lang)
            ->where(self::PRODUCTS.'.'.self::ID_PRODUCTS, '=', $param)
            ->as_assoc()
            ->execute();
        $res['product'] = $product[0];

        $res['images'] = DB::select()
            ->from(self::PRODUCTS_IMG)
            ->where(self::PRODUCTS_IMG.'.'.self::ID_PRODUCTS, '=', $param)
            ->as_assoc()
            ->execute();

        return $res;
    }


}
