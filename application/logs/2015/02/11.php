<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-11 10:21:31 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH/classes/Controller/Admin/Login.php [ 11 ] in file:line
2015-02-11 10:21:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 10:31:39 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH/classes/Controller/Admin/Login.php [ 11 ] in file:line
2015-02-11 10:31:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 13:21:28 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH/classes/Controller/Admin/Login.php [ 11 ] in file:line
2015-02-11 13:21:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 16:57:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2015-02-11 16:57:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 16:58:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2015-02-11 16:58:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 17:03:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2015-02-11 17:03:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 17:05:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi_Result' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 203 ] in file:line
2015-02-11 17:05:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 17:23:49 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-11 17:23:49 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#8 /opt/lampp/htdocs/motor.com/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('fsdf', 'dsf', false)
#9 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(47): Kohana_Auth->login('fsdf', 'dsf')
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Login->action_auth()
#11 [internal function]: Kohana_Controller->execute()
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#13 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#16 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-11 17:28:47 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-11 17:28:47 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#8 /opt/lampp/htdocs/motor.com/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#9 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(47): Kohana_Auth->login('admin', 'admin')
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Login->action_auth()
#11 [internal function]: Kohana_Controller->execute()
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#13 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#16 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-11 17:32:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi_Result' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 203 ] in file:line
2015-02-11 17:32:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 18:28:44 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 241 ] in /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php:1668
2015-02-11 18:28:44 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#5 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#6 /opt/lampp/htdocs/motor.com/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#7 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(47): Kohana_Auth->login('admin', 'admin')
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Login->action_auth()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#11 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php:1668
2015-02-11 18:46:16 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-11 18:46:16 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#8 /opt/lampp/htdocs/motor.com/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#9 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(47): Kohana_Auth->login('admin', 'admin')
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Login->action_auth()
#11 [internal function]: Kohana_Controller->execute()
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#13 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#16 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-11 18:53:28 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-11 18:53:28 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#8 /opt/lampp/htdocs/motor.com/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#9 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(47): Kohana_Auth->login('admin', 'admin')
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Login->action_auth()
#11 [internal function]: Kohana_Controller->execute()
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#13 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#16 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-11 18:55:27 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 67 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQLi.php:67
2015-02-11 18:55:27 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQLi.php(67): Kohana_Core::error_handler(8, 'Trying to get p...', '/opt/lampp/htdo...', 67, Array)
#1 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQLi.php(162): Kohana_Database_MySQLi->connect()
#2 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQLi.php(352): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#3 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('users')
#4 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#9 /opt/lampp/htdocs/motor.com/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#10 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(47): Kohana_Auth->login('admin', 'admin')
#11 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Login->action_auth()
#12 [internal function]: Kohana_Controller->execute()
#13 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#14 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#17 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQLi.php:67
2015-02-11 18:56:54 --- EMERGENCY: Database_Exception [ 2 ]: mysqli_connect(): (HY000/1044): Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH/database/classes/Database/MySQLi.php [ 59 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Database/MySQLi.php:157
2015-02-11 18:56:54 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Database/MySQLi.php(157): Database_MySQLi->connect()
#1 /opt/lampp/htdocs/motor.com/modules/database/classes/Database/MySQLi.php(338): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#2 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(1668): Database_MySQLi->list_columns('users')
#3 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#8 /opt/lampp/htdocs/motor.com/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#9 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(47): Kohana_Auth->login('admin', 'admin')
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Login->action_auth()
#11 [internal function]: Kohana_Controller->execute()
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#13 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#16 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Database/MySQLi.php:157
2015-02-11 18:57:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi_Result' not found ~ MODPATH/database/classes/Database/MySQLi.php [ 190 ] in file:line
2015-02-11 18:57:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 19:02:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi_Result' not found ~ MODPATH/database/classes/Database/MySQLi.php [ 191 ] in file:line
2015-02-11 19:02:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 19:05:06 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-11 19:05:06 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#8 /opt/lampp/htdocs/motor.com/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#9 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(47): Kohana_Auth->login('admin', 'admin')
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Login->action_auth()
#11 [internal function]: Kohana_Controller->execute()
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#13 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#16 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQL.php:171
2015-02-11 19:15:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi_Result' not found ~ MODPATH/database/classes/Database/MySQLi.php [ 190 ] in file:line
2015-02-11 19:15:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 19:18:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi_Result' not found ~ MODPATH/database/classes/Database/MySQLi.php [ 190 ] in file:line
2015-02-11 19:18:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 22:51:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi_Result' not found ~ MODPATH/database/classes/Database/MySQLi.php [ 190 ] in file:line
2015-02-11 22:51:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 23:14:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi_Result' not found ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 188 ] in file:line
2015-02-11 23:14:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-11 23:20:42 --- EMERGENCY: ErrorException [ 2 ]: include_once(/opt/lampp/htdocs/motor.com/modules/database/classes/Database/MySQLi/Result.php): failed to open stream: Отказано в доступе ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 187 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQLi.php:187
2015-02-11 23:20:42 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQLi.php(187): Kohana_Core::error_handler(2, 'include_once(/o...', '/opt/lampp/htdo...', 187, Array)
#1 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQLi.php(187): Kohana_Database_MySQLi::query()
#2 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQLi.php(338): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#3 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('users')
#4 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /opt/lampp/htdocs/motor.com/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#9 /opt/lampp/htdocs/motor.com/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#10 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Login.php(47): Kohana_Auth->login('admin', 'admin')
#11 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Login->action_auth()
#12 [internal function]: Kohana_Controller->execute()
#13 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#14 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#17 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/MySQLi.php:187