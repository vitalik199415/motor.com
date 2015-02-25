<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-12 12:38:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH/views/admin/navbar.php [ 15 ] in /opt/lampp/htdocs/motor.com/application/views/admin/navbar.php:15
2015-02-12 12:38:32 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/views/admin/navbar.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 15, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/motor.com/application/views/admin/template.php(26): Kohana_View->__toString()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/motor.com/application/views/admin/navbar.php:15
2015-02-12 15:53:21 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Admin/Base.php [ 24 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php:24
2015-02-12 15:53:21 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php(24): Kohana_Core::error_handler(8, 'Trying to get p...', '/opt/lampp/htdo...', 24, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(8): Controller_Admin_Base->before()
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(69): Controller_Admin_Login->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php:24
2015-02-12 15:53:44 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Admin/Base.php [ 25 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php:25
2015-02-12 15:53:44 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php(25): Kohana_Core::error_handler(8, 'Trying to get p...', '/opt/lampp/htdo...', 25, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(8): Controller_Admin_Base->before()
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(69): Controller_Admin_Login->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php:25
2015-02-12 15:53:46 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Admin/Base.php [ 25 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php:25
2015-02-12 15:53:46 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php(25): Kohana_Core::error_handler(8, 'Trying to get p...', '/opt/lampp/htdo...', 25, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(8): Controller_Admin_Base->before()
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(69): Controller_Admin_Login->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php:25
2015-02-12 15:54:56 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Admin/Base.php [ 25 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php:25
2015-02-12 15:54:56 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php(25): Kohana_Core::error_handler(8, 'Trying to get p...', '/opt/lampp/htdo...', 25, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(8): Controller_Admin_Base->before()
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(69): Controller_Admin_Login->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php:25
2015-02-12 17:01:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Auth_ORM::$logged_in ~ APPPATH/classes/Controller/Admin/Login.php [ 12 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php:12
2015-02-12 17:01:49 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 12, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php:12