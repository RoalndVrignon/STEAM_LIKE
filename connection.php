<?php 
session_start();
include ('lib/db.php');
include ('lib/function.fn.php');


$user = userConnect($db, $_POST['username'], $_POST['password']);

if($user == true){
	header('Location: profil.php');
} else {
	header('Location: connexion.php');
}
        
?>