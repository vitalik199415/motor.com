<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="row action">
                <div class="span12">
                    <div class="widget action-btn">
                        <div class="widget-content form-actions" align="rig" >
                            <a href="<?=URL::set_url('admin/orders');?>" class="btn btn-info"><i class="icon-arrow-left"></i> Назад</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-header">
                            <h3>Основные данные</h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <div class="tab-pane" id="formcontrols">
                                <div class="row">
                                    <div class="span4" align="right">Номер заказа:</div>
                                    <div class="span8"><?=@$main['id_orders']?></div>
                                </div>
                                <div class="row">
                                    <div class="span4" align="right">Дата заказа:</div>
                                    <div class="span8"><?=@$main['create_date']?></div>
                                </div>
                                <div class="row">
                                    <div class="span4" align="right">Статус заказа:</div>
                                    <div class="span8"><?=@$main['status']?></div>
                                </div>
                                <div class="row">
                                    <div class="span4" align="right">Метод оплаты:</div>
                                    <div class="span8"><?=@$payment['name']?></div>
                                </div>
                                <div class="row">
                                    <div class="span4" align="right">Метод доставки:</div>
                                    <div class="span8"><?=@$shipping['name']?></div>
                                </div>
                                <div class="row">
                                    <div class="span4" align="right">Общая сумма заказа(<?=@$main['currency_name']?>):</div>
                                    <div class="span8"><?=@$main['total']*@$main['currency_rate']?></div>
                                </div>
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
                            <h3>Адресные данные</h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <div class="tab-pane" id="formcontrols">
                                <div class="row">
                                    <div class="span4" align="right">Имя, фамилия получателя:</div>
                                    <div class="span8"><?=@$address['name']?></div>
                                </div>
                                <div class="row">
                                    <div class="span4" align="right">Город получателя:</div>
                                    <div class="span8"><?=@$address['city']?></div>
                                </div>
                                <div class="row">
                                    <div class="span4" align="right">Адресс доставки:</div>
                                    <div class="span8"><?=@$address['address']?></div>
                                </div>
                                <div class="row">
                                    <div class="span4" align="right">Контактный телефон:</div>
                                    <div class="span8"><?=@$address['telephone']?></div>
                                </div>
                                <div class="row">
                                    <div class="span4" align="right">Электронная почта:</div>
                                    <div class="span8"><?=@$address['email']?></div>
                                </div>
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
                            <h3>Товары в заказе</h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th> Артикул: </th>
                                    <th> Название: </th>
                                    <th> Количество: </th>
                                    <th> Цена: </th>
                                    <th> Сумма: </th>
                                    <th class="td-actions"> </th>
                                </tr>
                                </thead>
                                <tbody>
                                <? if(isset($products))
                                    foreach($products as $row):?>
                                        <tr >
                                            <td style="text-align: center;"> <?=$row['sku']?> </td>
                                            <td style="text-align: center;"> <?=$row['name']?> </td>
                                            <td style="text-align: center;"> <?=$row['qty']?> </td>
                                            <td style="text-align: center;"> <?=$row['price']?> </td>
                                            <td style="text-align: center;"> <?=$row['total']*$row['currency_rate'].' '.$row['currency_name'] ?> </td>
                                            <td style="text-align: center;"> <?=$row['create_date'] ?> </td>
                                                <a href="<?=URL::set_url('detail'.$row['id_products']);?>" title="Детальное описание на сайте" class="btn btn-small btn-primary"><i class="btn-icon-only icon-list-alt"> </i></a>
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