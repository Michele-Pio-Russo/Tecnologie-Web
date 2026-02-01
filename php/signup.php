<?php
session_start();
include "./connection.php";

$nome = $_POST['nome']; // Assicurati che nel form HTML il name sia 'nome'
$username = $_POST['username']; 
$email = $_POST['email'];
$password = $_POST['password'];

function register($n, $u, $e, $p, $db) {
    $hash = password_hash($p, PASSWORD_DEFAULT);
    $sql = "INSERT INTO Account(nome, username, email, password) VALUES($1, $2, $3, $4)";
    $prep = pg_prepare($db, "insertUser", $sql); 
    $ret = pg_execute($db, "insertUser", array($n, $u, $e, $hash));
    
    if(!$ret) {
        return false; 
    }
    return true;
}

if (register($nome, $username, $email, $password, $db)) {
    header("Location: login.html");
    exit;
} else {
    echo "Errore durante la registrazione: " . pg_last_error($db);
}
?>