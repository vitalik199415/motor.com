<?php defined('SYSPATH') or die('No direct script access.');

class Model_Admin_Categories extends Model {
    const CATEGORIES              = 'categories';
    const ID_CATEGORIES           = 'id_categories';
    const CATEGORIES_DESC         = 'categories_description';
    const ID_CATEGORIES_DESC      = 'id_categories_description';

    public function get_categories($id = FALSE) {
        if($id){
            return $res = DB::select()
                ->from(self::CATEGORIES)
                ->where(self::ID_CATEGORIES, '=', $id)
                ->as_assoc()->execute();
        } else {
            return $res = DB::select()
                ->from(self::CATEGORIES)
                ->join(self::CATEGORIES_DESC)
                ->on(self::CATEGORIES.'.'.self::ID_CATEGORIES, '=', self::CATEGORIES_DESC.'.'.self::ID_CATEGORIES)
                ->where(self::CATEGORIES_DESC.'.lang', '=', 'ru')
                ->as_assoc()->execute();
        }
    }

    public function get_cat_desc($id) {
        $res = DB::select()
            ->from(self::CATEGORIES_DESC)
            ->where(self::ID_CATEGORIES, '=', $id)
            ->as_assoc()->execute();

        $desc = array();
        foreach($res as $cat) {
            $desc[$cat['lang']]['name'] = $cat['name'];
            $desc[$cat['lang']]['description'] = $cat['description'];
            $desc[$cat['lang']]['seo_title'] = $cat['seo_title'];
            $desc[$cat['lang']]['seo_description'] = $cat['seo_description'];
            $desc[$cat['lang']]['seo_keywords'] = $cat['seo_keywords'];
        }

        return $desc;
    }

    public function get_cat($id = FALSE){
        if($id) {
            $res = DB::select()
                ->from(self::CATEGORIES)
                ->join(self::CATEGORIES_DESC)
                ->on(self::CATEGORIES . '.' . self::ID_CATEGORIES, '=', self::CATEGORIES_DESC . '.' . self::ID_CATEGORIES)
                ->where(self::CATEGORIES_DESC . '.lang', '=', 'ru')
                ->where(self::CATEGORIES . '.' . self::ID_CATEGORIES, '!=', $id)
                ->as_assoc()->execute();
        } else {
            $res = DB::select()
                ->from(self::CATEGORIES)
                ->join(self::CATEGORIES_DESC)
                ->on(self::CATEGORIES . '.' . self::ID_CATEGORIES, '=', self::CATEGORIES_DESC . '.' . self::ID_CATEGORIES)
                ->where(self::CATEGORIES_DESC . '.lang', '=', 'ru')
                ->as_assoc()->execute();
        }

        $categories = array();
        $categories[0] = '';
        foreach($res as $cat) {
            $categories[$cat[self::ID_CATEGORIES]] = $cat['name'];
        }
        return $categories;
    }

    public function save($data, $id = FALSE) {
        if(count($data) > 0) {
            $new = FALSE;
            if(isset($_FILES['image']['name'])) {
                if ($_FILES['image']['size'] > 1024 * 5 * 1024) {
                    Message::add_error('Размер файла не должен превышать 5 мегабайт');
                    //Session::instance()->set('ErrMess',"Размер файла не должен превышать 5 мегабайт");
                }
                if(is_uploaded_file($_FILES['image']['tmp_name']))
                {
                    $uploaddir = 'img/categories/img'; //папка
                    $uploadfile = $uploaddir.date('YmdHis').basename($_FILES['image']['name']);//имя файла

                    // Если файл загружен успешно, перемещаем его
                    // из временной директории в конечную
                    if(move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
                        $new = '/'.$uploadfile;
                    } else {
                        Message::add_error('Ошибка загрузки файла');
                    }
                }
            }

            $langs = Model::factory('Admin_Langs')->get_active_langs();
            if($id) {
                if($new) $data['main']['image'] = $new;
                DB::update(self::CATEGORIES)->set($data['main'])->where(self::ID_CATEGORIES, '=', $id)->execute();

                $key_arr = array(); $val_arr = array();
                foreach($langs as $key => $val) {
                    if(isset($data['desc'][$key])) {

                        if(!DB::update(self::CATEGORIES_DESC)
                            ->set($data['desc'][$key])
                            ->where(self::ID_CATEGORIES, '=', $id)
                            ->where('lang', '=', $key)
                            ->execute()) {
                        };
                    }
                }
                return TRUE;
            } else {
                foreach ($data['main'] as $key => $val) {
                    $key_arr[] = $key;
                    $val_arr[] = $val;
                }
                if($new) { $key_arr[] = 'image'; $val_arr[] = $new; }
                $last_id = DB::insert(self::CATEGORIES, $key_arr)->values($val_arr)->execute();

                $key_arr = array(); $val_arr = array();
                foreach($langs as $key => $val) {
                    if(isset($data['desc'][$key])) {
                        $key_arr[0] = self::ID_CATEGORIES;
                        $val_arr[0] = $last_id[0];

                        foreach ($data['desc'][$key] as $key_d => $val_d) {
                            $key_arr[] = $key_d;
                            $val_arr[] = $val_d;
                        }
                        $key_arr[] = 'lang';
                        $val_arr[] = $key;
                        DB::insert(self::CATEGORIES_DESC, $key_arr)->values($val_arr)->execute();
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
            $res = DB::delete(self::CATEGORIES)->where(self::ID_CATEGORIES, '=', $id)->execute();
            return $res;
        }
        return FALSE;
    }

}