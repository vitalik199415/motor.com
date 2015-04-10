<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <? if(isset($success_mess)): ?>
                        <div class="alert alert-success">
                            <i class="icon-check"></i>  <?=$success_mess;?>
                        </div>
                    <? endif; ?>
                    <? if(isset($err_mess)): ?>
                        <div class="alert alert-error">
                            <i class="icon-check"></i>  <?=$err_mess;?>
                        </div>
                    <? endif; ?>
                </div>
            </div>
            <form action="<?=URL::set_url('admin/products/save/').@$id;?>" method="post" id="add_edit_form" class="form-horizontal" enctype="multipart/form-data">
            <div class="row action">
                <div class="span12">
                    <div class="widget action-btn">
                        <!--<div class="widget-header"><i class="icon-legal"></i>
                            <h3>Действия </h3>
                        </div>-->
                        <div class="widget-content form-actions" align="rig" >
                            <a href="<?=URL::set_url('admin/products');?>" class="btn btn-info"><i class="icon-arrow-left"></i> Назад</a>
                            <button type="submit" href="<?=URL::set_url('admin/products/save');?>" class="btn btn-success"><i class="icon-save"></i> Сохранить</button>
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
                                        <label class="control-label" for="url">Артикул: </label>
                                        <div class="controls">
                                            <input name="main[sku]" type="text" class="span10" id="url" value="<?=@$main['sku'];?>" required data-validation-required-message="Поле обязательно для заполнения.">
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                    <div class="control-group">
                                        <label class="control-label" for="brand">Марка автомобиля: </label>
                                        <div class="controls">
                                            <?=Form::select('main[id_car_brands]', @$brands, @$main['id_car_brands'], array('class' => 'span10', 'id' => 'brand'));?>
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                    <div class="control-group">
                                        <label class="control-label" for="rate">Цена в $USD: </label>
                                        <div class="controls">
                                            <input name="main[price]" type="text" class="span10" id="rate" value="<?=@$main['price'];?>" pattern="\d+\.\d{2}" data-validation-pattern-message="Поле должно быть в формате '0.00'." data-validation-required-message="Поле обязательно для заполнения.">
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                    <div class="control-group">
                                        <label class="control-label" for="in_stock">В наявности: </label>
                                        <div class="controls">
                                            <?=Form::select('main[in_stock]', array('Нет', 'Да'), @$main['in_stock'], array('class' => 'span10', 'id' => 'in_stock'));?>
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                    <div class="control-group">
                                        <label class="control-label" for="new">Новинка: </label>
                                        <div class="controls">
                                            <?=Form::select('main[new]', array('Нет', 'Да'), @$main['new'], array('class' => 'span10', 'id' => 'new'));?>
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                    <div class="control-group">
                                        <label class="control-label" for="sale">В распродаже: </label>
                                        <div class="controls">
                                            <?=Form::select('main[sale]', array('Нет', 'Да'), @$main['sale'], array('class' => 'span10', 'id' => 'sale'));?>
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
                            <h3>Описание товара:</h3>
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
                                                    <label class="control-label" for="name">Название товара: </label>
                                                    <div class="controls">
                                                        <input name="desc[<?=$key;?>][name]" type="text" class="span10" id="name" value="<?=@$desc[$key]['name'];?>">
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <div class="control-group">
                                                    <label class="control-label" for="short_description">Краткое описание: </label>
                                                    <div class="controls">
                                                        <textarea name="desc[<?=$key;?>][short_description]" type="text" class="span10" id="short_description"><?=@$desc[$key]['short_description'];?></textarea>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <div class="control-group">
                                                    <label class="control-label" for="full_description">Полное описание: </label>
                                                    <div class="controls">
                                                        <div class="span10" style="padding: 0; margin: 0;"><textarea name="desc[<?=$key;?>][full_description]" type="text" id="cktext[<?=$key?>]"><?=@$desc[$key]['full_description'];?></textarea></div>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <div class="control-group">
                                                    <label class="control-label" for="seo_title">SEO-title: </label>
                                                    <div class="controls">
                                                        <textarea name="desc[<?=$key;?>][seo_title]" type="text" class="span10" id="seo_title"><?=@$desc[$key]['seo_title'];?></textarea>
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
                                        <script>
                                            $(document).ready(function(){
                                                CKEDITOR.replace('cktext[<?=$key?>]', {
                                                    "filebrowserImageUploadUrl": "/js/ckeditor/plugins/imgupload/imgupload.php"
                                                });
                                            });
                                        </script>
                                    </div>
                                <?endforeach;?>
                            </div>
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
                            <h3>Категория товара:</h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <? if(isset($categories)):
                                foreach($categories as $category):?>
                                    <label class="span3">
                                        <input type="checkbox" name="categories[]" value="<?=$category['id_categories']?>"

                                            <?if(isset($cat)): foreach($cat as $c):
                                                echo $category['id_categories']==$c['id_categories'] ? 'checked' : '';
                                            endforeach; endif;?>>
                                        <?=$category['name'];?>
                                    </label>
                                <? endforeach;
                            endif; ?>
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
                            <h3>Изображения товара:</h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <div class="row" style="margin-left: 0">
                                <? if(isset($images) AND count($images)>0):
                                    foreach($images as $image):?>
                                            <div class="span2 thumbnail" style="height: 100px; position: relative; <? if($image['preview'] == 1):?>border-color: green;<? endif; ?>">
                                                <div><a rel="simplebox_group" href="<?=$image['image']?>" class="cell"><img src="<?=$image['image']?>" style=""/></a></div>
                                                <a href="<?=URL::set_url('admin/products/del_img/'.$image['id_products_images'].'?id_p='.$id)?>" class="delete" title="Удалить изображение" style="position: absolute; bottom: 5px; right:5px;">
                                                    <span class="icon-remove-circle" style="color: red; font-size: 16px;"></span>
                                                </a>
                                                <a href="<?=URL::set_url('admin/products/set_preview/'.$image['id_products_images'].'?id_p='.$id)?>" title="Сделать главным" style="position: absolute; bottom: 5px; right:23px;">
                                                    <span class="icon-check " style="color: green; font-size: 16px;"></span>
                                                </a>
                                            </div>
                                    <? endforeach;
                                else: echo '<p>Для даного продукта не добавлено изображений.</p>'; endif; ?>
                            </div>

                            <div id="files"><br/>
                                <input name="image[]" type="file" class="span10" id="img"> <a class="icon-plus" id="add_file" title="Добавить изображение" style="cursor: pointer;"></a><br/>
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

        $('div.alert').delay(5000).slideUp();

        $('a.delete').click(function() {
            if(!confirm('Вы действительно хотите удалить запись?')) {
                return false;
            }
        });

        $('a[href=#ru]').parent().addClass('active');
        $('#ru').addClass('active');

        $('a#add_file').click(function() {
            $('div#files').append('<input name="image[]" type="file" class="span10" id="img"><a class="icon-minus del_file" title="Удалить изображение"  style="cursor: pointer;"></a><br/>');
        });

        $(document).on('click', 'a.del_file', function() {
            $(this).prev('#img').remove();
            $(this).next('br').remove();
            $(this).remove();
        });

        $('.tabs').click(function(){
            $('div.tab-pane').removeClass('active');
        });

        (function(){
            var boxes=[],els,i,l;
            if(document.querySelectorAll){
                els=document.querySelectorAll('a[rel=simplebox]');
                Box.getStyles('simplebox_css','/css/simplebox.css');
                Box.getScripts('simplebox_js','/js/simplebox.js',function(){
                    simplebox.init();
                    for(i=0,l=els.length;i<l;++i)
                        simplebox.start(els[i]);
                    simplebox.start('a[rel=simplebox_group]');
                });
            }
        })();

    });
</script>