<div class="main">
    <div class="main-inner">
        <div class="container">
            <form action="<?=URL::set_url('admin/pages/save/').@$id;?>" method="post" id="add_edit_form" class="form-horizontal">
                <div class="row action">
                    <div class="span12">
                        <div class="widget action-btn">
                            <!--<div class="widget-header"><i class="icon-legal"></i>
                                <h3>Действия </h3>
                            </div>-->
                            <div class="widget-content form-actions" align="rig" >
                                <a href="<?=URL::set_url('admin/pages');?>" class="btn btn-info"><i class="icon-arrow-left"></i> Назад</a>
                                <button type="submit" href="<?=URL::set_url('admin/pages/save');?>" class="btn btn-success"><i class="icon-save"></i> Сохранить</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-header">
                                <h3><? if(!isset($main)) echo 'Добавление страницы'; else echo 'Редактирование страницы';?></h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <div class="tab-pane" id="formcontrols">
                                    <fieldset>
                                        <div class="control-group">
                                            <label class="control-label" for="alias">Алиас страницы: </label>
                                            <div class="controls">
                                                <input name="main[alias]" type="text" class="span10" id="alias" value="<?=@$main['alias'];?>"  data-validation-required-message="Поле обязательно для заполнения.">
                                                <p class="help-block"></p>
                                                <!--<p class="help-block">Your username is for logging in and cannot be changed.</p>-->
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="control-group">
                                            <label class="control-label" for="title">Название страницы: </label>
                                            <div class="controls">
                                                <input name="main[title]" type="text" class="span10" id="title" value="<?=@$main['title'];?>"  data-validation-required-message="Поле обязательно для заполнения.">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="control-group">
                                            <label class="control-label" for="text">Текст страницы: </label>
                                            <div class="controls">
                                            <div class="span10" style="padding: 0; margin: 0;"><textarea name="main[text]" class="span10" id="text"><?=@$main['text'];?></textarea></div>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="control-group">
                                            <label class="control-label" for="seo_title">SEO-title: </label>
                                            <div class="controls">
                                                <textarea name="main[seo_title]" type="text" class="span10" id="seo_title" value="<?=@$main['seo_title'];?>"></textarea>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="control-group">
                                            <label class="control-label" for="seo_description">SEO-description: </label>
                                            <div class="controls">
                                                <textarea name="main[seo_description]" type="text" class="span10" id="seo_description" value="<?=@$main['seo_description'];?>"></textarea>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="control-group">
                                            <label class="control-label" for="seo_keywords">SEO-keywords: </label>
                                            <div class="controls">
                                                <textarea name="main[seo_keywords]" type="text" class="span10" id="seo_keywords" value="<?=@$main['seo_keywords'];?>"></textarea>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="control-group">
                                            <label class="control-label" for="lang">Язык: </label>
                                            <div class="controls">
                                                <?=Form::select('main[lang]', @$langs, @$main['lang'], array('class' => 'span10', 'id' => 'lang'));?>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                    </fieldset>
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
    $(document).ready(function(){
        CKEDITOR.replace('text', {
            "filebrowserImageUploadUrl": "/js/ckeditor/plugins/imgupload/imgupload.php"
        });
    });
</script>