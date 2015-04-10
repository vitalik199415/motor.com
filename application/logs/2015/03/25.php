<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-25 13:26:53 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 1 [ SELECT `products`.*, `products_description`.`name`, `products_images`.`image` FROM `products` JOIN `products_description` ON (`products`.`id_products` = `products_description`.`id_products`) JOIN `products_images` ON (`products`.`id_products` = `products_images`.`id_products`) WHERE `products_description`.`lang` = 'ru' AND `products_images`.`preview` = 1 LIMIT 18 OFFSET -18 ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-25 13:26:53 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `product...', false, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Products.php(27): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Products.php(47): Model_Products->get_products('18', -18, 'ru')
#3 /opt/lampp/htdocs/motor.com/application/classes/Controller/Products.php(14): Controller_Products->build_pagination('df')
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Products->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Products))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-25 21:13:56 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'code' ~ APPPATH/classes/Controller/Base.php [ 45 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Base.php:45
2015-03-25 21:13:56 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Base.php(45): Kohana_Core::error_handler(2, 'Illegal string ...', '/opt/lampp/htdo...', 45, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Main.php(6): Controller_Base->before()
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Main))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Base.php:45