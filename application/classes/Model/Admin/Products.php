<?php defined('SYSPATH') or die('No direct script access.');

class Model_Admin_Products extends Model {
    const PRODUCTS              = 'products';
    const ID_PRODUCTS           = 'id_products';
    const CAT_PROD              = 'categories_products';
    const ID_CAT_PROD           = 'id_categories';
    const PRODUCTS_DESC         = 'products_description';
    const ID_PRODUCTS_DESC      = 'id_products_description';
    const PRODUCTS_IMG          = 'products_images';
    const ID_PRODUCTS_IMG       = 'id_products_images';

    public function get_products($id = FALSE) {
        if($id){
            return $res = DB::select()
                ->from(self::PRODUCTS)
                ->where(self::ID_PRODUCTS, '=', $id)
                ->as_assoc()->execute();
        } else {
            return $res = DB::select()
                ->from(self::PRODUCTS)
                ->join(self::PRODUCTS_DESC)
                ->on(self::PRODUCTS.'.'.self::ID_PRODUCTS, '=', self::PRODUCTS_DESC.'.'.self::ID_PRODUCTS)
                ->where(self::PRODUCTS_DESC.'.lang', '=', 'ru')
                ->as_assoc()->execute();
        }
    }

    public function get_product_desc($id) {
        $res = DB::select()
            ->from(self::PRODUCTS_DESC)
            ->where(self::ID_PRODUCTS, '=', $id)
            ->as_assoc()->execute();

        $desc = array();
        foreach($res as $prod) {
            $desc[$prod['lang']]['name'] = $prod['name'];
            $desc[$prod['lang']]['short_description'] = $prod['short_description'];
            $desc[$prod['lang']]['full_description'] = $prod['full_description'];
            $desc[$prod['lang']]['seo_title'] = $prod['seo_title'];
            $desc[$prod['lang']]['seo_description'] = $prod['seo_description'];
            $desc[$prod['lang']]['seo_keywords'] = $prod['seo_keywords'];
        }
        return $desc;
    }

    public function get_product_images($id, $preview = FALSE) {
        if($preview) {
            $res = DB::select()
                ->from(self::PRODUCTS_IMG)
                ->where(self::ID_PRODUCTS, '=', $id)
                ->as_assoc()->execute();
        } else {
            $res = DB::select()
                ->from(self::PRODUCTS_IMG)
                ->where(self::ID_PRODUCTS, '=', $id)
                ->as_assoc()->execute();
        }
        return $res;
    }

    public function get_cat($id){
        if($id) {
            $res = DB::select()
                ->from(self::CAT_PROD)
                ->where(self::ID_PRODUCTS, '=', $id)
                ->as_assoc()->execute();
            return $res;
        }
        return FALSE;
    }

    public function save($data, $id = FALSE) {
        if(count($data) > 0) {

            $langs = Model::factory('Admin_Langs')->get_active_langs();
            if($id) {

                DB::update(self::PRODUCTS)->set($data['main'])->where(self::ID_PRODUCTS, '=', $id)->execute();

                $key_arr = array(); $val_arr = array();
                foreach($langs as $key => $val) {
                    if(isset($data['desc'][$key])) {

                        if(!DB::update(self::PRODUCTS_DESC)
                            ->set($data['desc'][$key])
                            ->where(self::ID_PRODUCTS, '=', $id)
                            ->where('lang', '=', $key)
                            ->execute()) {
                        };
                    }
                }

                $this->save_img($_FILES, $id);
                $this->save_cat($data['categories'], $id);

                return TRUE;
            } else {
                foreach ($data['main'] as $key => $val) {
                    $key_arr[] = $key;
                    $val_arr[] = $val;
                }

                $last_id = DB::insert(self::PRODUCTS, $key_arr)->values($val_arr)->execute();

                $key_arr = array(); $val_arr = array();
                foreach($langs as $key => $val) {
                    if(isset($data['desc'][$key])) {
                        $key_arr[0] = self::ID_PRODUCTS;
                        $val_arr[0] = $last_id[0];

                        foreach ($data['desc'][$key] as $key_d => $val_d) {
                            $key_arr[] = $key_d;
                            $val_arr[] = $val_d;
                        }
                        $key_arr[] = 'lang';
                        $val_arr[] = $key;
                        DB::insert(self::PRODUCTS_DESC, $key_arr)->values($val_arr)->execute();
                        $key_arr = array(); $val_arr = array();
                    }
                }

                $this->save_img($_FILES, $last_id[0]);
                $this->save_cat($data['categories'], $last_id[0]);

                return TRUE;
            }
        }
        return FALSE;
    }

    public function save_img($images, $id) {
        $file_types = array('image/jpeg', 'image/jpg', 'image/gif', 'image/png', 'image/bmp', );
        if(isset($images['image'])) {
            foreach($images['image'] as $image) {
                if ($image['size'] > 1024 * 5 * 1024) {
                    Message::add_error('Размер файла не должен превышать 5 мегабайт');
                }
                if (!in_array($image['type'], $file_types)) {
                    Message::add_error('Один из файлов не является изображением');
                }
                if (is_uploaded_file($image['tmp_name'])) {
                    $uploaddir = 'img/products/img'; //папка
                    $uploadfile = $uploaddir . date('YmdHis') . basename($image['name']);//имя файла

                    // Если файл загружен успешно, перемещаем его
                    // из временной директории в конечную
                    $key_arr = array(); $val_arr = array();
                    if (move_uploaded_file($image['tmp_name'], $uploadfile)) {
                        $new = '/' . $uploadfile;

                        $key_arr[0] = 'id_products';
                        $key_arr[1] = 'image';
                        $val_arr[0] = $id;
                        $val_arr[1] = $new;
                        if(!DB::insert(self::PRODUCTS_IMG, $key_arr)->values($val_arr)->execute())
                            Message::add_error('Ошибка записи в базу данных!');
                    } else {
                        Message::add_error('Ошибка загрузки файла');
                    }
                } else {
                    Message::add_error('Ошибка загрузки файла');
                }
            }
        }
        return FALSE;
    }

    public function save_cat($POST, $ID) {
        $result = DB::select()->from(self::CAT_PROD)->where(self::ID_PRODUCTS,'=',$ID)->execute();
        $data = array();
        foreach($result as $cat)
        {
            $data[$cat[self::ID_CAT_PROD]] = $cat[self::ID_CAT_PROD];
        }

        if($POST) {
            foreach ($POST as $id_cat) {
                if (isset($data[$id_cat])) {
                    unset($data[$id_cat]);
                } else {
                    $data_arr = array(); $key_arr = array();
                    $key_arr = array(self::ID_PRODUCTS, self::ID_CAT_PROD);
                    $data_arr = array($ID, $id_cat);
                    DB::insert(self::CAT_PROD, $key_arr)->values($data_arr)->execute();
                }
            }
        }

        if(count($data) > 0)
        {
            foreach($data as $cat_id)
            {
                DB::delete(self::CAT_PROD)->where(self::ID_CAT_PROD, '=', $cat_id)->execute();
            }
        }
    }

    public function set_preview($id_img, $id_p) {
        if($id_img) {
            $data = array('preview' => 0);
            DB::update(self::PRODUCTS_IMG)->set($data)->where(self::ID_PRODUCTS, '=', $id_p)->execute();

            $data = array('preview' => 1);
            DB::update(self::PRODUCTS_IMG)
                ->set($data)
                ->where(self::ID_PRODUCTS_IMG, '=', $id_img)
                ->where(self::ID_PRODUCTS, '=', $id_p)
                ->execute();
            return TRUE;
        }
        return FALSE;
    }

    public function delete($id) {
        if($id) {
            $res = DB::delete(self::PRODUCTS)->where(self::ID_PRODUCTS, '=', $id)->execute();
            return $res;
        }
        return FALSE;
    }

    public function del_img($id) {
        if($id) {
            $res = DB::select()->from(self::PRODUCTS_IMG)->where(self::ID_PRODUCTS_IMG, '=', $id)->execute();
            unlink($res[0]['image']);
            $res = DB::delete(self::PRODUCTS_IMG)->where(self::ID_PRODUCTS_IMG, '=', $id)->execute();
            return $res;
        }
        return FALSE;
    }

}