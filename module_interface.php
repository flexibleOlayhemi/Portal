
<?php 

interface s_portal{

	const ADMIN = 0;
	const LECTURER = 1;
	const STUDENT = 2;

	
	public function login_validate($emailusername, $password);
}


 ?>