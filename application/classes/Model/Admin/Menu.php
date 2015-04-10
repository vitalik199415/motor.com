<?php defined('SYSPATH') or die('No direct script access.');

class Model_Admin_Menu extends Model {
    const MENU              = 'menu';
    const ID_MENU           = 'id_menu';
    const MENU_DESC         = 'menu_description';
    const ID_MENU_DESC      = 'id_menu_description';

    public function get_all_menu($id = FALSE) {
        if($id){
            return $res = DB::select()
                ->from(self::MENU)
                ->where(self::ID_MENU, '=', $id)
                ->as_assoc()->execute();
        } else {
            return $res = DB::select()
                ->from(self::MENU)
                ->join(self::MENU_DESC)
                ->on(self::MENU.'.'.self::ID_MENU, '=', self::MENU_DESC.'.'.self::ID_MENU)
                ->where(self::MENU_DESC.'.lang', '=', 'ru')
                ->as_assoc()->execute();
        }
    }

    public function get_menu_desc($id) {
        $res = DB::select()
            ->from(self::MENU_DESC)
            ->where(self::ID_MENU, '=', $id)
            ->as_assoc()->execute();

        $desc = array();
        foreach($res as $menu) {
            $desc[$menu['lang']]['title'] = $menu['title'];
            $desc[$menu['lang']]['seo_title'] = $menu['seo_title'];
            $desc[$menu['lang']]['seo_description'] = $menu['seo_description'];
            $desc[$menu['lang']]['seo_keywords'] = $menu['seo_keywords'];
        }

        return $desc;
    }

    public function get_menu($id = FALSE){
        if(!$id) {
            $res = DB::select()
                ->from(self::MENU)
                ->join(self::MENU_DESC)
                ->on(self::MENU . '.' . self::ID_MENU, '=', self::MENU_DESC . '.' . self::ID_MENU)
                ->where(self::MENU_DESC . '.lang', '=', 'ru')
                ->as_assoc()->execute();
        } else {
            $res = DB::select()
                ->from(self::MENU)
                ->join(self::MENU_DESC)
                ->on(self::MENU . '.' . self::ID_MENU, '=', self::MENU_DESC . '.' . self::ID_MENU)
                ->where(self::MENU_DESC . '.lang', '=', 'ru')
                ->where(self::MENU . '.' . self::ID_MENU, '!=', $id)
                ->as_assoc()->execute();
        }
        $menu = array();
        $menu[0] = '';
        foreach($res as $cat) {
            $menu[$cat[self::ID_MENU]] = $cat['title'];
        }
        return $menu;
    }

    public function save($data, $id = FALSE) {
        if(count($data) > 0) {
            /*$new = FALSE;
            if(isset($_FILES['image']['name'])) {
                if ($_FILES['image']['size'] > 1024 * 5 * 1024) {
                    Message::add_error('Размер файла не должен превышать 5 мегабайт');
                    //Session::instance()->set('ErrMess',"Размер файла не должен превышать 5 мегабайт");
                }
                if(is_uploaded_file($_FILES['image']['tmp_name']))
                {
                    $uploaddir = 'img/img'; //папка
                    $uploadfile = $uploaddir.date('YmdHis').basename($_FILES['image']['name']);//имя файла

                    // Если файл загружен успешно, перемещаем его
                    // из временной директории в конечную
                    if(move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
                        $new = '/'.$uploadfile;
                    } else {
                        Message::add_error('Ошибка загрузки файла');
                    }
                } else {
                    Message::add_error('Ошибка загрузки файла');
                }
            }*/

            $langs = Model::factory('Admin_Langs')->get_active_langs();
            if($id) {
                //if($new) $data['main']['image'] = $new;
                DB::update(self::MENU)->set($data['main'])->where(self::ID_MENU, '=', $id)->execute();

                $key_arr = array(); $val_arr = array();
                foreach($langs as $key => $val) {
                    if(isset($data['desc'][$key])) {

                        if(!DB::update(self::MENU_DESC)
                            ->set($data['desc'][$key])
                            ->where(self::ID_MENU, '=', $id)
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
                //if($new) { $key_arr[] = 'image'; $val_arr[] = $new; }
                $last_id = DB::insert(self::MENU, $key_arr)->values($val_arr)->execute();

                $key_arr = array(); $val_arr = array();
                foreach($langs as $key => $val) {
                    if(isset($data['desc'][$key])) {
                        $key_arr[0] = self::ID_MENU;
                        $val_arr[0] = $last_id[0];

                        foreach ($data['desc'][$key] as $key_d => $val_d) {
                            $key_arr[] = $key_d;
                            $val_arr[] = $val_d;
                        }
                        $key_arr[] = 'lang';
                        $val_arr[] = $key;
                        DB::insert(self::MENU_DESC, $key_arr)->values($val_arr)->execute();
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
            $res = DB::delete(self::MENU)->where(self::ID_MENU, '=', $id)->execute();
            return $res;
        }
        return FALSE;
    }

}