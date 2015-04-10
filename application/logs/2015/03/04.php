<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-04 15:23:47 --- EMERGENCY: ErrorException [ 2 ]: imagecreatefrompng(/img/system/stamp.png): failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/Model/Admin/Categories.php [ 87 ] in file:line
2015-03-04 15:23:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', '/opt/lampp/htdo...', 87, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php(87): imagecreatefrompng('/img/system/sta...')
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Categories.php(59): Model_Admin_Categories->save(Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Categories->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-03-04 15:24:10 --- EMERGENCY: ErrorException [ 2 ]: imagecreatefrompng(/img/categories/img20150304152410news_img_548d43dd8e069.jpg): failed to open stream: Нет такого файла или каталога ~ APPPATH/classes/Model/Admin/Categories.php [ 88 ] in file:line
2015-03-04 15:24:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', '/opt/lampp/htdo...', 88, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php(88): imagecreatefrompng('/img/categories...')
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Categories.php(59): Model_Admin_Categories->save(Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Categories->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-03-04 15:24:28 --- EMERGENCY: ErrorException [ 2 ]: imagecreatefrompng(): 'img/categories/img20150304152428news_img_548d43dd8e069.jpg' is not a valid PNG file ~ APPPATH/classes/Model/Admin/Categories.php [ 88 ] in file:line
2015-03-04 15:24:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', '/opt/lampp/htdo...', 88, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php(88): imagecreatefrompng('img/categories/...')
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Categories.php(59): Model_Admin_Categories->save(Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Categories->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-03-04 15:26:25 --- EMERGENCY: ErrorException [ 2 ]: imagecreatefrompng(): 'img/categories/img20150304152625news_img_548d43dd8e069.png' is not a valid PNG file ~ APPPATH/classes/Model/Admin/Categories.php [ 88 ] in file:line
2015-03-04 15:26:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', '/opt/lampp/htdo...', 88, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Categories.php(88): imagecreatefrompng('img/categories/...')
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Categories.php(59): Model_Admin_Categories->save(Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Categories->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-03-04 17:08:00 --- EMERGENCY: ErrorException [ 2 ]: var_dump() expects at least 1 parameter, 0 given ~ APPPATH/classes/Controller/Admin/Main.php [ 15 ] in file:line
2015-03-04 17:08:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'var_dump() expe...', '/opt/lampp/htdo...', 15, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Main.php(15): var_dump()
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(998): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-04 18:43:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Admin_Products' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2015-03-04 18:43:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line