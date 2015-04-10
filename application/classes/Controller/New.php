<?php defined('SYSPATH') or die('No direct script access.');

class Controller_New extends Controller_Base {

    public $prod_model;

    public function before() {
        $this->prod_model = Model::factory('Products');
        parent::before();
    }

    public function action_index() {
        $config = Kohana::$config->load('config');
        if($this->request->param('param')) {
            $data = $this->build_pagination($this->request->param('param'));
        } else {
            $data = $this->build_pagination();
        }
        $data['title'] = 'New products';
        $data['categories'] = Model::factory('Categories')->get_cat($this->lang);
        $data['curr'] = Model::factory('Admin_Currency')->get_currency_info($this->currency['code']);
        $this->template->left_sidebar = View::factory('front/left_sidebar', $data);
        $this->template->content = View::factory('front/products', $data);
        $this->template->title = 'New';
    }

    public function build_pagination($page = FALSE)
    {
        $targetpage = URL::set_url("new");

        $limit = $this->session->get('product_limit');
        if(!$limit) { $limit = 9; }

        $total_pages = $this->prod_model->get_prod_count('new');
        $total_pages = $total_pages['num'];

        $stages = 3;

        if ($page) {
            $start = ($page - 1) * $limit;
        } else {
            $start = 0;
        }

        // Get page data
        //$query1 = "SELECT * FROM $tableName LIMIT $start, $limit";
        $result = $this->prod_model->get_new_products($limit, $start, $this->lang);
        $data['products'] = $result;

        // Initial page num setup
        if ($page == 0) {
            $page = 1;
        }
        $prev = $page - 1;
        $next = $page + 1;
        $lastpage = ceil($total_pages / $limit);
        $LastPagem1 = $lastpage - 1;


//        <ul class="pagination">
//            <li class="active"><a href="">1</a></li>
//            <li><a href="">2</a></li>
//            <li><a href="">3</a></li>
//            <li><a href="">&raquo;</a></li>
//        </ul>

        $paginate = '';
        if ($lastpage > 1) {
            $paginate .= "<ul class='pagination'>";

            // Previous
            if ($page > 1) {
                //First
                $paginate .= "<li><a href='$targetpage/1' class='fa fa-angle-double-left'></li>";

                $paginate .= "<li><a href='$targetpage/$prev' class='fa fa-angle-left'></a></li>";
            } else {
                //First
                $paginate .= "<li><a class='fa fa-angle-double-left'></a></li>";

                $paginate .= "<li><a class='fa fa-angle-left'></a></li>";
            }


            // Pages
            if ($lastpage < 7 + ($stages * 2))    // Not enough pages to breaking it up
            {
                for ($counter = 1; $counter <= $lastpage; $counter++) {
                    if ($counter == $page) {
                        $paginate .= "<li class='active'><a>$counter</a></li>";
                    } else {
                        $paginate .= "<li><a href='$targetpage/$counter'>$counter</a></li>";
                    }
                }
            } elseif ($lastpage > 5 + ($stages * 2))    // Enough pages to hide a few?
            {
                // Beginning only hide later pages
                if ($page < 1 + ($stages * 2)) {
                    for ($counter = 1; $counter < 4 + ($stages * 2); $counter++) {
                        if ($counter == $page) {
                            $paginate .= "<li class='active'><a>$counter</a></li>";
                        } else {
                            $paginate .= "<li><a href='$targetpage/$counter'>$counter</a></li>";
                        }
                    }
                    $paginate .= "<li><a>...</a></li>";
                    $paginate .= "<li><a href='$targetpage/$LastPagem1'>$LastPagem1</a></li>";
                    $paginate .= "<li><a href='$targetpage/$lastpage'>$lastpage</a></li>";
                } // Middle hide some front and some back
                elseif ($lastpage - ($stages * 2) > $page && $page > ($stages * 2)) {
                    $paginate .= "<li><a href='$targetpage/1'>1</a></li>";
                    $paginate .= "<li><a href='$targetpage/2'>2</a></li>";
                    $paginate .= "<li><a>...</a></li>";
                    for ($counter = $page - $stages; $counter <= $page + $stages; $counter++) {
                        if ($counter == $page) {
                            $paginate .= "<li class='active'><a>$counter</a></li>";
                        } else {
                            $paginate .= "<li><a href='$targetpage/$counter'>$counter</a></li>";
                        }
                    }
                    $paginate .= "<li><a>...</a></li>";
                    $paginate .= "<li><a href='$targetpage/$LastPagem1'>$LastPagem1</a></li>";
                    $paginate .= "<li><a href='$targetpage/$lastpage'>$lastpage</a></li>";
                } // End only hide early pages
                else {
                    $paginate .= "<li><a href='$targetpage/1'>1</a></li>";
                    $paginate .= "<li><a href='$targetpage/2'>2</a></li>";
                    $paginate .= "<li><a>...</a></li>";
                    for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++) {
                        if ($counter == $page) {
                            $paginate .= "<li class='active'><a>$counter</a></li>";
                        } else {
                            $paginate .= "<li><a href='$targetpage/$counter'>$counter</a></li>";
                        }
                    }
                }
            }

            // Next
            if ($page < $counter - 1) {
                $paginate .= "<li><a href='$targetpage/$next' class='fa fa-angle-right'></a></li>";
                //Last
                $paginate .= "<li><a href='$targetpage/$lastpage' class='fa fa-angle-double-right'></a></li>";
            } else {
                $paginate .= "<li><a class='fa fa-angle-right'></a></li>";
                //Last
                $paginate .= "<li><a class='fa fa-angle-double-right'></a></li>";
            }
            $paginate .= "</ul>";

        }
        $data['pagination'] = $paginate;
        return $data;
    }
}