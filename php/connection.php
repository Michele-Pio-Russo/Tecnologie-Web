<?php
$host = '127.0.0.1';
$port = '5432';
$db = 'gruppo38';
$username = 'www';
$password = 'www';

$connection_string = "host=$host port=$port dbname=$db user=$username password=$password";


//CONNESSIONE AL DB
$db = pg_connect($connection_string) or die('Impossibile connetersi al database: ' . pg_last_error());


?>