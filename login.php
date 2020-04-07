
<?php

include_once 'module_implement.php';

$db = new portal();




	   
	    if (isset($_POST['login'])) {

	    	$username = mysqli_real_escape_string($db->db,trim($_POST['username']));
			$password = mysqli_real_escape_string($db->db,trim($_POST['password']));

	       // extract($_REQUEST);

	       $login = $db->login_validate($username, $password);
	       echo $login."<br>";
	        if ($login) {
	            // Registration Success

	           header("location:dashboard.php");

	        } else {

	            // Registration Failed

	            //header("location:admin_login.php");
 
	            echo 'Wrong username or password  ';
	        }
	        echo $username . " " . $password;

	    }
?>