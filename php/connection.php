<?php
$host = '172.16.239.10';
$port = '5432';
$db = 'tsw';
$username = 'admin';
$password = '1234';

$connection_string = "host=$host port=$port dbname=$db user=$username password=$password";


//CONNESSIONE AL DB
$db = pg_connect($connection_string) or die('Impossibile connetersi al database: ' . pg_last_error());


?>