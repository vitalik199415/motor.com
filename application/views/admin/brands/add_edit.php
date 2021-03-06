<div class="main">
    <div class="main-inner">
        <div class="container">
            <form action="<?=URL::set_url('admin/brands/save/').@$id;?>" method="post" id="add_edit_form" class="form-horizontal" enctype="multipart/form-data">
            <div class="row action">
                <div class="span12">
                    <div class="widget action-btn">
                        <!--<div class="widget-header"><i class="icon-legal"></i>
                            <h3>Действия </h3>
                        </div>-->
                        <div class="widget-content form-actions" align="rig" >
                            <a href="<?=URL::set_url('admin/brands');?>" class="btn btn-info"><i class="icon-arrow-left"></i> Назад</a>
                            <button type="submit" href="<?=URL::set_url('admin/brands/save');?>" class="btn btn-success"><i class="icon-save"></i> Сохранить</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-header">
                            <h3>Основные данные:</h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="url">URL: </label>
                                        <div class="controls">
                                            <input name="main[url]" type="text" class="span10" id="url" value="<?=@$main['url'];?>" required data-validation-required-message="Поле обязательно для заполнения.">
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                    <div class="control-group">
                                        <label class="control-label" for="img">Изображение: </label>
                                        <div class="controls">
                                            <div id="files"><input name="image" type="file" class="span10" id="img"></div>
                                            <img src="<?=@$main['image'];?>" width="400px">
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                    <div class="control-group">
                                        <label class="control-label" for="active">Активность: </label>
                                        <div class="controls">
                                            <?=Form::select('main[active]', array('Нет', 'Да'), @$main['active'], array('class' => 'span10', 'id' => 'active'));?>
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                </fieldset>
                        </div>
                        <!-- /widget-content -->
                    </div>
                    <!-- /widget -->
                </div>
            </div>

            <div class="row">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-header">
                            <h3>Описание:</h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <div class="tabbable">
                                <ul class="nav nav-tabs">
                                    <?foreach($langs as $key => $val):?>
                                        <li><a href="#<?=$key;?>" data-toggle="tab" class="tabs <?=$key;?>"><?=$val;?></a></li>
                                    <?endforeach;?>
                                </ul>

                                <br>
                                <?foreach($langs as $key => $val):?>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="<?=$key;?>">
                                            <fieldset>
                                                <div class="control-group">
                                                    <label class="control-label" for="name">Название: </label>
                                                    <div class="controls">
                                                        <input name="desc[<?=$key;?>][name]" type="text" class="span10" id="name" value="<?=@$desc[$key]['name'];?>">
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <div class="control-group">
                                                    <label class="control-label" for="description">Описание: </label>
                                                    <div class="controls">
                                                        <input name="desc[<?=$key;?>][description]" type="text" class="span10" id="description" value="<?=@$desc[$key]['description'];?>">
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <div class="control-group">
                                                    <label class="control-label" for="seo_title">SEO-title: </label>
                                                    <div class="controls">
                                                        <textarea name="desc[<?=$key;?>][seo_title]" type="text" class="span10" id="seo_title" value=""><?=@$desc[$key]['seo_title'];?></textarea>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <div class="control-group">
                                                    <label class="control-label" for="seo_description">SEO-description: </label>
                                                    <div class="controls">
                                                        <textarea name="desc[<?=$key;?>][seo_description]" type="text" class="span10" id="seo_description" value=""><?=@$desc[$key]['seo_description'];?></textarea>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <div class="control-group">
                                                    <label class="control-label" for="seo_keywords">SEO-keywords: </label>
                                                    <div class="controls">
                                                        <textarea name="desc[<?=$key;?>][seo_keywords]" type="text" class="span10" id="seo_keywords" value=""><?=@$desc[$key]['seo_keywords'];?></textarea>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                            </fieldset>
                                        </div>
                                    </div>
                                <?endforeach;?>
                            </div>
                        </div>
                        <!-- /widget-content -->
                    </div>
                    <!-- /widget -->
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        $('a[href=#ru]').parent().addClass('active');
        $('#ru').addClass('active');

        $(document).on('click', 'a.del_file', function() {
            $(this).prev('#img').remove();
            $(this).remove();
        });

        $('.tabs').click(function(){
            $('div.tab-pane').removeClass('active');
        });
    });
</script>