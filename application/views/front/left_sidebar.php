<div class="col-sm-3">
    <div class="left-sidebar">
        <h2><?=__('Menu')?></h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="<?=URL::set_url('products')?>"><?=__('Products')?></a></h4>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="<?=URL::set_url('new')?>"><?=__('New')?></a></h4>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="<?=URL::set_url('sale')?>"><?=__('Sale')?></a></h4>
                </div>
            </div>
            <div class="panel panel-default" id="category">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            <?=__('Categories')?>
                        </a>
                    </h4>
                </div>
                <div id="sportswear" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            <? if(isset($brands)):
                                foreach($brands as $brand):?>
                                    <li>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="<?=URL::set_url('products/'.$brand['url'])?>"><?=$brand['name']?></a>
                                                    <a data-toggle="collapse" data-parent="#category" href="#<?=$brand['url']?>">
                                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="<?=$brand['url']?>" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <ul>
                                                        <? if(isset($categories)):
                                                            foreach($categories as $cat):?>
                                                            <li><a href="<?=URL::set_url('products/'.$brand['url'].'/'.$cat['url'])?>" title="<?=$cat['description']?>"><?=$cat['name']?> </a></li>
                                                        <? endforeach; endif; ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<a href="<?/*=URL::set_url('category/'.$category['url'])*/?>" title="<?/*=$category['description']*/?>"><?/*=$category['name']*/?> </a>-->
                                    </li>
                                <? endforeach;
                            endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#"><?=__('Spare parts catalogue')?></a></h4>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#"><?=__('Directory of manufacturers')?></a></h4>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#"><?=__('News')?></a></h4>
                </div>
            </div>
        </div><!--/menu block-->

        <div class="shipping text-center"><!--shipping-->
            <img src="/img/home/shipping.jpg" alt="" />
        </div><!--/shipping-->

    </div>
</div>