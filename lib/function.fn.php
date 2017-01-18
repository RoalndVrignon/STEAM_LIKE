<?php

function userConnect(PDO $db, $username, $password){
	
	$sql ="SELECT *
	FROM users
	WHERE username = :username
	AND password = :password";

	$req = $db->prepare($sql);
	$req->execute(array(
		'username'=> $username,
		'password'=> $password
		));

		$result = $req->fetch(PDO::FETCH_ASSOC);

		if($result == true){
			$_SESSION['username'] = $result['username'];
			$_SESSION['password'] = $result['password'];
			return true;
		}else{
			return false;

		}
}

?>