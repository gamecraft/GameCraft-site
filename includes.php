<?php
require_once ("smarty/Smarty.class.php");
require_once("classes/database.php");
require_once("config/db_config.php");

$database = new Database('mysql:dbname=' . $db_config['DB_NAME'] . ';host=' . $db_config['DB_HOST'] . ';port=3306', $db_config['DB_USER'], $db_config['DB_PASS'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));