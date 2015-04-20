<div class="col-sm-9 padding-right">
    <h2 class="title text-center"><?=@$title?></h2>
    <div class="row">
        <? if(isset($text)) { echo $text; } else { echo 'Page not found'; }?>
    </div>
</div>