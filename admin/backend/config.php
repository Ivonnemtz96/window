<?php
include_once('include/Database.php');
define('SS_DB_NAME', 'arketll6_windowBlog');
define('SS_DB_USER', 'arketll6_windowBlog');
define('SS_DB_PASSWORD', 'XM9jPrEo24');
define('SS_DB_HOST', 'localhost');

$dsn	= 	"mysql:dbname=".SS_DB_NAME.";host=".SS_DB_HOST."";
$pdo	=	"";
try {
	$pdo = new PDO($dsn, SS_DB_USER, SS_DB_PASSWORD);
}catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
$db 	=	new Database($pdo);

?>