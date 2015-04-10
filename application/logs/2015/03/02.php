<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-02 12:32:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Admin_Menu' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2015-03-02 12:32:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-02 13:08:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: main ~ APPPATH/views/admin/menu/add_edit.php [ 44 ] in /opt/lampp/htdocs/motor.com/application/views/admin/menu/add_edit.php:44
2015-03-02 13:08:59 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/views/admin/menu/add_edit.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 44, Array)
#1 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /opt/lampp/htdocs/motor.com/application/views/admin/template.php(31): Kohana_View->__toString()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(62): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/View.php(359): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#11 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/motor.com/application/views/admin/menu/add_edit.php:44
2015-03-02 13:18:40 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ INSERT INTO `menu_description` (`id_menu`, `name`, `description`, `seo_title`, `seo_description`, `seo_keywords`, `lang`) VALUES (1, 'О нас', 'Информация о нашем магазине', '', '', '', 'ru') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-02 13:18:40 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `me...', false, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Menu.php(122): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Menu.php(57): Model_Admin_Menu->save(Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Menu->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-02 13:20:02 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'field list' [ INSERT INTO `menu_description` (`id_menu`, `name`, `description`, `seo_title`, `seo_description`, `seo_keywords`, `lang`) VALUES (2, 'О нас', 'Информация о нашем магазине', '', '', '', 'ru') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-02 13:20:02 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `me...', false, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Menu.php(122): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Menu.php(57): Model_Admin_Menu->save(Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Menu->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-02 13:28:57 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'description' in 'field list' [ INSERT INTO `menu_description` (`id_menu`, `title`, `description`, `seo_title`, `seo_description`, `seo_keywords`, `lang`) VALUES (3, 'О нас', 'Информация о нашем магазине', '', '', '', 'ru') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-02 13:28:57 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `me...', false, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Menu.php(122): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Menu.php(57): Model_Admin_Menu->save(Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Menu->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-02 13:40:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Model/Admin/Menu.php [ 53 ] in /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Menu.php:53
2015-03-02 13:40:02 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Menu.php(53): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 53, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Menu.php(38): Model_Admin_Menu->get_menu()
#2 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Menu->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Menu.php:53
2015-03-02 13:44:38 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'id_menu' in where clause is ambiguous [ SELECT * FROM `menu` JOIN `menu_description` ON (`menu`.`id_menu` = `menu_description`.`id_menu`) WHERE `menu_description`.`lang` = 'ru' AND `id_menu` != '4' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-02 13:44:38 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/Menu.php(57): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/Menu.php(38): Model_Admin_Menu->get_menu('4')
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_Menu->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-02 15:04:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Admin_Newa' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2015-03-02 15:04:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-02 15:10:48 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ INSERT INTO `news` (`date`, `title`, `short_description`, `full_description`, `seo_title`, `seo_description`, `seo_keywords`, `active`, `lang`) VALUES ('02Mar2015', 'Расспродажа запчастей ко дню водителя.', 'Первая часть модуля, или отдельный модуль, должен ограничить доступ к модулям в зависимости от выбранного пакета услуги. Это должен быть глобальный «обвес» для панели управления, в него входит генерация меню сайта с конфига и проверки доступа внутри контроллеров.', 'Модуль : права доступа к модулям системы\n\n&nbsp;\n\nКраткое описание :\n\nПервая часть модуля, или отдельный модуль, должен ограничить доступ к модулям в зависимости от выбранного пакета услуги. Это должен быть глобальный &laquo;обвес&raquo; для панели управления, в него входит генерация меню сайта с конфига и проверки доступа внутри контроллеров.\n\nВторая часть модуля должна дать возможность суперадмину добавлять дополнительных администраторов и назначать им права доступа ко всем модулям системы.\n\n&nbsp;\n\n\n	\n	Первая часть модуля предполагает деление магазинов на типы по параметру rang в таблице users. Данное поля начинается с нуля. Конфиг для этого модуля можно сделать в виде модели, в которой будет две переменных и две функции. В одной переменной будет массив массивов с параметрами для каждого значения rang для проверки доступа в модуль. Первый ключ это ранг. У каждого ранга массив, в котором ключ, это название контролера, значение 1, оно значение не играет, проверка будет только по ключу. Во второй переменной будет массив с мен ю до 4-х уровней вложенности. Имя меню будет первым элементом и тянется с конфига переводов (это будет в будущем, пока что введем вручную). Доступ к меню будет вторым элементом массива последнего значения ключа. Функция должна будет пройти по массиву и в зависимости от ранга выстроить массив меню, которой будет обрабатываться в файле вью рекурсивной функцией.\n	\n	\n	Вторая часть модуля тянет за собой изменения в системе логина в панель управления и добавления ряда таблиц в БД. Для начала нужно сделать системный модуль, в котором будут добавляться и редактироваться модули + описание к ним (таблицы m_permissions_modules, m_permissions_modules_description). В поле module будет записываться название контролера или целого модуля если он состоит из нескольких контролеров, а в остальные поля - название модуля и его описание. Сам модуль представляет собой грид с таблицы m_administrators. Туда же будут сохранятся основные данные админа. За настройку прав к модулям отвечают таблицы m_administrator_permissions_modules, m_administrator_permissions_users_modules. В поле type будет число от 1, которое будет отвечать за доступ.\n	\n\n', '', '', '', '1', 'ru') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-02 15:10:48 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `ne...', false, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/News.php(31): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/News.php(52): Model_Admin_News->save(Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-02 15:11:30 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ INSERT INTO `news` (`date`, `title`, `short_description`, `full_description`, `seo_title`, `seo_description`, `seo_keywords`, `active`, `lang`) VALUES ('02Mar2015', 'Расспродажа запчастей ко дню водителя.', 'Первая часть модуля, или отдельный модуль, должен ограничить доступ к модулям в зависимости от выбранного пакета услуги. Это должен быть глобальный «обвес» для панели управления, в него входит генерация меню сайта с конфига и проверки доступа внутри контроллеров.', 'Модуль : права доступа к модулям системы\n\n&nbsp;\n\nКраткое описание :\n\nПервая часть модуля, или отдельный модуль, должен ограничить доступ к модулям в зависимости от выбранного пакета услуги. Это должен быть глобальный &laquo;обвес&raquo; для панели управления, в него входит генерация меню сайта с конфига и проверки доступа внутри контроллеров.\n\nВторая часть модуля должна дать возможность суперадмину добавлять дополнительных администраторов и назначать им права доступа ко всем модулям системы.\n\n&nbsp;\n\n\n	\n	Первая часть модуля предполагает деление магазинов на типы по параметру rang в таблице users. Данное поля начинается с нуля. Конфиг для этого модуля можно сделать в виде модели, в которой будет две переменных и две функции. В одной переменной будет массив массивов с параметрами для каждого значения rang для проверки доступа в модуль. Первый ключ это ранг. У каждого ранга массив, в котором ключ, это название контролера, значение 1, оно значение не играет, проверка будет только по ключу. Во второй переменной будет массив с мен ю до 4-х уровней вложенности. Имя меню будет первым элементом и тянется с конфига переводов (это будет в будущем, пока что введем вручную). Доступ к меню будет вторым элементом массива последнего значения ключа. Функция должна будет пройти по массиву и в зависимости от ранга выстроить массив меню, которой будет обрабатываться в файле вью рекурсивной функцией.\n	\n	\n	Вторая часть модуля тянет за собой изменения в системе логина в панель управления и добавления ряда таблиц в БД. Для начала нужно сделать системный модуль, в котором будут добавляться и редактироваться модули + описание к ним (таблицы m_permissions_modules, m_permissions_modules_description). В поле module будет записываться название контролера или целого модуля если он состоит из нескольких контролеров, а в остальные поля - название модуля и его описание. Сам модуль представляет собой грид с таблицы m_administrators. Туда же будут сохранятся основные данные админа. За настройку прав к модулям отвечают таблицы m_administrator_permissions_modules, m_administrator_permissions_users_modules. В поле type будет число от 1, которое будет отвечать за доступ.\n	\n\n', '', '', '', '1', 'ru') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251
2015-03-02 15:11:30 --- DEBUG: #0 /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `ne...', false, Array)
#1 /opt/lampp/htdocs/motor.com/application/classes/Model/Admin/News.php(31): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/motor.com/application/classes/Controller/Admin/News.php(52): Model_Admin_News->save(Array)
#3 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/motor.com/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/motor.com/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/motor.com/modules/database/classes/Kohana/Database/Query.php:251