<?php 
require_once 'module_implement.php';

$db = new portal();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
	<h1>Course upload/Edit</h1>
	<form action="upload.php" method="post">
		<div id="courses">
			<span>Course Name</span>
			<input type="text" name="cname">
			<span>Course Code</span>
			<input type="text" name="ccode">
			<span>Course unit</span>
			<input type="number" name="cunit">
			<span>Level</span>
			<input type="number" name="clevel">
			<span>Course Coordinator</span>
			<input type="text" name="ccordinator">
			<button name="cupload" >Upload</button>
			<button name="editcourse" >Update Course</button>

		</div>
	</form>

	<form action="upload.php" method="post">
		<div >
			<hr>
			<h1>Delete Users/Courses</h1>
			<span>Course Code</span>
			<input type="text" name="ccode">
			<button name="cdelete" >Delete course</button>
			<span>User Email</span>
			<input type="email" name="umail">
			<button name="udelete" >Delete user</button>

		</div>
	</form>
	<hr>
	<form  action="upload.php" method="post">
		<div id="user">
			<h1>Add/Edit user</h1>
			<span>first name</span>
			<input type="text" name="fname">
			<span>last name</span>
			<input type="text" name="lname">
			<span>email</span>
			<input type="email" name="uemail">
			<span>Role</span>
			<input type="number" name="urole">
			<span>User Password</span>
			<input type="password" name="upassword">
			<button name="adduser">Add User</button>
			<button name="edituser">Update User</button>

		</div>

	</form>
	<hr>
	<section>
		<h1>User Table</h1>
		<table width="100%">
			<thead>
				<th>id</th>
				<th>firstname</th>
				<th>lastname</th>
				<th>email</th>
				<th>role</th>
				<th>password</th>
			</thead>
			<tbody>
				<?php  
						$result = $db->getData('users');
						if($result){
										while($rows = mysqli_fetch_assoc($result)){?>

											<tr style="text-align: center;">
												<td data-id="<?php echo $rows['id']; ?>"><?php echo $rows['id']; ?></td>
												<td data-id="<?php echo $rows['id']; ?>"><?php echo $rows['firstname']; ?></td>
												<td data-id="<?php echo $rows['id']; ?>"><?php echo $rows['lastname']; ?></td>
												<td data-id="<?php echo $rows['id']; ?>"><?php echo $rows['email']; ?></td>
												<td data-id="<?php echo $rows['id']; ?>"><?php echo $rows['role']; ?></td>
												<td data-id="<?php echo $rows['id']; ?>"><?php echo $rows['password']; ?></td>
												<td><button><a href="#user">edit</a></button></td>
											</tr>
					
									<?php 
										}
									}
					 ?>
				
			</tbody>
		</table>
	</section>
	<hr>
	<section>
		<h1>Courses Table</h1>
		<table width="100%">
			<thead>
				<th>id</th>
				<th>coursename</th>
				<th>coursecode</th>
				<th>courseunit</th>
				<th>level</th>
				<th>coordinator</th>
			</thead>
			<tbody>
				
					<?php 
						$result = $db->getData('courses');
						if($result){
										while($rows = mysqli_fetch_assoc($result)){?>

											<tr style="text-align: center;">
												<td data-id="<?php echo $rows['id']; ?>"><?php echo $rows['id']; ?></td>
												<td data-id="<?php echo $rows['id']; ?>"><?php echo $rows['coursename']; ?></td>
												<td data-id="<?php echo $rows['id']; ?>"><?php echo $rows['coursecode']; ?></td>
												<td data-id="<?php echo $rows['id']; ?>"><?php echo $rows['courseunit']; ?></td>
												<td data-id="<?php echo $rows['id']; ?>"><?php echo $rows['level']; ?></td>
												<td data-id="<?php echo $rows['id']; ?>"><?php echo $rows['coordinator']; ?></td>
												<td><button><a href="#courses">edit</a></button></td>
											</tr>
					
									<?php 
										}
									}
					 ?>
					
				
			</tbody>
		</table>
	</section>



</body>
</html>