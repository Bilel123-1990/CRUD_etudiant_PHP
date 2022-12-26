<?php
$con = mysqli_connect('localhost', 'root', '');
	if (!$con) {
		die("database connection failed" . mysqli_connect_error());
	}

$select_db = mysqli_select_db($con, 'php_crud_app');
	if (!$select_db) {
		die("database selected failed" . mysqli_error($con));
	}


?>
<?php

// try {

// $conn=new PDO("mysql:host=127.0.0.1;dbname=php_crud_app","root","");
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// } catch (PDOException $exec)
// {
// echo "Echec de connexion" .$exec->getMessage();

// }




?>