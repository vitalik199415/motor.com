<div class="col-sm-9 padding-right">
    <h2 class="title text-center"><?=__('Brands')?></h2>
    <div class="row">
        <? foreach($brands as $brand): ?>
            <div class="col-sm-2 product-item brand-item">
                <div class="brands-image-wrapper">
                    <div class="single-brand">
                        <div class="productinfo text-center">
                            <center>
                                <div class="product-image brand-image">
                                    <a href="<?=URL::set_url('products/').$brand['url']?>">
                                        <img src="<?=$brand['image']?>" alt="" align="justify" />
                                    </a>
                                </div>
                            </center>
                            <h2><a href="<?=URL::set_url('products/').$brand['url']?>"><?=$brand['name']?></a></h2>
                        </div>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>