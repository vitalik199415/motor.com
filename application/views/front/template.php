<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php if(isset($description)) { echo $description;};?>">
    <meta name="keywords" content="<?php if(isset($keywords)) { echo $keywords;};?>">
    <meta name="author" content="">
    <title><?php if(isset($title)) { echo __($title);};?></title>
    <link href="<?=URL::base();?>css/front/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL::base();?>css/front/font-awesome.min.css" rel="stylesheet">
    <link href="<?=URL::base();?>css/front/prettyPhoto.css" rel="stylesheet">
    <link href="<?=URL::base();?>css/front/price-range.css" rel="stylesheet">
    <link href="<?=URL::base();?>css/front/animate.css" rel="stylesheet">
    <link href="<?=URL::base();?>css/front/main.css" rel="stylesheet">
    <link href="<?=URL::base();?>css/front/responsive.css" rel="stylesheet">
    <link href="<?=URL::base();?>css/front/jquery.jgrowl.css" rel="stylesheet">

    <script src="<?=URL::base();?>js/jquery-1.11.2.min.js"></script>
    <script src="<?=URL::base();?>js/front/jquery-migrate-1.0.0.js"></script>
    <script src="<?=URL::base();?>js/front/jquery.jgrowl_minimized.js"></script>


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

    <?php if(isset($header)) { echo $header;};?>
    <?php if(isset($slider)) { echo $slider;};?>
    <section>
        <div class="container">
            <div class="row">
                <?php if(isset($left_sidebar)) { echo $left_sidebar;};?>
                <?php if(isset($content)) { echo $content;};?>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php if(isset($profiler)) { echo $profiler;};?>
            </div>
        </div>
    </section>
    <?php if(isset($footer)) { echo $footer;};?>

    <script src="<?=URL::base();?>js/admin/jquery.validate.js"></script>
    <script src="<?=URL::base();?>js/front/bootstrap.min.js"></script>
    <script src="<?=URL::base();?>js/simplebox_util.js"></script>
    <script src="<?=URL::base();?>js/front/jquery.scrollUp.min.js"></script>
    <script src="<?=URL::base();?>js/front/price-range.js"></script>
    <script src="<?=URL::base();?>js/front/jquery.prettyPhoto.js"></script>
    <script src="<?=URL::base();?>js/front/main.js"></script>


        <script>
            $.jGrowl.defaults.closer = false;

            // interval for checking the status popup
            $.jGrowl.defaults.check = 500;

            <? if(isset($info)): ?>
                $.jGrowl('<div style="color: #0088ff"><?=$info?></div>', { theme: 'Right', life: 5000 });
            <? endif; ?>

            <? if(isset($error)): ?>
                $.jGrowl('<div style="color: #ff0000"><?=$error?></div>', { theme: 'Right', life: 5000 });
            <? endif; ?>

            <? if(isset($success)): ?>
                $.jGrowl('<div style="color: #00ff00"><?=$success?></div>', { theme: 'Right', life: 5000 });
            <? endif; ?>
        </script>




</body>
</html>