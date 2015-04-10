<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-09 10:32:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/classes/Controller/Products.php [ 13 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Products.php:13
2015-04-09 10:32:09 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Products.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 13, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Products->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Products))
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Products.php:13