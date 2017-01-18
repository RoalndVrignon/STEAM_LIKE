

<?php
try {
$db = new PDO('mysql:host=localhost;dbname=basexemple', 'root', '');
}catch (Exception $e){
	echo'Impossible de se connecter à la base de donnée';
	echo $e->getMessage();
	die();
}

?>