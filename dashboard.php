<?php
include_once 'module_implement.php'; 

$db = new portal();

if(isset($_POST['login'])){
	$username = mysqli_real_escape_string($db->db,trim($_POST['username']));
	echo $username;
	$name =  $db->getUsername($username);
	echo "<h1>welcome</h1>"."<h1>".$name."</h1>";

}





 ?>
