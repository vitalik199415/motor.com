<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-05 10:51:31 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/products/main could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-03-05 10:51:31 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(145): Kohana_View->set_filename('admin/products/...')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/products/...', Array)
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Products.php(19): Kohana_View::factory('admin/products/...', Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Products->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-03-05 11:03:42 --- EMERGENCY: ErrorException [ 2 ]: join(): Invalid arguments passed ~ APPPATH/Krumo/class.krumo.php [ 689 ] in file:line
2015-03-05 11:03:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'join(): Invalid...', '/opt/lampp/htdo...', 689, Array)
#1 /opt/lampp/htdocs/motor.com/application/Krumo/class.krumo.php(689): join('', false)
#2 /opt/lampp/htdocs/motor.com/application/Krumo/class.krumo.php(568): krumo::_css()
#3 [internal function]: krumo::dump(Array)
#4 /opt/lampp/htdocs/motor.com/application/Krumo/class.krumo.php(1299): call_user_func_array(Array, Array)
#5 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Products.php(45): krumo(Array)
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Products->action_save()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#9 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2015-03-05 11:46:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Model/Admin/Products.php [ 126 ] in file:line
2015-03-05 11:46:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 12:39:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/admin/products/add_edit.php [ 144 ] in /opt/lampp/htdocs/motor.com/application/views/admin/products/add_edit.php:144
2015-03-05 12:39:00 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/views/admin/products/add_edit.php(144): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 144, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/motor.com/application/views/admin/template.php(32): Kohana_View->__toString()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#11 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/motor.com/application/views/admin/products/add_edit.php:144
2015-03-05 12:49:15 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'image' in 'field list' [ INSERT INTO `products_description` (`id_products`, `image`) VALUES (1, '/img/products/img20150305124915btn.png') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-05 12:49:15 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `pr...', false, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Products.php(151): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Products.php(119): Model_Admin_Products->save_img(Array, 1)
#3 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Products.php(58): Model_Admin_Products->save(Array)
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Products->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-05 12:50:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/products/main could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-03-05 12:50:26 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(145): Kohana_View->set_filename('admin/products/...')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/products/...', Array)
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Products.php(19): Kohana_View::factory('admin/products/...', Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Products->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-03-05 16:24:46 --- EMERGENCY: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH/classes/Template.php [ 7 ] in file:line
2015-03-05 16:24:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', '/opt/lampp/htdo...', 7, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Template.php(7): array_push(NULL, 'style')
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php(17): Template::add_css('style')
#3 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Products.php(6): Controller_Admin_Base->before()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(69): Controller_Admin_Products->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2015-03-05 16:25:35 --- EMERGENCY: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH/classes/Template.php [ 8 ] in file:line
2015-03-05 16:25:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Template.php(8): array_push(NULL, 'style')
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php(17): Template::add_css('style')
#3 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Products.php(6): Controller_Admin_Base->before()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(69): Controller_Admin_Products->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2015-03-05 16:32:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/Admin/Products.php [ 20 ] in file:line
2015-03-05 16:32:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 16:56:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/products/main could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-03-05 16:56:59 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(145): Kohana_View->set_filename('admin/products/...')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/products/...', Array)
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Products.php(22): Kohana_View::factory('admin/products/...', Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Products->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-03-05 18:49:54 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/products/main could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-03-05 18:49:54 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(145): Kohana_View->set_filename('admin/products/...')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/products/...', Array)
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Products.php(23): Kohana_View::factory('admin/products/...', Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Products->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-03-05 18:54:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/products/main could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-03-05 18:54:51 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(145): Kohana_View->set_filename('admin/products/...')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/products/...', Array)
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Products.php(23): Kohana_View::factory('admin/products/...', Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Products->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145