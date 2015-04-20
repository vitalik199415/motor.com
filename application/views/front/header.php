<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +38 099 027 12 60</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> +38 050 824 22 42</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> +38 050 434 32 24</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> motor_com@mail.ru</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-vk"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href=""><span>Motor</span>.COM</a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown" title="<?=__('Language');?>">
                                <?=$lang['short_name']?>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <? foreach($langs as $key => $lang): ?>
                                    <li><a href="<?=URL::set_url('langs/'.$key)?>"><?=$lang?></a></li>
                                <? endforeach; ?>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown" title="<?=__('Currency');?>">
                                <?=$curr['name']?>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <? foreach($currency as $key => $curr): ?>
                                    <li><a href="<?=URL::set_url('currency/'.$curr['code'])?>"><i class="fa fa-<?=strtolower($curr['code'])?>"></i>  <?=$curr['name']?></a></li>
                                <? endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <? if(isset($login)): ?>
                            <ul class="nav navbar-nav">
                                <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> <?=__('Cart')?></a></li>
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=$login?></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?=URL::set_url('profile/'.$login)?>"><i class="fa fa-user"></i> <?=__('Account')?></a></li>
                                        <? if(isset($admin)): ?>
                                            <li><a href="<?=URL::set_url('admin')?>"><i class="fa"></i> <?=__('Admin page')?></a></li>
                                        <? endif; ?>
                                        <li><hr></li>
                                        <li><a href="<?=URL::set_url('login/logout')?>"><i class="fa fa-"></i> <?=__('Logout')?></a></li>
                                    </ul>
                                </li>
                            </ul>
                        <? else: ?>
                            <ul class="nav navbar-nav">
                                <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> <?=__('Cart')?></a></li>
                                <li><a href="<?=URL::set_url('register')?>"><i class="fa fa-user-plus"></i> <?=__('Register')?></a></li>
                                <li><a href="<?=URL::set_url('login')?>"><i class="fa fa-lock"></i> <?=__('Login')?></a></li>
                            </ul>
                        <? endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="/" class="active"><?=__('Home')?></a></li>
                            <!--<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>-->
                            <li><a href="<?=URL::set_url('contact')?>"><?=__('Contact')?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <form action="<?=URL::set_url('search')?>" method="get">
                            <input type="text" placeholder="Search" name="q"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->