<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-06 16:06:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::hashD() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 87 ] in file:line
2015-04-06 16:06:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-06 17:27:34 --- EMERGENCY: Kohana_Exception [ 0 ]: The krumo552297d61b933 property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php:603
2015-04-06 17:27:34 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('krumo552297d61b...')
#1 /opt/lampp/htdocs/motor.com/application/Krumo/class.krumo.php(951): Kohana_ORM->__get('krumo552297d61b...')
#2 /opt/lampp/htdocs/motor.com/application/Krumo/class.krumo.php(1104): krumo::_vars(Object(Model_User))
#3 /opt/lampp/htdocs/motor.com/application/Krumo/class.krumo.php(789): krumo::_object(Object(Model_User), '...')
#4 /opt/lampp/htdocs/motor.com/application/Krumo/class.krumo.php(584): krumo::_dump(Object(Model_User))
#5 [internal function]: krumo::dump(Object(Model_User))
#6 /opt/lampp/htdocs/motor.com/application/Krumo/class.krumo.php(1299): call_user_func_array(Array, Array)
#7 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/Auth/ORM.php(289): krumo(Object(Model_User))
#8 /opt/lampp/htdocs/motor.com/application/classes/Controller/Main.php(14): Kohana_Auth_ORM->check_password('azaza')
#9 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Main))
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php:603
2015-04-06 18:34:10 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-04-06 18:34:10 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(145): Kohana_View->set_filename('login')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Login.php(43): Kohana_View::factory('login')
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Login))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-04-06 18:35:14 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-04-06 18:35:14 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(145): Kohana_View->set_filename('login')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Login.php(43): Kohana_View::factory('login')
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Login))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-04-06 18:37:02 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-04-06 18:37:02 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(145): Kohana_View->set_filename('login')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Login.php(43): Kohana_View::factory('login')
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Login))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-04-06 19:02:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/Login.php [ 47 ] in file:line
2015-04-06 19:02:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-06 22:50:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-04-06 22:50:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-06 22:51:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/Controller/Login.php [ 35 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Login.php:35
2015-04-06 22:51:18 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Login.php(35): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 35, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Login))
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Login.php:35
2015-04-06 23:12:08 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'code' ~ APPPATH/classes/Controller/Base.php [ 47 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Base.php:47
2015-04-06 23:12:08 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Base.php(47): Kohana_Core::error_handler(2, 'Illegal string ...', '/opt/lampp/htdo...', 47, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Detail.php(10): Controller_Base->before()
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(69): Controller_Detail->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Detail))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Base.php:47
2015-04-06 23:13:25 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'code' ~ APPPATH/classes/Controller/Detail.php [ 17 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Detail.php:17
2015-04-06 23:13:25 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Detail.php(17): Kohana_Core::error_handler(2, 'Illegal string ...', '/opt/lampp/htdo...', 17, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Detail->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Detail))
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Detail.php:17
2015-04-06 23:31:16 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'code' ~ APPPATH/classes/Controller/Products.php [ 21 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Products.php:21
2015-04-06 23:31:16 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Products.php(21): Kohana_Core::error_handler(2, 'Illegal string ...', '/opt/lampp/htdo...', 21, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Products->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Products))
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Products.php:21