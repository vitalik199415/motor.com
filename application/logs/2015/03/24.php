<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-24 00:09:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: num ~ APPPATH/classes/Hash.php [ 25 ] in /opt/lampp/htdocs/motor.com/application/classes/Hash.php:25
2015-03-24 00:09:53 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Hash.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 25, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Main.php(13): hashD('azaza', 25)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Main))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Hash.php:25
2015-03-24 00:10:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: num ~ APPPATH/classes/Hash.php [ 31 ] in /opt/lampp/htdocs/motor.com/application/classes/Hash.php:31
2015-03-24 00:10:15 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Hash.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 31, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Main.php(13): hashD('azaza', 25)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Main))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Hash.php:31