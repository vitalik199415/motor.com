<div class="col-sm-9 padding-right">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center"><?=__($title)?></h2>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <center>
                    <? if(isset($image)): ?>
                    <img src="<?=$image?>" width="300px" style="margin-bottom: 10px"/>
                    <? endif; ?>
                </center>
            </div>
        </div>
        <div class="row limit">
            <div class="col-sm-12">
                <div class="btn-group product-limit">
                    <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown" title="<?=__('Currency');?>">
                        <?=Session::instance()->get('product_limit')?>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="<?=URL::set_url('limit/1')?>">1</a></li>
                        <li><a href="<?=URL::set_url('limit/3')?>">3</a></li>
                        <li><a href="<?=URL::set_url('limit/9')?>">9</a></li>
                        <li><a href="<?=URL::set_url('limit/18')?>">18</a></li>
                        <li><a href="<?=URL::set_url('limit/27')?>">27</a></li>
                        <li><a href="<?=URL::set_url('limit/36')?>">36</a></li>
                    </ul>
                </div>
                <p><?=__('Products per page')?></p>
            </div>
        </div>
        <div class="row">
            <? foreach($products as $product): ?>
                <div class="col-sm-4 product-item">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <center>
                                    <div class="product-image">
                                        <a href="<?=URL::set_url('detail/').$product['id_products']?>">
                                            <img src="<?=$product['image']?>" alt="" align="justify" />
                                        </a>
                                    </div>
                                </center>
                                <h2><a href="<?=URL::set_url('detail/').$product['id_products']?>"><?=$product['name']?></a></h2>
                                <h4 style="color: #0052A4"><?=$product['in_stock'] ? __('In stock') : __('Not available');?></h4>
                                <h3 <?  if($product['in_stock']):?> style="color: #161616" <? else: ?> style="color: #464646" <? endif; ?>><?=$product['price']*$curr['rate'].' '.$curr['name']?> </h3>
                                <a href="<?=URL::set_url('cart/add/').$product['id_products']?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i><?=__('Add to cart')?></a>
                            </div>
                            <? if($product['new']): ?>
                                <img src="/img/home/label_new.png" class="new" alt="" />
                            <? endif; ?>
                            <? if($product['sale']): ?>
                                <img src="/img/home/label_sale.png" class="sale" alt="" />
                            <? endif; ?>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
        <div class="row" style="text-align: center;">
            <?=$pagination?>
        </div>
    </div><!--features_items-->
</div>