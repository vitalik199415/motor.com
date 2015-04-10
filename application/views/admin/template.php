<!DOCTYPE html>
<html lang="ru" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head>
    <meta charset="utf-8">
    <title><?php if(isset($title)) { echo $title;};?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script src="<?=URL::base();?>js/admin/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="<?=URL::base();?>js/ckeditor/ckeditor.js" type="text/javascript"></script>

    <link rel="shortcut icon" href="<?=URL::base();?>img/admin/favicon.ico" type="image/x-icon">
    <link href="<?=URL::base();?>css/admin/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL::base();?>css/admin/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?=URL::base();?>css/admin/font-awesome.css" rel="stylesheet">
    <link href="<?=URL::base();?>css/admin/dataTables.bootstrap.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

    <?php if(isset($_SESSION['admin_styles'])) { foreach($_SESSION['admin_styles'] as $style): ?>
        <link href="<?=URL::base();?>css/<?=$style;?>.css" rel="stylesheet" type="text/css">
    <?php endforeach; }?>

    <?php if(isset($_SESSION['admin_scripts'])) { foreach($_SESSION['admin_scripts'] as $script): ?>
        <script src="<?=URL::base();?>js/<?=$script;?>.js" type="text/javascript"></script>
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
<script src="<?=URL::base();?>js/admin/jquery.validate.js"></script>
<script src="<?=URL::base();?>js/admin/jqBootstrapValidation.js"></script>
<script src="<?=URL::base();?>js/admin/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="<?=URL::base();?>js/admin/jquery.dataTables.min.ru.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="<?=URL::base();?>js/full-calendar/fullcalendar.min.js"></script>

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
        $(function() {
            var fixblock_height = $('div.action').height(); // определяем высоты фиксированного блока
            var fixblock_pos = $('div.action').position().top; ; // определяем его первоначальное положение
            $(window).scroll(function(){

                if ($(window).scrollTop() > fixblock_pos){ // Если страницу прокрутили дальше, чем находится наш блок
                    $('div.action').css({'position': 'fixed', 'top':'0px', 'z-index':'100', 'opacity':'0.7'}); // То мы этот блок фиксируем и отображаем сверху.
                    //$('div.main').css('margin-top', fixblock_height+'px'); // А чтобы это было плавно, добавляем отсуп снизу для верхнего блока (как будто этот блок там все еще есть)
                }else{  // Если же позиция скрола меньше (выше), чем наш блок
                    $('div.action').css({'position': 'static', 'opacity':'1'}); // то возвращаем все назад
                    //$('div.main').css('margin-top', '0px'); // И убираем отступ
                }
            })
        });

        $('#example').dataTable();

        $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
        initMenu();

        $('.mainnav > li > a').mouseout(function(){
            initMenu();
        });
    });
</script>

</body>
</html>