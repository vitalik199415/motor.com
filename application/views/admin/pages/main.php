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
                            <i class="icon-warning-sign"></i>  <?=$err_mess;?>
                        </div>
                    <? endif; ?>
                </div>
                <div class="span12">
                    <div class="widget action-btn">
                        <!--<div class="widget-header"><i class="icon-legal"></i>
                            <h3>Действия </h3>
                        </div>-->
                        <div class="widget-content" align="rig" >
                            <a href="<?=URL::set_url('admin/pages/add');?>" class="btn btn-info"><i class="icon-plus"></i> Добавить</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="span12">
                    <div class="widget widget-table action-table">
                        <div class="widget-header"> <i class="icon-file"></i>
                            <h3>Страницы сайта</h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <table id="example" class="table table-striped table-bordered" >
                                <thead>
                                <tr>
                                    <th> Алиас: </th>
                                    <th> Заголовок: </th>
                                    <th> Текст: </th>
                                    <th> Язык: </th>
                                    <th class="td-actions"> Действия </th>
                                </tr>
                                </thead>
                                <tbody>
                                <? if(isset($main))
                                    foreach($main as $row):?>
                                        <tr >
                                            <td style="text-align: center;"> <?=$row['alias']?> </td>
                                            <td style="text-align: center;"> <?=$row['title']?> </td>
                                            <td style="text-align: center;"> <?=mb_substr($row['text'], 0, 50);?> </td>
                                            <td style="text-align: center;"> <?=$row['lang']?> </td>
                                            <td class="td-actions" style="text-align: center;">
                                                <a href="<?=URL::set_url('admin/pages/edit/'.$row['id_pages']);?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a>
                                                <a href="<?=URL::set_url('admin/pages/delete/'.$row['id_pages']);?>" class="btn btn-danger btn-small" id="delete"><i class="btn-icon-only icon-remove"> </i></a>
                                            </td>
                                        </tr>
                                    <? endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /widget-content -->
                    </div>
                    <!-- /widget -->
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('div.alert').delay(5000).slideUp();

        $('a#delete').click(function() {
            if(!confirm('Вы действительно хотите удалить запись?')) {
                return false;
            }
        });
    });
</script>