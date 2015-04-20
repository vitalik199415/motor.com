<div class="col-sm-9 padding-right">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center"><?=__($title)?></h2>
        <div class="row">
            <div class="col-sm-6">
                <div class="search_box">
                    <form action="<?=URL::set_url('search')?>" method="get">
                        <input type="text" placeholder="Search" name="q"/>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <? foreach($products as $product): ?>
                <div class="col-sm-4">
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
                                <h3><?=$product['price']*$curr['rate'].' '.$curr['name']?> </h3>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i><?=__('Add to cart')?></a>
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
    </div><!--features_items-->
</div>