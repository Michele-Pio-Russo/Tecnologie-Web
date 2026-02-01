<?php
session_start();
include "./connection.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT password, username FROM utente WHERE email=$1;";
    $prep = pg_prepare($db, "checkLogin", $sql); 
    $ret = pg_execute($db, "checkLogin", array($email));

    if ($row = pg_fetch_assoc($ret)) {
        $hash = $row['password'];
        $username = $row['username'];

        if (password_verify($password, $hash)) {
            $_SESSION['autorizzato'] = true;
            $_SESSION['nome_utente'] = $username; 

            header("Location: ../html/home.php"); 
            exit;
        } else {
            $errore = "Password errata. <a href='login.html'>Riprova</a>";
        }
    } else {
        $errore = "Account inesistente. <a href='login.html'>Riprova</a>";
    }
} else {
    header("Location: ../html/login.html");
    exit;
}