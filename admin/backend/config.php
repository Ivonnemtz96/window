<?php
//include(backend/Database.php");
 // Realizar la conexión a la base de datos
 $servername = "localhost";
 $username = "arketll6_windowBlog";
 $password = "XM9jPrEo24";
 $dbname = "arketll6_windowBlog";

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
	 die("Conexión fallida: " . $conn->connect_error);
 }
?>
