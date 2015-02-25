<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-13 15:50:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Config_Group::save() ~ APPPATH/classes/Controller/Admin/Main.php [ 14 ] in file:line
2015-02-13 15:50:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-13 15:50:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Config_Group::save() ~ APPPATH/classes/Controller/Admin/Main.php [ 14 ] in file:line
2015-02-13 15:50:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-13 15:50:33 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Config_Group::save() ~ APPPATH/classes/Controller/Admin/Main.php [ 14 ] in file:line
2015-02-13 15:50:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-13 15:52:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Config_Group::save() ~ APPPATH/classes/Controller/Admin/Main.php [ 14 ] in file:line
2015-02-13 15:52:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-13 15:53:24 --- EMERGENCY: ErrorException [ 2 ]: file_put_contents(/opt/lampp/htdocs/motor.com/application/config/config.php): failed to open stream: Отказано в доступе ~ APPPATH/classes/Config/Group.php [ 16 ] in file:line
2015-02-13 15:53:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/opt/lampp/htdo...', 16, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Config/Group.php(16): file_put_contents('/opt/lampp/htdo...', '<?php defined('...')
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Main.php(14): Config_Group->save()
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-02-13 15:54:27 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH/classes/Controller/Admin/Main.php [ 14 ] in file:line
2015-02-13 15:54:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line