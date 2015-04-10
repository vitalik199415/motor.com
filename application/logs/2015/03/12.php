<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-12 15:35:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/front/404.php [ 8 ] in /opt/lampp/htdocs/motor.com/application/views/front/404.php:8
2015-03-12 15:35:14 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/views/front/404.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/motor.com/application/classes/HTTP/Exception/404.php(21): Kohana_View->render()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(115): HTTP_Exception_404->get_response()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/views/front/404.php:8