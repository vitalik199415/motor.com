<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php if(isset($title)) { echo $title;};?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script src="<?=URL::base();?>js/admin/jquery-1.7.2.min.js"></script>
    <link rel="shortcut icon" href="<?=URL::base();?>img/admin/favicon.ico" type="image/x-icon">
    <link href="<?=URL::base();?>css/admin/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL::base();?>css/admin/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
          rel="stylesheet">
    <link href="<?=URL::base();?>css/admin/font-awesome.css" rel="stylesheet">

    <?php if(isset($styles)) { foreach($styles as $style): ?>
        <link href="<?=URL::base();?>css/admin/<?=$style;?>.css"
              rel="stylesheet" type="text/css">
    <?php endforeach; }?>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

<?php if(isset($navbar)) { echo $navbar;};?>
<?php if(isset($subnavbar)) { echo $subnavbar;};?>
<?php if(isset($content)) { echo $content;};?>
<?php if(isset($footer)) { echo $footer;};?>


<script src="<?=URL::base();?>js/admin/excanvas.min.js"></script>
<script src="<?=URL::base();?>js/admin/chart.min.js" type="text/javascript"></script>
<script src="<?=URL::base();?>js/admin/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="<?=URL::base();?>js/admin/full-calendar/fullcalendar.min.js"></script>

<?php if(isset($scripts)) { foreach($scripts as $script): ?>
    <script src="<?=URL::base();?>js/admin/<?=$script;?>.js" type="text/javascript"></script>
<?php endforeach; }?>

<script type="text/javascript">
    function HightlightMemu(path,cur_url)
    {
        //навешиваем события по наведению мыши
        jQuery(path).each(function()
        {
            jQuery(this).mouseover(function(){jQuery(this).parent('li').addClass('active');});
            jQuery(this).mouseout(function(){jQuery(this).parent('li').removeClass('active');})
        });
        //Ищем подходящий пункт меню для выделения
        var url = "";
        if(cur_url == "")
            url = window.location.toString();
        else
            url = cur_url;

        var max = 0;
        var link = null;

        jQuery(path).each(function()
        {
            //finding the longest href
            if(url.indexOf(this.href) >= 0 && this.href.length > max)
            {
                link = this;
                max = this.href.length;
            }
        });

        if(link)
            jQuery(link).parent('li').addClass('active');
    }

    function initMenu(){
        //left navigation current item highlight
        HightlightMemu(".mainnav > li > a","");
    };

    jQuery(document).ready(function()
    {
        initMenu();
    });
</script>

</body>
</html>