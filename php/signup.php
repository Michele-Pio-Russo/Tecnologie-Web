<?php
session_start();
include "./connection.php";

$username = $_POST['nome'];
$email    = $_POST['email'];
$password = $_POST['password'];

if (!$username || !$email || !$password) {
    die("Errore: Tutti i campi sono obbligatori.");
}

function register($u, $e, $p, $db) {
    $hash = password_hash($p, PASSWORD_DEFAULT);
    
    // Rimosso 'nome' dalla lista delle colonne e dai valori
    $sql = "INSERT INTO utente(username, email, password) VALUES($1, $2, $3)";
    $prep = pg_prepare($db, "insertUser", $sql); 
    
    if (!$prep) return false;

    $ret = pg_execute($db, "insertUser", array($u, $e, $hash));
    return $ret;
}

if (register($username, $email, $password, $db)) {
    header("Location: ../html/login.html?success=1");
    exit;
} else {
    echo "Errore durante la registrazione: " . pg_last_error($db);
}
?>