<?php
session_start();
include "./connection.php";

function get_pwd($email, $db){
		$sql = "SELECT password FROM Account WHERE email=$1;";
		$prep = pg_prepare($db, "sqlPassword", $sql); 
		$ret = pg_execute($db, "sqlPassword", array($email));
		if(!$ret) {
			echo "ERRORE QUERY: " . pg_last_error($db);
			return false; 
		}
		else{
			if ($row = pg_fetch_assoc($ret)){ 
				$pass = $row['password'];
				return $pass;
			}
			else{
				return false;
			}
   		}
   	}	

$email = $_POST['email'];
$password = $_POST['password'];
$hash = get_pwd($email,$db);
if(!$hash){
				echo "<p> L'utente $user non esiste. <a href=\"login.html\">Riprova</a></p>";
			}
			else{
				if(password_verify($pass, $hash)){
					echo "<p>Login Eseguito con successo</p>";
					//Se il login è corretto, inizializziamo la sessione
					session_start();
					$_SESSION['username']=$user;
					echo "<p><a href=\"reserved.php\">Accedi</a> al contenuto riservato solo agli utenti registrati<p>";
				}
				else{
					echo 'Username o password errati. <a href="login.html">Riprova</a>';
				}
			}
?>