<div class="col-sm-9 padding-right">
    <h2 class="title text-center"><?=__($title)?></h2>
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group product-limit">
                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown" title="<?=__('Currency');?>">
                    <?=Session::instance()->get('product_limit')?>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="<?=URL::set_url('limitn/1')?>">1</a></li>
                    <li><a href="<?=URL::set_url('limitn/3')?>">3</a></li>
                    <li><a href="<?=URL::set_url('limitn/9')?>">9</a></li>
                    <li><a href="<?=URL::set_url('limitn/18')?>">18</a></li>
                    <li><a href="<?=URL::set_url('limitn/27')?>">27</a></li>
                    <li><a href="<?=URL::set_url('limitn/36')?>">36</a></li>
                </ul>
            </div>
            <p><?=__('News per page')?></p>
        </div>
    </div>
    <div class="row">
        <div class="blog-post-area">
            <? foreach($news as $new): ?>
                <div class="single-blog-post">
                    <h3><?=$new['name']?></h3>
                    <div class="post-meta">
                        <ul>
                            <!--<li><i class="fa fa-user"></i> Mac Doe</li>
                            <li><i class="fa fa-clock-o"></i> 1:33 pm</li>-->
                            <li><i class="fa fa-calendar"></i> <?=$new['date']?></li>
                        </ul>
                    </div>
                    <p><?=$new['short_description']?></p>
                    <a  class="btn btn-primary" href="<?=URL::set_url('single/'.$new['id_news'])?>"><?=__('Read more')?></a>
                </div>
            <? endforeach; ?>
        </div>
    </div>
    <div class="row" style="text-align: center;">
        <?=$pagination?>
    </div>
</div>