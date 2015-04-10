<?php defined('SYSPATH') or die('No direct script access.');

class Model_Brands extends Model {
    const BRANDS = 'car_brands';
    const ID_BRANDS = 'id_car_brands';
    const BRANDS_DESC = 'car_brands_description';
    const ID_BRANDS_DESC = 'id_car_brands_description';

    public function get_brands($lang) {
        $res = DB::select()
            ->from(self::BRANDS)
            ->join(self::BRANDS_DESC)
            ->on(self::BRANDS . '.' . self::ID_BRANDS, '=', self::BRANDS_DESC . '.' . self::ID_BRANDS)
            ->where(self::BRANDS_DESC . '.lang', '=', $lang)
            ->as_assoc()->execute();

        return $res;
    }

    public function get_brand_info($url ,$lang) {
        $res = DB::select()
            ->from(self::BRANDS)
            ->join(self::BRANDS_DESC)
            ->on(self::BRANDS . '.' . self::ID_BRANDS, '=', self::BRANDS_DESC . '.' . self::ID_BRANDS)
            ->where(self::BRANDS_DESC . '.lang', '=', $lang)
            ->where(self::BRANDS . '.url', '=', $url)
            ->as_assoc()->execute();

        return $res[0];
    }
}