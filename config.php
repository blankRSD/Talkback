<?php
session_start();
/* DATABASE CONFIGURATION */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id2251689_root');
define('DB_PASSWORD', 'raj16$deV');
define('DB_DATABASE', 'id2251689_chat');
define("BASE_URL", "http://talkback.000webhostapp.com/"); // Eg. http://yourwebsite.com


function getDB() 
{
	$dbhost=DB_SERVER;
	$dbuser=DB_USERNAME;
	$dbpass=DB_PASSWORD;
	$dbname=DB_DATABASE;
	try {
	$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbConnection->exec("set names utf8");
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbConnection;
    }
    catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
	}

}
?>