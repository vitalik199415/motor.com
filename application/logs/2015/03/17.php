<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-17 00:43:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: curr ~ APPPATH/views/front/products.php [ 19 ] in /opt/lampp/htdocs/motor.com/application/views/front/products.php:19
2015-03-17 00:43:43 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/views/front/products.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 19, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/motor.com/application/views/front/template.php(39): Kohana_View->__toString()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Products))
#11 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/motor.com/application/views/front/products.php:19
2015-03-17 13:24:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: product_limit ~ APPPATH/classes/Controller/Base.php [ 23 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Base.php:23
2015-03-17 13:24:01 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Base.php(23): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 23, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Products.php(9): Controller_Base->before()
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(69): Controller_Products->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Products))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Base.php:23
2015-03-17 17:11:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 66 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-03-17 17:11:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/opt/lampp/htdo...', 423, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Route.php(423): preg_match('#^category(?:/(...', 'products', NULL)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(950): Kohana_Request::process(Object(Request), Array)
#4 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-03-17 17:11:41 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 66 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-03-17 17:11:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/opt/lampp/htdo...', 423, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Route.php(423): preg_match('#^category(?:/(...', 'favicon.ico', NULL)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(950): Kohana_Request::process(Object(Request), Array)
#4 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-03-17 17:12:09 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 66 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-03-17 17:12:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/opt/lampp/htdo...', 423, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Route.php(423): preg_match('#^category(?:/(...', 'category/motor', NULL)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(950): Kohana_Request::process(Object(Request), Array)
#4 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-03-17 17:12:10 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 66 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-03-17 17:12:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/opt/lampp/htdo...', 423, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Route.php(423): preg_match('#^category(?:/(...', 'favicon.ico', NULL)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(950): Kohana_Request::process(Object(Request), Array)
#4 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-03-17 17:15:16 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 70 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-03-17 17:15:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/opt/lampp/htdo...', 423, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Route.php(423): preg_match('#^category(?:/(...', 'category/motor', NULL)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(950): Kohana_Request::process(Object(Request), Array)
#4 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-03-17 17:15:18 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 70 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-03-17 17:15:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/opt/lampp/htdo...', 423, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Route.php(423): preg_match('#^category(?:/(...', 'favicon.ico', NULL)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(950): Kohana_Request::process(Object(Request), Array)
#4 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-03-17 17:55:15 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 65 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-03-17 17:55:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/opt/lampp/htdo...', 423, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Route.php(423): preg_match('#^category(?:/(...', 'category/motor', NULL)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(950): Kohana_Request::process(Object(Request), Array)
#4 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-03-17 17:55:17 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 65 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-03-17 17:55:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/opt/lampp/htdo...', 423, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Route.php(423): preg_match('#^category(?:/(...', 'favicon.ico', NULL)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(950): Kohana_Request::process(Object(Request), Array)
#4 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-03-17 18:00:27 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'id_categories' in field list is ambiguous [ SELECT COUNT(`id_categories`) AS `num` FROM `categories_products` JOIN `categories` ON (`categories_products`.`id_categories` = `categories`.`id_categories`) WHERE `categories`.`url` = 'motor' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-17 18:00:27 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(`i...', false, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Products.php(84): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Categories.php(35): Model_Products->get_prod_count_by_cat('motor')
#3 /opt/lampp/htdocs/motor.com/application/classes/Controller/Categories.php(19): Controller_Categories->build_pagination('motor')
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Categories->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Categories))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-17 18:01:45 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'categories_productsid_categories' in 'field list' [ SELECT COUNT(`categories_productsid_categories`) AS `num` FROM `categories_products` JOIN `categories` ON (`categories_products`.`id_categories` = `categories`.`id_categories`) WHERE `categories`.`url` = 'motor' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-17 18:01:45 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(`c...', false, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Products.php(84): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Categories.php(35): Model_Products->get_prod_count_by_cat('motor')
#3 /opt/lampp/htdocs/motor.com/application/classes/Controller/Categories.php(19): Controller_Categories->build_pagination('motor')
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Categories->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Categories))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-17 18:02:01 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'categories_products.id_categories' in 'field list' [ SELECT COUNT(`categories_products.id_categories`) AS `num` FROM `categories_products` JOIN `categories` ON (`categories_products`.`id_categories` = `categories`.`id_categories`) WHERE `categories`.`url` = 'motor' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-17 18:02:01 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(`c...', false, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Products.php(84): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Categories.php(35): Model_Products->get_prod_count_by_cat('motor')
#3 /opt/lampp/htdocs/motor.com/application/classes/Controller/Categories.php(19): Controller_Categories->build_pagination('motor')
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Categories->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Categories))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-17 18:02:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Products::get_products_by_cat() ~ APPPATH/classes/Controller/Categories.php [ 48 ] in file:line
2015-03-17 18:02:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-17 19:17:42 --- EMERGENCY: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT * FROM `currency` WHERE `code` = ('EUR', '0.95') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-17 19:17:42 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Currency.php(20): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Base.php(44): Model_Admin_Currency->get_currency_info(Array)
#3 /opt/lampp/htdocs/motor.com/application/classes/Controller/Login.php(6): Controller_Base->before()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(69): Controller_Login->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Login))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-17 20:28:38 --- EMERGENCY: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT * FROM `currency` WHERE `code` = ('RUB', '61.46') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-17 20:28:38 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Currency.php(20): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Products.php(22): Model_Admin_Currency->get_currency_info(Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Products->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Products))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251