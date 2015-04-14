<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>404! Страница не найдена</title>
    <link href="<?=URL::base();?>css/front/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL::base();?>css/front/font-awesome.min.css" rel="stylesheet">
    <link href="<?=URL::base();?>css/front/prettyPhoto.css" rel="stylesheet">
    <link href="<?=URL::base();?>css/front/price-range.css" rel="stylesheet">
    <link href="<?=URL::base();?>css/front/animate.css" rel="stylesheet">
    <link href="<?=URL::base();?>css/front/main.css" rel="stylesheet">
    <link href="<?=URL::base();?>css/front/responsive.css" rel="stylesheet">

    <script src="<?=URL::base();?>js/jquery-1.11.2.min.js"></script>

    <!--[if lt IE 9]>
    <script src="<?=URL::base();?>js/front/html5shiv.js"></script>
    <script src="<?=URL::base();?>js/front/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?=URL::base();?>img/favicon.ico">
    <!--    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">-->
    <!--    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">-->
    <!--    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">-->
    <!--    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">-->
</head><!--/head-->

<body>

<div class="container text-center">
    <div class="content-404">
        <img src="<?=URL::base();?>img/system/404.png" class="img-responsive" alt="404" />
        <h1><b>OPPS!</b> <?=__('We Couldn’t Find this Page')?></h1>
        <p><?=__('Uh... So it looks like you brock something.').__('The page you are looking for has up and Vanished')?></p>
        <h2><a href="<? header("Location: ". $_SERVER['HTTP_REFERER'])?>"><?=__('Bring me back')?></a></h2>
    </div>
</div>

<script src="<?=URL::base();?>js/front/bootstrap.min.js"></script>
<script src="<?=URL::base();?>js/front/jquery.scrollUp.min.js"></script>
<script src="<?=URL::base();?>js/front/price-range.js"></script>
<script src="<?=URL::base();?>js/front/jquery.prettyPhoto.js"></script>
<script src="<?=URL::base();?>js/front/main.js"></script>

</body>
</html>