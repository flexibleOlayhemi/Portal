<?php 

require_once 'module_implement.php';

$db = new portal();

if (isset($_POST['cupload'])){
	$name = mysqli_real_escape_string($db->db,trim($_POST['cname']));
	$code = mysqli_real_escape_string($db->db,trim($_POST['ccode']));
	$unit = mysqli_real_escape_string($db->db,trim($_POST['cunit']));
	$level = mysqli_real_escape_string($db->db,trim($_POST['clevel']));
	$coord = mysqli_real_escape_string($db->db,trim($_POST['ccordinator']));

	$result = $db->uploadCourses($name,$code,$unit,$level,$coord);

	if ($result){
		echo "Uploaded";
	}else {
		echo "Course code already exist/Error";
	}

}

if (isset($_POST['editcourse'])){
	$name = mysqli_real_escape_string($db->db,trim($_POST['cname']));
	$code = mysqli_real_escape_string($db->db,trim($_POST['ccode']));
	$unit = mysqli_real_escape_string($db->db,trim($_POST['cunit']));
	$level = mysqli_real_escape_string($db->db,trim($_POST['clevel']));
	$coord = mysqli_real_escape_string($db->db,trim($_POST['ccordinator']));
	
	$result = $db->updateCourse($name,$code,$unit,$level,$coord);

	if ($result){
		echo "Updated";
	}
	else {
		echo "Error, ".$code." not exist ";
	}

}

 if (isset($_POST['cdelete'])){
	$code = mysqli_real_escape_string($db->db,trim($_POST['ccode'])); 
	$result = $db->deleteCourses($code);

	if ($result){
		echo "Deleted";
	}else {
		echo "Course not exist/Error";
	}
 }

 if (isset($_POST['udelete'])){
	$email = mysqli_real_escape_string($db->db,trim($_POST['umail'])); 
	$result = $db->deleteUsers($email);

	if ($result){
		echo "User Deleted";
	}else {
		echo "User not exist/Error";
	}
 }

if (isset($_POST['adduser'])){
	$fname = mysqli_real_escape_string($db->db,trim($_POST['fname']));
	$lname = mysqli_real_escape_string($db->db,trim($_POST['lname']));
	$uemail = mysqli_real_escape_string($db->db,trim($_POST['uemail']));
	$urole = mysqli_real_escape_string($db->db,trim($_POST['urole']));
	$password = mysqli_real_escape_string($db->db,trim($_POST['upassword']));

	$result = $db->addUsers($fname,$lname,$uemail,$urole,$password);

	if ($result){
		echo "added";
	}else {
		echo "user already exist/Error";
	}

}

if (isset($_POST['edituser'])){
	$fname = mysqli_real_escape_string($db->db,trim($_POST['fname']));
	$lname = mysqli_real_escape_string($db->db,trim($_POST['lname']));
	$uemail = mysqli_real_escape_string($db->db,trim($_POST['uemail']));
	$urole = mysqli_real_escape_string($db->db,trim($_POST['urole']));
	$password = mysqli_real_escape_string($db->db,trim($_POST['upassword']));
	$result = $db->updateUser($fname,$lname,$uemail,$urole,$password);

	if ($result){
		echo "Updated";
	}
	else {
		echo "Error, ".$uemail." not exist ";
	}

}



 


 ?>
