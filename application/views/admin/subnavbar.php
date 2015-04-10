<div class="subnavbar">
    <div class="subnavbar-inner">
        <div class="container">
            <ul class="mainnav">
                <li><a href="<?=URL::set_url('admin/main');?>"><i class="icon-home"></i><span>Главная</span> </a> </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-reorder"></i><span>Навигация <i class="icon-caret-down"></i></span> </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=URL::set_url('admin/menu');?>">Меню сайта</a></li>
                        <li><a href="<?=URL::set_url('admin/categories');?>">Категории товаров</a></li>
                        <li><a href="<?=URL::set_url('admin/brands');?>">Марки автомобилей</a></li>
                    </ul>
                </li>
                <li><a href="<?=URL::set_url('admin/news');?>"><i class="icon-comment-alt"></i><span>Новости</span> </a></li>
                <li><a href="<?=URL::set_url('admin/products');?>"><i class="icon-list-alt"></i><span>Товары</span> </a> </li>
                <li><a href="<?=URL::set_url('admin/pages')?>"><i class="icon-file"></i><span>Страницы</span> </a> </li>
                <li><a href="<?=URL::set_url('admin/customers')?>"><i class="icon-file"></i><span>Покупатели</span> </a> </li>
                <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-wrench"></i><span>Настройка сайта <i class="icon-caret-down"></i></span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=URL::set_url('admin/currency')?>">Валюта на сайте</a></li>
                        <li><a href="<?=URL::set_url('admin/langs')?>">Языки сайта</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /container -->
    </div>
    <!-- /subnavbar-inner -->
</div>
<!-- /subnavbar -->

