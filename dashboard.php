<?php
include_once 'module_implement.php'; 
$name="";
$db = new portal();

if(isset($_POST['login'])){
	$username = mysqli_real_escape_string($db->db,trim($_POST['username']));
	$name =  $db->getUsername($username);
}



echo "welcome"."<h1>".$name."</h1>";


 ?>
