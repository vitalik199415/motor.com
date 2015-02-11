<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-09 13:36:18 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 92 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-02-09 13:36:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/opt/lampp/htdo...', 423, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Route.php(423): preg_match('#^admin(?:(?P<c...', '', NULL)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-02-09 13:36:29 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 92 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-02-09 13:36:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/opt/lampp/htdo...', 423, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Route.php(423): preg_match('#^admin(?:(?P<c...', 'admin', NULL)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-02-09 06:36:03 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/Cookie.php:67
2015-02-09 06:36:03 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 /opt/lampp/htdocs/motor.com/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/Cookie.php:67
2015-02-09 08:42:23 --- EMERGENCY: ReflectionException [ -1 ]: Class Controller_Admin_Main does not exist ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 84 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php:84
2015-02-09 08:42:23 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(84): ReflectionClass->__construct('Controller_Admi...')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#3 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#4 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php:84
2015-02-09 08:42:25 --- EMERGENCY: ReflectionException [ -1 ]: Class Controller_Admin_Main does not exist ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 84 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php:84
2015-02-09 08:42:25 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(84): ReflectionClass->__construct('Controller_Admi...')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#3 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#4 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php:84
2015-02-09 08:43:31 --- EMERGENCY: ReflectionException [ -1 ]: Class Controller_Admin_Main does not exist ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 84 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php:84
2015-02-09 08:43:31 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(84): ReflectionClass->__construct('Controller_Admi...')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#3 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#4 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php:84
2015-02-09 08:43:32 --- EMERGENCY: ReflectionException [ -1 ]: Class Controller_Admin_Main does not exist ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 84 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php:84
2015-02-09 08:43:32 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(84): ReflectionClass->__construct('Controller_Admi...')
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#3 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#4 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php:84
2015-02-09 09:17:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/Kohana/Route.php [ 438 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/Route.php:438
2015-02-09 09:17:06 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Route.php(438): Kohana_Core::error_handler(8, 'Undefined offse...', '/opt/lampp/htdo...', 438, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(949): Kohana_Request::process(Object(Request), Array)
#3 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#4 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/Route.php:438
2015-02-09 17:47:22 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Main::action_index(), called in /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Admin/Main.php [ 5 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Main.php:5
2015-02-09 17:47:22 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Main.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', '/opt/lampp/htdo...', 5, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Main.php:5