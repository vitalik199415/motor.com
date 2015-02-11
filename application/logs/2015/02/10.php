<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-10 16:12:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-02-10 16:12:51 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php(8): Kohana_Controller_Template->before()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(69): Controller_Admin_Base->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-02-10 16:13:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: ErrorArray ~ APPPATH/classes/Controller/Admin/Main.php [ 8 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Main.php:8
2015-02-10 16:13:55 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Main.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Main.php:8
2015-02-10 16:15:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::navbar() ~ APPPATH/classes/Controller/Admin/Main.php [ 11 ] in file:line
2015-02-10 16:15:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 16:19:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::navbar() ~ APPPATH/classes/Controller/Admin/Main.php [ 11 ] in file:line
2015-02-10 16:19:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 16:20:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::content() ~ APPPATH/classes/Controller/Admin/Main.php [ 12 ] in file:line
2015-02-10 16:20:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 16:21:45 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/admin/template.php [ 14 ] in /opt/lampp/htdocs/motor.com/application/views/admin/template.php:14
2015-02-10 16:21:45 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/views/admin/template.php(14): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 14, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/motor.com/application/views/admin/template.php:14
2015-02-10 16:24:12 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/admin/template.php [ 51 ] in /opt/lampp/htdocs/motor.com/application/views/admin/template.php:51
2015-02-10 16:24:12 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/views/admin/template.php(51): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 51, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/motor.com/application/views/admin/template.php:51
2015-02-10 16:24:52 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/admin/template.php [ 51 ] in /opt/lampp/htdocs/motor.com/application/views/admin/template.php:51
2015-02-10 16:24:52 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/views/admin/template.php(51): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 51, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/motor.com/application/views/admin/template.php:51
2015-02-10 16:25:31 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/admin/template.php [ 51 ] in /opt/lampp/htdocs/motor.com/application/views/admin/template.php:51
2015-02-10 16:25:31 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/views/admin/template.php(51): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 51, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/motor.com/application/views/admin/template.php:51
2015-02-10 16:30:10 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH/classes/Kohana/View.php [ 179 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php:12
2015-02-10 16:30:10 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php(12): Kohana_View->__get('styles')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(69): Controller_Admin_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php:12
2015-02-10 16:31:03 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH/classes/Kohana/View.php [ 179 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php:12
2015-02-10 16:31:03 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php(12): Kohana_View->__get('styles')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(69): Controller_Admin_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php:12
2015-02-10 16:31:05 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH/classes/Kohana/View.php [ 179 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php:12
2015-02-10 16:31:05 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php(12): Kohana_View->__get('styles')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(69): Controller_Admin_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php:12
2015-02-10 16:37:43 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 121 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-02-10 16:37:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/opt/lampp/htdo...', 423, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Route.php(423): preg_match('#^(?:(?P<direco...', 'admin', NULL)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-02-10 18:16:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin/Base.php [ 13 ] in file:line
2015-02-10 18:16:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 18:32:04 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-02-10 18:32:04 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:145
2015-02-10 18:35:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Admin_Login::$session ~ APPPATH/classes/Controller/Admin/Login.php [ 7 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php:7
2015-02-10 18:35:21 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 7, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php:7
2015-02-10 18:51:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/admin/template.php [ 5 ] in /opt/lampp/htdocs/motor.com/application/views/admin/template.php:5
2015-02-10 18:51:50 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/views/admin/template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 5, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/motor.com/application/views/admin/template.php:5
2015-02-10 19:07:08 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-10 19:07:08 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#8 /opt/lampp/htdocs/motor.com/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#9 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(43): Kohana_Auth->login('admin', 'admin')
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Login->action_auth()
#11 [internal function]: Kohana_Controller->execute()
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#13 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#16 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-10 19:08:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysql' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2015-02-10 19:08:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 19:09:09 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-10 19:09:09 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#8 /opt/lampp/htdocs/motor.com/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#9 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(43): Kohana_Auth->login('admin', 'admin')
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Login->action_auth()
#11 [internal function]: Kohana_Controller->execute()
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#13 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#16 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-10 19:10:32 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-10 19:10:32 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#8 /opt/lampp/htdocs/motor.com/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#9 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(43): Kohana_Auth->login('admin', 'admin')
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Login->action_auth()
#11 [internal function]: Kohana_Controller->execute()
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#13 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#16 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-10 19:11:50 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 241 ] in /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php:1668
2015-02-10 19:11:50 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#5 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#6 /opt/lampp/htdocs/motor.com/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#7 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(43): Kohana_Auth->login('admin', 'admin')
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Login->action_auth()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#11 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php:1668
2015-02-10 19:12:10 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 241 ] in /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php:1668
2015-02-10 19:12:10 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#5 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#6 /opt/lampp/htdocs/motor.com/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#7 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(43): Kohana_Auth->login('admin', 'admin')
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Login->action_auth()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#11 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php:1668
2015-02-10 19:12:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2015-02-10 19:12:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 19:12:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2015-02-10 19:12:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-10 19:13:42 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-10 19:13:42 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#8 /opt/lampp/htdocs/motor.com/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#9 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(43): Kohana_Auth->login('admin', 'admin')
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Login->action_auth()
#11 [internal function]: Kohana_Controller->execute()
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#13 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#16 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php:171