<?php defined('SYSPATH') or die('No direct script access.');

class Model_Categories extends Model {
    const CATEGORIES = 'categories';
    const ID_CATEGORIES = 'id_categories';
    const CATEGORIES_DESC = 'categories_description';
    const ID_CATEGORIES_DESC = 'id_categories_description';

    public function get_cat($lang) {
        $res = DB::select()
            ->from(self::CATEGORIES)
            ->join(self::CATEGORIES_DESC)
            ->on(self::CATEGORIES . '.' . self::ID_CATEGORIES, '=', self::CATEGORIES_DESC . '.' . self::ID_CATEGORIES)
            ->where(self::CATEGORIES_DESC . '.lang', '=', $lang)
            ->as_assoc()->execute();

        foreach($res as $r){
            $cats_ID[$r[self::ID_CATEGORIES]][] = $r;
            $cats[$r['id_parent']][] =  $r;
        }

        return $cats;
    }

    public function get_cat_info($url ,$lang) {
        $res = DB::select()
            ->from(self::CATEGORIES)
            ->join(self::CATEGORIES_DESC)
            ->on(self::CATEGORIES . '.' . self::ID_CATEGORIES, '=', self::CATEGORIES_DESC . '.' . self::ID_CATEGORIES)
            ->where(self::CATEGORIES_DESC . '.lang', '=', $lang)
            ->where(self::CATEGORIES . '.url', '=', $url)
            ->as_assoc()->execute();

        return $res[0];
    }
}