<div class="col-sm-12 padding-right">
    <section id="cart_items">
        <div class="container">
            <div class="span12">
                <? if(isset($mess)): ?>
                    <div class="alert alert-info">
                        <i class="fa fa-info"></i>  <?=$mess;?>
                    </div>
                <? endif; ?>
            </div>

            <div class="step-one">
                <h2 class="heading">Step1</h2>
            </div>
            <div class="checkout-options">
                <h3>New User</h3>
                <p>Checkout options</p>
                <ul class="nav">
                    <li>
                        <label><input type="checkbox"> Register Account</label>
                    </li>
                    <li>
                        <label><input type="checkbox"> Guest Checkout</label>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-times"></i>Cancel</a>
                    </li>
                </ul>
            </div><!--/checkout-options-->

            <div class="register-req">
                <p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
            </div><!--/register-req-->

            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="shopper-info">
                            <p>Shopper Information</p>
                            <form>
                                <input type="text" placeholder="Display Name">
                                <input type="text" placeholder="User Name">
                                <input type="password" placeholder="Password">
                                <input type="password" placeholder="Confirm password">
                            </form>
                            <a class="btn btn-primary" href="">Get Quotes</a>
                            <a class="btn btn-primary" href="">Continue</a>
                        </div>
                    </div>
                    <div class="col-sm-5 clearfix">
                        <div class="bill-to">
                            <p>Bill To</p>
                            <div class="form-one">
                                <form>
                                    <input type="text" placeholder="Company Name">
                                    <input type="text" placeholder="Email*">
                                    <input type="text" placeholder="Title">
                                    <input type="text" placeholder="First Name *">
                                    <input type="text" placeholder="Middle Name">
                                    <input type="text" placeholder="Last Name *">
                                    <input type="text" placeholder="Address 1 *">
                                    <input type="text" placeholder="Address 2">
                                </form>
                            </div>
                            <div class="form-two">
                                <form>
                                    <input type="text" placeholder="Zip / Postal Code *">
                                    <select>
                                        <option>-- Country --</option>
                                        <option>United States</option>
                                        <option>Bangladesh</option>
                                        <option>UK</option>
                                        <option>India</option>
                                        <option>Pakistan</option>
                                        <option>Ucrane</option>
                                        <option>Canada</option>
                                        <option>Dubai</option>
                                    </select>
                                    <select>
                                        <option>-- State / Province / Region --</option>
                                        <option>United States</option>
                                        <option>Bangladesh</option>
                                        <option>UK</option>
                                        <option>India</option>
                                        <option>Pakistan</option>
                                        <option>Ucrane</option>
                                        <option>Canada</option>
                                        <option>Dubai</option>
                                    </select>
                                    <input type="password" placeholder="Confirm password">
                                    <input type="text" placeholder="Phone *">
                                    <input type="text" placeholder="Mobile Phone">
                                    <input type="text" placeholder="Fax">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="order-message">
                            <p>Shipping Order</p>
                            <textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
                            <label><input type="checkbox"> Shipping to bill address</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-payment">
                <h2>Review & Payment</h2>
            </div>

            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image" align="center"><?=__('Product')?></td>
                        <td class="description" align="center"></td>
                        <td class="price" align="center"><?=__('Price')?></td>
                        <td class="quantity" align="center"><?=__('Quantity')?></td>
                        <td class="total" align="center"><?=__('Total')?></td>
                    </tr>
                    </thead>
                    <tbody>
                    <? if(isset($cart)):
                        foreach($cart as $row):?>
                            <tr>
                                <td class="cart_product">
                                    <a href="<?=URL::set_url('detail/'.$row['product_id'])?>"><img src="<?=$row['image']?>" alt="<?=$row['name']?>" width="110px"></a>
                                </td>
                                <td class="cart_description" align="center">
                                    <h4><a href="<?=URL::set_url('detail/'.$row['product_id'])?>"><?=$row['name']?></a></h4>
                                    <p>SKU: <?=$row['sku']?></p>
                                </td>
                                <td class="cart_price">
                                    <p align="center"><?=$row['price']*$curr['rate'].' '.$curr['name']?></p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <p class="cart_total_price" align="center"><?=$row['qty']?></p>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price" align="center"><?=$row['price']*$curr['rate']*$row['qty'].' '.$curr['name']?></p>
                                </td>
                            </tr>
                        <? endforeach; ?>
                    <? endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
            </div>
        </div>
    </section> <!--/#cart_items-->
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('a.delete').click(function() {
            if(!confirm("<?=__('Do you really want to remove product from cart?')?>")) {
                return false;
            }
        });
    });
</script>