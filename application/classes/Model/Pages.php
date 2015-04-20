<?php defined('SYSPATH') or die('No direct script access.');

class Model_Pages extends Model {

    const PAGES              = 'pages';
    const ID_NEWS           = 'id_pages';

    public function get_page($alias, $lang) {
        $res = DB::select()
            ->distinct(TRUE)
            ->from(self::PAGES)
            ->where(self::PAGES.'.lang', '=', $lang)
            ->where(self::PAGES.'.alias', '=', $alias)
            ->as_assoc()
            ->execute();
        return $res[0];
    }

}
