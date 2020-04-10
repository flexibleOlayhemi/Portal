
<?php 

interface s_portal{

	const ADMIN = 0;
	const LECTURER = 1;
	const STUDENT = 2;

	
	public function login_validate($emailusername, $password);
	public function uploadCourses($name,$code,$unit,$level,$coord);
	public function updateCourse($name,$code,$unit,$level,$coord);
	public function deleteCourses($code);
	public function deleteUsers($email);
	public function getData($table);
	public function addUsers($fname,$lname,$uemail,$urole,$password);
	public function updateUser($fname,$lname,$uemail,$urole,$password);
	public function getID($table,$target,$code);
}


 ?>