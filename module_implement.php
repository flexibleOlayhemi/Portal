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


}



 ?>