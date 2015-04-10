<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-17 10:17:35 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, object given, called in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Langs.php on line 18 and defined ~ SYSPATH/classes/Kohana/View.php [ 28 ] in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:28
2015-02-17 10:17:35 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/opt/lampp/htdo...', 28, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Langs.php(18): Kohana_View::factory('admin/langs/mai...', Object(Database_MySQLi_Result))
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Langs->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Langs))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php:28
2015-02-17 17:08:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: main ~ APPPATH/classes/Model/Admin/Langs.php [ 19 ] in /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Langs.php:19
2015-02-17 17:08:39 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Langs.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 19, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Langs.php(45): Model_Admin_Langs->save(Array)
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Langs->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Langs))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Langs.php:19
2015-02-17 17:09:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/Controller/Admin/Langs.php [ 45 ] in file:line
2015-02-17 17:09:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-17 17:09:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: success_mes ~ APPPATH/views/admin/langs/main.php [ 9 ] in /opt/lampp/htdocs/motor.com/application/views/admin/langs/main.php:9
2015-02-17 17:09:20 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/views/admin/langs/main.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 9, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/motor.com/application/views/admin/template.php(29): Kohana_View->__toString()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Langs))
#11 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/motor.com/application/views/admin/langs/main.php:9
2015-02-17 18:31:43 --- EMERGENCY: ErrorException [ 2 ]: mysqli_result::data_seek() expects parameter 1 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQLi/Result.php [ 33 ] in file:line
2015-02-17 18:31:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_result::...', '/opt/lampp/htdo...', 33, Array)
#1 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQLi/Result.php(33): mysqli_result->data_seek('name')
#2 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQLi_Result->seek('name')
#3 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Langs.php(34): Kohana_Database_Result->offsetGet('name')
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Langs->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Langs))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2015-02-17 18:32:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$name ~ APPPATH/classes/Controller/Admin/Langs.php [ 34 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Langs.php:34
2015-02-17 18:32:06 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Langs.php(34): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 34, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Langs->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Langs))
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Langs.php:34
2015-02-17 18:34:24 --- EMERGENCY: ErrorException [ 2 ]: mysqli_result::data_seek() expects parameter 1 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQLi/Result.php [ 33 ] in file:line
2015-02-17 18:34:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_result::...', '/opt/lampp/htdo...', 33, Array)
#1 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQLi/Result.php(33): mysqli_result->data_seek('name')
#2 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQLi_Result->seek('name')
#3 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Langs.php(34): Kohana_Database_Result->offsetGet('name')
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Langs->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Langs))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2015-02-17 18:40:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Admin_Langs::$_table_langs ~ APPPATH/classes/Model/Admin/Langs.php [ 42 ] in /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Langs.php:42
2015-02-17 18:40:44 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Langs.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 42, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Langs.php(70): Model_Admin_Langs->delete('4')
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Langs->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Langs))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Langs.php:42