<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-10 12:32:34 --- EMERGENCY: ErrorException [ 2 ]: unlink(/img/products/img20150306123543btn-hover.png): Нет такого файла или каталога ~ APPPATH/classes/Model/Admin/Products.php [ 226 ] in file:line
2015-03-10 12:32:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(/img/pro...', '/opt/lampp/htdo...', 226, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Products.php(226): unlink('/img/products/i...')
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Products.php(125): Model_Admin_Products->del_img('2')
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Products->action_del_img()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-03-10 16:39:42 --- EMERGENCY: View_Exception [ 0 ]: The requested view left_sidebar could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-03-10 16:39:42 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(145): Kohana_View->set_filename('left_sidebar')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('left_sidebar', NULL)
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Base.php(31): Kohana_View::factory('left_sidebar')
#3 /opt/lampp/htdocs/motor.com/application/classes/Controller/Main.php(6): Controller_Base->before()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Main))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145