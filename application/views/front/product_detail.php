<div class="col-sm-9 padding-right">
    <div class="product-details"><!--product-details-->
        <div class="col-sm-5">
            <div class="view-product">
                <? foreach($images as $image):
                    if($image['preview']): ?>
                        <a class="preview" rel="simplebox_group" href="<?=$image['image']?>">
                            <span></span>
                            <img src="<?=$image['image']?>" alt="" />
                        </a>
                    <? endif;
                endforeach; ?>
            </div>
            <? if(count($images) > 1): ?>
            <div id="similar-product" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner my-carousel">
                    <? $i = 0; foreach($images as $image):
                        if($i == 0) echo "<div class='item active'>";
                        if($image['preview'] == 0):?>
                            <a rel="simplebox_group" href="<?=$image['image']?>" class="cell"><img src="<?=$image['image']?>" style=""/></a>
                        <? endif;
                        $i++;  if($i == 3) {echo "</div>"; $i = 0; }
                    endforeach; ?>
                    <? if(count($images) < 2): ?>
                        </div>
                    <? endif; ?>
                </div>

                <!-- Controls -->
                <a class="left item-control" href="#similar-product" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right item-control" href="#similar-product" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        <? endif; ?>
        </div>
        <div class="col-sm-7">
            <div class="product-information"><!--/product-information-->
                <? if($product['new']): ?>
                    <img src="/img/home/label_new.png" class="newarrival" alt="" />
                <? endif; ?>
                <? if($product['sale']): ?>
                    <img src="/img/home/label_sale.png" class="newarrival" alt="" />
                <? endif; ?>
                <h2><?=$product['name']?></h2>
                <p>SKU: <?=$product['sku']?></p>
                <img src="/img/home/rating.png" alt="" /><br>
                <span>
                    <p><span><?=$product['price']*$curr['rate'].' '.$curr['name']?></span></p><!--<br><br><br>-->
                    <p>
                        <label><?=__('Quantity')?>:</label>
                        <form method="post" action="<?=URL::set_url('cart/add/').@$product['id_products'];?>">
                            <input type="text" name="qty" value="1" />
                            <button type="submit" class="btn btn-fefault cart">
                                <i class="fa fa-shopping-cart"></i>
                                <?=__('Add to cart')?>
                            </button>
                        </form>
                    </p>
                </span>
                <p><b><?=__('Availability')?>:</b> <?=$product['in_stock'] ? __('In stock') : __('Not available');?></p>

            </div><!--/product-information-->
        </div>
    </div><!--/product-details-->

    <div class="category-tab shop-details-tab"><!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#details" data-toggle="tab"><?=__('Details')?></a></li>
                <li><a href="#reviews" data-toggle="tab"><?=__('Reviews')?></a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane active fade in" id="details" >
                <div class="col-sm-12">
                    <?=$product['full_description']?>
                </div>
            </div>

            <div class="tab-pane fade" id="reviews" >
                <div class="col-sm-12">
                    <ul>
                        <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                        <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p><b>Write Your Review</b></p>

                    <form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
                        <textarea name="" ></textarea>
                        <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
                        <button type="button" class="btn btn-default pull-right">
                            Submit
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div><!--/category-tab-->
</div>
<script>
    $(document).ready(function(){
        (function(){
            var boxes=[],els,i,l;
            if(document.querySelectorAll){
                els=document.querySelectorAll('a[rel=simplebox]');
                Box.getStyles('simplebox_css','/css/simplebox.css');
                Box.getScripts('simplebox_js','/js/simplebox.js',function(){
                    simplebox.init();
                    for(i=0,l=els.length;i<l;++i)
                        simplebox.start(els[i]);
                    simplebox.start('a[rel=simplebox_group]');
                });
            }
        })();
    });
</script>