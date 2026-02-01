<?php
session_start();
$nome = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

function register($password, ){
    require "./connection.php";
    $hash = password_hash($password, PASSWORD_DEFAULT);
	$sql = "INSERT INTO Account(nome, username, password) VALUES($1, $2, $3)";
	$prep = pg_prepare($db, "insertUser", $sql); 
	$ret = pg_execute($db, "insertUser", array($nome, $email, $hash));
	if(!$ret) {
		echo "ERRORE QUERY: " . pg_last_error($db);
		return false; 
	}
	else{
		return true;
	}
}


?>