<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-18 16:58:00 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Model_Products::get_product_detail(), called in /opt/lampp/htdocs/motor.com/application/classes/Controller/Detail.php on line 18 and defined ~ APPPATH/classes/Model/Products.php [ 85 ] in /opt/lampp/htdocs/motor.com/application/classes/Model/Products.php:85
2015-03-18 16:58:00 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Model/Products.php(85): Kohana_Core::error_handler(2, 'Missing argumen...', '/opt/lampp/htdo...', 85, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Detail.php(18): Model_Products->get_product_detail('7')
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Detail->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Detail))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Model/Products.php:85
2015-03-18 16:58:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Model/Products.php [ 98 ] in /opt/lampp/htdocs/motor.com/application/classes/Model/Products.php:98
2015-03-18 16:58:27 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Model/Products.php(98): Kohana_Core::error_handler(8, 'Undefined offse...', '/opt/lampp/htdo...', 98, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Detail.php(18): Model_Products->get_product_detail('7', 'ua')
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Detail->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Detail))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Model/Products.php:98
2015-03-18 17:01:09 --- EMERGENCY: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH/database/classes/Kohana/Database/Result.php [ 258 ] in /opt/lampp/htdocs/motor.com/application/classes/Model/Products.php:95
2015-03-18 17:01:09 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Model/Products.php(95): Kohana_Database_Result->offsetSet('images', Object(Database_MySQLi_Result))
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Detail.php(18): Model_Products->get_product_detail('7', 'ua')
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Detail->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Detail))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Model/Products.php:95
2015-03-18 17:01:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: description ~ APPPATH/views/front/product_detail.php [ 75 ] in /opt/lampp/htdocs/motor.com/application/views/front/product_detail.php:75
2015-03-18 17:01:51 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/views/front/product_detail.php(75): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 75, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/motor.com/application/views/front/template.php(39): Kohana_View->__toString()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Detail))
#11 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/motor.com/application/views/front/product_detail.php:75
2015-03-18 17:39:18 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'preview' ~ APPPATH/views/front/product_detail.php [ 6 ] in /opt/lampp/htdocs/motor.com/application/views/front/product_detail.php:6
2015-03-18 17:39:18 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/views/front/product_detail.php(6): Kohana_Core::error_handler(2, 'Illegal string ...', '/opt/lampp/htdo...', 6, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/motor.com/application/views/front/template.php(39): Kohana_View->__toString()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Detail))
#11 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/motor.com/application/views/front/product_detail.php:6