<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="<?=URL::set_url('admin');?>">Motor<i>.COM</i> Admin </a>
            <div class="nav-collapse">
                <ul class="nav pull-right">
                    <li><a href="#"><i class="icon-user"></i> Привет, <?=$login;?> </a></li>
                    <li><a href="<?=URL::set_url('admin/login/logout');?>"><i class="icon-signout"></i> Выход</a></li>
                    <!--<li class="dropdown">
                        <a href="/admin/login/logout"><i class="icon-signout"></i> Exit </a>
                    </li>-->
                </ul>
                <form class="navbar-search pull-right">
                    <input type="text" class="search-query" placeholder="Search">
                </form>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!-- /container -->
    </div>
    <!-- /navbar-inner -->
</div>
<!-- /navbar -->