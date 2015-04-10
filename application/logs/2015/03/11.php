<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-11 11:52:42 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH/classes/Controller/Base.php [ 15 ] in file:line
2015-03-11 11:52:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-11 12:13:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Admin_Carrency' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2015-03-11 12:13:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-11 12:15:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: currency ~ APPPATH/views/front/header.php [ 54 ] in /opt/lampp/htdocs/motor.com/application/views/front/header.php:54
2015-03-11 12:15:02 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/views/front/header.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 54, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/motor.com/application/views/front/template.php(29): Kohana_View->__toString()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Main))
#11 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/motor.com/application/views/front/header.php:54
2015-03-11 12:45:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: currency ~ APPPATH/classes/Controller/Base.php [ 38 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Base.php:38
2015-03-11 12:45:04 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Base.php(38): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 38, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Main.php(6): Controller_Base->before()
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Main))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Base.php:38
2015-03-11 12:46:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/classes/Controller/Currency.php [ 18 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Currency.php:18
2015-03-11 12:46:21 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Currency.php(18): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 18, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Currency->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Currency))
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Currency.php:18
2015-03-11 14:46:57 --- EMERGENCY: View_Exception [ 0 ]: The requested view front/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-03-11 14:46:57 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(145): Kohana_View->set_filename('front/login')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('front/login', NULL)
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Login.php(11): Kohana_View::factory('front/login')
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Login))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145