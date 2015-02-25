<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-16 17:25:13 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'userid_' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `roles_users` WHERE `userid_` = '1' AND `roleid_` IN ('2') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-02-16 17:25:13 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/Auth/ORM.php(60): Kohana_ORM->has('roles', Object(Model_Role))
#4 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Base.php(19): Kohana_Auth_ORM->logged_in('admin')
#5 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Langs.php(12): Controller_Admin_Base->before()
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(69): Controller_Admin_Langs->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Langs))
#9 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-02-16 17:36:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_admin/langs' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-02-16 17:36:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-16 17:37:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Langs' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-02-16 17:37:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-16 18:09:52 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Admin/Langs.php [ 18 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Langs.php:18
2015-02-16 18:09:52 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Langs.php(18): Kohana_Core::error_handler(8, 'Trying to get p...', '/opt/lampp/htdo...', 18, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Langs->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Langs))
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Langs.php:18
2015-02-16 18:10:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$name ~ APPPATH/classes/Controller/Admin/Langs.php [ 18 ] in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Langs.php:18
2015-02-16 18:10:07 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Langs.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 18, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Langs->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Langs))
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Langs.php:18
2015-02-16 18:11:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::_query() ~ APPPATH/classes/Controller/Admin/Langs.php [ 18 ] in file:line
2015-02-16 18:11:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line