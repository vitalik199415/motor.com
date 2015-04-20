<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Menu {

    public static function build_menu($lang) {
        $brands = Model::factory('Brands')->get_brands($lang);
        $categories = Model::factory('Categories')->get_cat($lang);

        $menu = '';
        if(count($brands) > 0) {
            foreach($brands as $brand) {
                $menu .= '<li>
                          <div class="panel panel-default">
                           <div class="panel-heading">
                             <h4 class="panel-title">
                               <a href="'.URL::set_url('products/'.$brand['url']).'">'.$brand['name'].'</a>
                                 <a data-toggle="collapse" data-parent="#category" href="#'.$brand['url'].'">
                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                </a>
                            </h4>
                        </div>
                        <div id="'.$brand['url'].'" class="panel-collapse collapse">
                            <div class="panel-body">';
                                $menu .= build_category($categories, $brand['url'], 0);
                            $menu .= '</div>
                        </div>
                    </div>
                </li>';
            }
            return $menu;
        }
    }
}

function build_category($menu_arr, $url, $parent_id = 0) {
    if(isset($menu_arr[$parent_id])) {
        if(is_array($menu_arr) and (count($menu_arr[$parent_id]) > 0)) {
            $tree = '<ul>';
            foreach($menu_arr[$parent_id] as $cat) {

                $tree .= "<li>
                          <div class='panel panel-default'>
                            <div class='panel-heading'>
                                <h6 class='panel-title'>
                                    <a href='".URL::set_url('products/'.$url.'/'.$cat['url'])."'>".$cat['name']."</a>";
                if(isset($menu_arr[$cat['id_categories']])) {
                    $tree .= "<a data-toggle='collapse' data-parent='#".$url."'href='#".$cat['url'].$url."'>
                                        <span class='badge pull-right'><i class='fa fa-plus'></i></span>
                                    </a>";
                    }

                                $tree .= "</h6>
                            </div>
                            <div id='".$cat['url'].$url."' class='panel-collapse collapse'>
                                <div class='panel-body'>";

                $tree .= build_category($menu_arr, $url, $cat['id_categories']);
                $tree .= '</div>
                            </div>
                          </div>
                          </li>';
            }
            $tree .= '</ul>';


        } else return null;
    } else return null;
    return $tree;
}