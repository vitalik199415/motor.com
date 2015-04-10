<div class="main">
    <div class="main-inner">
        <div class="container">
            <form action="<?=URL::set_url('admin/langs/save/').@$id;?>" method="post" id="add_edit_form" class="form-horizontal">
            <div class="row action">
                <div class="span12">
                    <div class="widget action-btn">
                        <!--<div class="widget-header"><i class="icon-legal"></i>
                            <h3>Действия </h3>
                        </div>-->
                        <div class="widget-content form-actions" align="rig" >
                            <a href="<?=URL::set_url('admin/langs');?>" class="btn btn-info"><i class="icon-arrow-left"></i> Назад</a>
                            <button type="submit" href="<?=URL::set_url('admin/langs/save');?>" class="btn btn-success"><i class="icon-save"></i> Сохранить</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-header">
                            <h3><? if(!isset($main)) echo 'Добавление языка'; else echo 'Редактирование языка';?></h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <div class="tab-pane" id="formcontrols">
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="code">Код языка: </label>
                                        <div class="controls">
                                            <input name="main[code]" type="text" class="span6" id="code" value="<?=@$main['code'];?>">
                                            <!--<p class="help-block">Your username is for logging in and cannot be changed.</p>-->
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                    <div class="control-group">
                                        <label class="control-label" for="name">Название языка: </label>
                                        <div class="controls">
                                            <input name="main[name]" type="text" class="span6" id="name" value="<?=@$main['name'];?>">
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                    <div class="control-group">
                                        <label class="control-label" for="short_name">Краткое название: </label>
                                        <div class="controls">
                                            <input name="main[short_name]" type="text" class="span6" id="short_name" value="<?=@$main['short_name'];?>">
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                    <div class="control-group">
                                        <label class="control-label" for="language">Название на английском: </label>
                                        <div class="controls">
                                            <input name="main[language]" type="text" class="span6" id="language" value="<?=@$main['language'];?>">
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                    <div class="control-group">
                                        <label class="control-label" for="active">Активность: </label>
                                        <div class="controls">
                                            <?=Form::select('main[active]', array('Нет', 'Да'), @$main['active'], array('class' => 'span6', 'id' => 'active'));?>
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