<div class="col-sm-12 padding-right">
    <h2 class="title text-center"><?=__('Cart')?></h2>
    <section id="cart_items">
        <div class="container">
            <div class="span12">
                <? if(isset($mess)): ?>
                    <div class="alert alert-info">
                        <i class="fa fa-info"></i>  <?=$mess;?>
                    </div>
                <? endif; ?>
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
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <? if(isset($cart)):
                        foreach($cart as $row):?>
                            <tr>
                                <td class="cart_product" align="center">
                                    <a href="<?=URL::set_url('detail/'.$row['product_id'])?>"><img src="<?=$row['image']?>" alt="<?=$row['name']?>" width="110px"></a>
                                </td>
                                <td class="cart_description" align="center">
                                    <h4><a href="<?=URL::set_url('detail/'.$row['product_id'])?>"><?=$row['name']?></a></h4>
                                    <p>SKU: <?=$row['sku']?></p>
                                </td>
                                <td class="cart_price" align="center">
                                    <p><?=$row['price']*$curr['rate'].' '.$curr['name']?></p>
                                </td>
                                <td class="cart_quantity" align="center">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href="<?=URL::set_url('cart/quantity_up/'.$row['id_cart'])?>"> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="<?=$row['qty']?>" autocomplete="off" size="4">
                                        <a class="cart_quantity_down" href="<?=URL::set_url('cart/quantity_down/'.$row['id_cart'])?>"> - </a>
                                    </div>
                                </td>
                                <td class="cart_total" align="center">
                                    <p class="cart_total_price"><?=$row['price']*$curr['rate']*$row['qty'].' '.$curr['name']?></p>
                                </td>
                                <td class="cart_delete" align="center">
                                    <a class="cart_quantity_delete delete" href="<?=URL::set_url('cart/delete/'.$row['id_cart'])?>"><i class="fa fa-times"></i></a>
<!--                                    <a class="cart_quantity_delete delete" id="delete" href="#" data-value="--><?//=$row['id_cart']?><!--"><i class="fa fa-times"></i></a>-->
                                </td>
                            </tr>
                        <? endforeach; ?>
                    <? endif; ?>
                    <tr>
                        <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-content">
                                <ul class="list-inline item-details">
                                    <li><a href="http://themifycloud.com">Ecommerce templates</a></li>
                                    <li><a href="http://themescloud.org">Ecommerce themes</a></li>
                                </ul>
                            </div>
                        </div>
                    </tr>
                    </tbody>
                </table>
                <? if(count($cart) > 0): ?>
                    <div class="col-sm-3 col-sm-offset-9 confirm">
                        <a class="cart_quantity_delete" href="<?=URL::set_url('checkout')?>">
                            <?=__('Confirm order')?>
                            <i class="fa fa-check-circle"></i>
                        </a>
                    </div>
                <? endif; ?>
            </div>
        </div>
    </section> <!--/#cart_items-->
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('a#delete').click(function() {
            if(!confirm("<?=__('Do you really want to remove product from cart?')?>")) {
                return false;
            } /*else {
                var id = $(this).attr('data-value');

                $.ajax({
                    type: "POST",
                    data: "id=" + id,
                    url: "/cart/delete",
                    dataType: "json",
                    success: function(){
                        if(data.result) {
                            alert("<?=__('Product deleted from cart')?>");
                        } else {
                            alert("<?=__('Error deleting product from cart')?>");
                        }
                    }
                });
            }*/
        });
    });
</script>