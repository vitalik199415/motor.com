<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'ORM',
	'hash_method'  => 'sha256',
	'hash_key'     => '1, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		// 'admin' => '35a5ec718cc1310471371e6d7251f43ed0db94c2df19400b7a7abda98b93269a',
	),

);
