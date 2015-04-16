<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-16 20:41:06 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '10-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (10, '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2015-04-16 20:41:06 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\application\classes\Controller\reg.php(13): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Reg->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reg))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251