<?php
return [
	// required
	'database_type' => 'mysql',
	'database_name' => 'micro-framework',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',

	// [optional]
	'charset' => 'utf8mb4',
	'collation' => 'utf8mb4_general_ci',
	'port' => 3309,

	// [optional] Enable logging (Logging is disabled by default for better performance)
	'logging' => true,

	// [optional] driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
	'option' => [
		PDO::ATTR_CASE => PDO::CASE_NATURAL
	],

	// [optional] Medoo will execute those commands after connected to the database for initialization
	'command' => [
		'SET SQL_MODE=ANSI_QUOTES'
	]
];

$database->insert("account", [
	"user_name" => "foo",
	"email" => "foo@bar.com"
]);
