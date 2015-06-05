<div class="col-sm-3">
    <div class="left-sidebar">
        <h2><?=__('Menu')?></h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <!--<div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="<?/*=URL::set_url('products')*/?>"><?/*=__('Products')*/?></a></h4>
                </div>
            </div>-->
            <div class="panel panel-default" id="category">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="<?=URL::set_url('products')?>"><?=__('Products')?></a>
                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                        </a>
                    </h4>
                </div>
                <div id="sportswear" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            <?=@$categories?>
                        </ul>
                    </div>
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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="<?=URL::set_url('news')?>"><?=__('News')?></a></h4>
                </div>
            </div>
            <? if(isset($menu)):
                foreach($menu as $m):?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a href="<?=URL::set_url('page/'.$m['url'])?>"><?=$m['title']?></a></h4>
                        </div>
                    </div>
                <? endforeach;
            endif; ?>
        </div><!--/menu block-->

        <div class="shipping text-center"><!--shipping-->
            <img src="/img/home/shipping.jpg" alt="" />
        </div><!--/shipping-->

    </div>
</div>

<script>
    $(document).ready(function(){

        $("span.badge").click(function(){
            if($(this).find(':first-child').hasClass('fa-plus')) {
                $(this).find(':first-child').removeClass('fa-plus').addClass('fa-minus');
            } else {
                $(this).find(':first-child').removeClass('fa-minus').addClass('fa-plus');
            }
        });

        /*$('.fa-plus').click(function(){
            $(this).removeClass('fa-plus').addClass('fa-minus');
        });

        $(document).on('click', 'i.fa-minus', function() {
            $(this).removeClass('fa-minus').addClass('fa-plus');
        });*/
    });
</script>
