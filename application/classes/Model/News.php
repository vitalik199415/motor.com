<?php defined('SYSPATH') or die('No direct script access.');

class Model_News extends Model {

    const NEWS              = 'news';
    const ID_NEWS           = 'id_news';

    public function get_news($start, $limit, $lang) {
        $res = DB::select()
                ->distinct(TRUE)
                ->from(self::NEWS)
                ->where(self::NEWS.'.lang', '=', $lang)
                ->where(self::NEWS.'.active', '=', 1)
                ->offset($start)
                ->limit($limit)
                ->as_assoc()
                ->execute();
        return $res;
    }

    public function news_count() {
        $res = DB::select(array(DB::expr('COUNT(`'.self::NEWS.'`.`'.self::ID_NEWS.'`)'), 'total'))
            ->from(self::NEWS)
            ->where(self::NEWS.'.active', '=', 1)
            ->execute();
        return $res[0];
    }

    public function get_news_detail($param, $lang){
        $res = DB::select()
            ->from(self::NEWS)
            ->where(self::NEWS.'.lang', '=', $lang)
            ->where(self::NEWS.'.'.self::ID_NEWS, '=', $param)
            ->as_assoc()
            ->execute();

        return $res[0];
    }


}
