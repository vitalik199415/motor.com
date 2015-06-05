<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cart extends Controller_Base {

    public function before() {
        parent::before();
        $this->cart = Model::factory('Cart');
    }

    public function action_index() {
        $data = array();

        if($this->user_id) {
            $data['cart'] = $this->cart->get_cart($this->user_id, FALSE, $this->lang);
        } else {
            $data['cart'] = $this->cart->get_cart(FALSE, $this->session->id(), $this->lang);
        }
        $data['curr'] = Model::factory('Admin_Currency')->get_currency_info($this->currency);

        $this->template->title = 'Cart';
        $this->template->left_sidebar = '';
        $this->template->content = View::factory('front/cart', $data);
    }

    public function action_add() {
        $prod_id = $this->request->param('id');
        if($prod_id) {
            if (isset($_POST['qty'])) {
                $qty = $_POST['qty'];
                if ($this->user_id) {
                    $res = $this->cart->add_to_cart($this->user_id, FALSE, $prod_id, $qty);
                } else {
                    $res = $this->cart->add_to_cart(FALSE, $this->session->id(), $prod_id, $qty);
                }
            } else {
                if ($this->user_id) {
                    $res = $this->cart->add_to_cart($this->user_id, FALSE, $prod_id);
                } else {
                    $res = $this->cart->add_to_cart(FALSE, $this->session->id(), $prod_id);
                }
            }
            if (gettype($res) == 'string') {
                Message::add_info(__($res));
            } else
                if ($res) {
                    Message::add_success(__('Product added to cart'));
                } else {
                    Message::add_error(__('Error adding product to cart'));
                }
        } else {
            Message::add_info(__('Error. ID parameter is not set'));
        }
        $this->redirect('cart');
    }

    public function action_delete() {
//        $id = $this->request->param('id');
        $id = $_POST['id'];
        if($id) {
            if($res = $this->cart->delete($id)) {
                Message::add_success(__("Product deleted from cart"));
            } else {
                Message::add_error(__("Error deleting product from cart"));
            }
        } else {
            Message::add_info(__('Error. ID parameter is not set'));
        }
        echo json_encode(array('result' => $res));
        //$this->redirect('cart');
    }

    public function action_quantity_up() {
        $id = $this->request->param('id');

        if($id) {
            if($this->cart->quantity_up($id)) {
                Message::add_success(__('The quantity of product increased'));
            } else {
                Message::add_error(__('Error by increasing the amount of product'));
            }
        } else {
            Message::add_info(__('Error. ID parameter is not set'));
        }
        $this->redirect('cart');
    }

    public function action_quantity_down() {
        $id = $this->request->param('id');

        if($id) {
            if($this->cart->quantity_down($id)) {
                Message::add_success(__('The quantity of product reduced'));
            } else {
                Message::add_error(__('Error by reducing the amount of product'));
            }
        } else {
            Message::add_info(__('Error. ID parameter is not set'));
        }
        $this->redirect('cart');
    }
}