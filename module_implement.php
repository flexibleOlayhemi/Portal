<?php 
require_once 'module_interface.php';
require_once 'db_config.php';

class portal implements s_portal{
	public $db;

	 public function __construct(){

	            $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

	            if(mysqli_connect_errno()) {

	                echo "Error: Could not connect to database.";

	                    exit;

	            }



	        }

	        /*** for login process ***/

	        public function login_validate($username, $password){

	 

	            //$password = md5($password);  //till later

	            $sql2="SELECT * from users WHERE email='$username' and password = '$password' ";

	 

	            //checking if the username is available in the table

	            $result = mysqli_query($this->db,$sql2);

	            $count_row = mysqli_num_rows($result);

	 

	            if ($count_row > 0) {


	                return true;

	            }

	            else{

	                return false;

	            }

	        }

	        public function getUsername($email){

	        	$sql="SELECT firstname from users WHERE email='$email' ";
	        	$result = mysqli_query($this->db,$sql);

	            $rows = mysqli_fetch_assoc($result);
	            return $rows['firstname'];



	        }

	        public function updateCourse($name,$code,$unit,$level,$coord){

	        	$sql = "UPDATE courses SET coursename = '$name', coursecode = '$code', courseunit = '$unit', level = '$level', coordinator = '$coord' WHERE coursecode = '$code' ";

	        	$result = mysqli_query($this->db,$sql);
		        	if ($result){
		        		return true;
		        	}else 
		        	{
		        		return false;
		        	}
	        }

	        public function getID($table,$target,$code){

	        	$sql = "SELECT id FROM $table WHERE $target = '$code'";
	        	$result = mysqli_query($this->db,$sql);
		        	if (mysqli_num_rows($result)>0){
		        		return $result;
		        	}else 
		        	{
		        		return false;
		        	}
	        }


	        public function uploadCourses($name,$code,$unit,$level,$coord){

	            $sql2="SELECT * from courses WHERE coursecode='$code' ";

	 

	            //checking if the coursecode is in existence on the table

	            $result = mysqli_query($this->db,$sql2);

	            $count_row = mysqli_num_rows($result);

	 

	            if ($count_row > 0) {


	                return False;

	            }

	            else{


		        	$sql =  "INSERT INTO courses ( coursename, coursecode, courseunit, level, coordinator) VALUES ('$name','$code','$unit','$level','$coord')";
		        	$result = mysqli_query($this->db,$sql);
		        	if ($result){
		        		return true;
		        	}else 
		        	{
		        		return false;
		        	}
	        	 }

	        }

	        public function addUsers($fname,$lname,$uemail,$urole,$password){

	            $sql2="SELECT * from users WHERE email='$uemail' ";

	 

	            //checking if the email is in existence on the table

	            $result = mysqli_query($this->db,$sql2);

	            $count_row = mysqli_num_rows($result);

	 

	            if ($count_row > 0) {


	                return False;

	            }

	            else{


		        	$sql =  "INSERT INTO users (firstname, lastname, email, role, password) VALUES ('$fname','$lname','$uemail','$urole','$password')";
		        	$result = mysqli_query($this->db,$sql);
		        	if ($result){
		        		return true;
		        	}else 
		        	{
		        		return false;
		        	}
	        	 }

	        }

			public function updateUser($fname,$lname,$uemail,$urole,$password){

				$sql = "UPDATE users SET firstname = '$fname', lastname = '$lname', email = '$uemail', role = '$urole', password = '$password' where email = '$uemail' ";
				$result = mysqli_query($this->db,$sql);
		        	if ($result){
		        		return true;
		        	}else 
		        	{
		        		return false;
		        	}
			}
	        public function deleteCourses($code){
	        	$sql2="SELECT * from courses WHERE coursecode='$code' ";

	 

	            //checking if the coursecode is in existence on the table

	            $result = mysqli_query($this->db,$sql2);

	            $count_row = mysqli_num_rows($result);

	 

	            if ($count_row > 0) {
	            	$sql = "DELETE FROM courses WHERE coursecode = '$code' ";
		        	$result = mysqli_query($this->db,$sql);
		        	if ($result){
		        		return true;
		        	}else 
		        	{
		        		return false;
		        	}

	                

	            }

	            else{

		        	return False;
		         }

	        }
	        public function deleteUsers($email){
	        	$sql2="SELECT * from users WHERE email='$email' ";

	 

	            //checking if the coursecode is in existence on the table

	            $result = mysqli_query($this->db,$sql2);

	            $count_row = mysqli_num_rows($result);

	 

	            if ($count_row > 0) {
	            	$sql = "DELETE FROM users WHERE email = '$email' ";
		        	$result = mysqli_query($this->db,$sql);
		        	if ($result){
		        		return true;
		        	}else 
		        	{
		        		return false;
		        	}

	                

	            }

	            else{

		        	return False;
		         }

	        }

	 public function getData($table){

	 	$sql = "SELECT * FROM $table";
	 	$result = mysqli_query($this->db,$sql);
	 	if (mysqli_num_rows($result) > 0){
	 		return $result;
	 		}

 	}


}



 ?>