<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-27 12:28:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/Model/Admin/Categories.php [ 34 ] in /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php:34
2015-02-27 12:28:13 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php(34): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 34, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Categories.php(54): Model_Admin_Categories->save(Array)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Categories->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php:34
2015-02-27 12:28:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/Model/Admin/Categories.php [ 34 ] in /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php:34
2015-02-27 12:28:43 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php(34): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 34, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Categories.php(54): Model_Admin_Categories->save(Array)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Categories->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php:34
2015-02-27 12:29:42 --- EMERGENCY: ErrorException [ 2 ]: move_uploaded_file(/img/download_hp_ru_0.jpg): failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/Model/Admin/Categories.php [ 45 ] in file:line
2015-02-27 12:29:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', '/opt/lampp/htdo...', 45, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php(45): move_uploaded_file('/opt/lampp/temp...', '/img/download_h...')
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Categories.php(54): Model_Admin_Categories->save(Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Categories->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-02-27 12:35:11 --- EMERGENCY: ErrorException [ 2 ]: move_uploaded_file(/opt/lampp/htdocs/motor.com/application/classes/Model/Admin/img/download_hp_ru_0.jpg): failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/Model/Admin/Categories.php [ 47 ] in file:line
2015-02-27 12:35:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', '/opt/lampp/htdo...', 47, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php(47): move_uploaded_file('/opt/lampp/temp...', '/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Categories.php(54): Model_Admin_Categories->save(Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Categories->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-02-27 12:47:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: root_dir ~ APPPATH/classes/Model/Admin/Categories.php [ 32 ] in /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php:32
2015-02-27 12:47:14 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 32, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Categories.php(54): Model_Admin_Categories->save(Array)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Categories->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php:32
2015-02-27 13:35:35 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'id_categories' in where clause is ambiguous [ SELECT * FROM `categories` JOIN `categories_description` ON (`categories`.`id_categories` = `categories_description`.`id_categories`) WHERE `id_categories` = '10' AND `categories_descriptionlang` = 'ru' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-02-27 13:35:35 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php(17): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Categories.php(32): Model_Admin_Categories->get_categories('10')
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Categories->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-02-27 14:01:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Model/Admin/Categories.php [ 58 ] in /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php:58
2015-02-27 14:01:24 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php(58): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 58, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Categories.php(54): Model_Admin_Categories->save(Array)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Categories->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php:58
2015-02-27 14:31:34 --- EMERGENCY: ErrorException [ 2 ]: move_uploaded_file(/img/img20150227143134filters_cat.png): failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/Model/Admin/Categories.php [ 62 ] in file:line
2015-02-27 14:31:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', '/opt/lampp/htdo...', 62, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php(62): move_uploaded_file('/opt/lampp/temp...', '/img/img2015022...')
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Categories.php(54): Model_Admin_Categories->save(Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Categories->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-02-27 16:14:45 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'id_categories' in where clause is ambiguous [ SELECT * FROM `categories` JOIN `categories_description` ON (`categories`.`id_categories` = `categories_description`.`id_categories`) WHERE `id_categories` = '12' AND `categories_descriptionlang` = 'ru' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-02-27 16:14:45 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php(17): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Categories.php(32): Model_Admin_Categories->get_categories('12')
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Categories->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-02-27 16:15:59 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'categories_descriptionlang' in 'where clause' [ SELECT * FROM `categories` JOIN `categories_description` ON (`categories`.`id_categories` = `categories_description`.`id_categories`) WHERE `categories`.`id_categories` = '12' AND `categories_descriptionlang` = 'ru' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-02-27 16:15:59 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php(17): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Categories.php(32): Model_Admin_Categories->get_categories('12')
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Categories->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251