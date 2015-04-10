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
                            <a href="<?=URL::set_url('admin/products/add');?>" class="btn btn-info"><i class="icon-plus"></i> Добавить</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="span12">
                    <div class="widget widget-table action-table">
                        <div class="widget-header"> <i class="icon-file"></i>
                            <h3>Товары</h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Артикул </th>
                                    <th> Название </th>
                                    <th> Описание </th>
                                    <th> Цена </th>
                                    <th> В наличии </th>
                                    <th> Распродажа </th>
                                    <th> Новинка </th>
                                    <th class="td-actions"> Действия </th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th> ID </th>
                                    <th> Артикул </th>
                                    <th> Название </th>
                                    <th> Описание </th>
                                    <th> Цена </th>
                                    <th> В наличии </th>
                                    <th> Распродажа </th>
                                    <th> Новинка </th>
                                    <th class="td-actions"> Действия </th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <? if(isset($main))
                                    foreach($main as $row):?>
                                        <tr >
                                            <td style="text-align: center;"> <?=$row['id_products']?> </td>
                                            <td style="text-align: center;"> <?=$row['sku']?> </td>
                                            <td style="text-align: center;"> <?=$row['name']?> </td>
                                            <td style="text-align: center;"> <?=$row['short_description']?> </td>
                                            <td style="text-align: center;"> <?=$row['price']?> </td>
                                            <td style="text-align: center;"> <? if($row['in_stock'] == 1) echo 'Да'; else echo 'Нет';?> </td>
                                            <td style="text-align: center;"> <? if($row['sale'] == 1) echo 'Да'; else echo 'Нет';?> </td>
                                            <td style="text-align: center;"> <? if($row['new'] == 1) echo 'Да'; else echo 'Нет';?> </td>
                                            <td class="td-actions" style="text-align: center;">
                                                <a href="<?=URL::set_url('admin/products/edit/'.$row['id_products']);?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a>
                                                <a href="<?=URL::set_url('admin/products/delete/'.$row['id_products']);?>" class="btn btn-danger btn-small" id="delete"><i class="btn-icon-only icon-remove"> </i></a>
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