<?php
$usernames = ["salem","alem","assem","tolen"];

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];
		$errors = [];
		if(in_array($username,$usernames)){
			array_push($errors,'Username has already reserved');
		}
		if(empty($username)){
			array_push($errors, 'Username should not be empty');
		}
		if(empty($password1) and empty($password2)){
			array_push($errors, 'Password and Confirm password should not be empty');
		}
		if($password1 != $password2){
			array_push($errors,'Passwords do not match');
		}
		if(empty($password1) and isset($password2) and $password1!=$password2){
			array_push($errors,'Password should not be empty');
		}
		if(empty($password2) and isset($password1) and $password1!=$password2){
			array_push($errors,'Confirm password should not be empty');
		}
		for($i = 0;$i < sizeof($errors);$i++){
			echo '<p class = "error">'.($errors[$i]).'</p>';
			echo '</br>';
		}
}
?>
<html>
<head><style>
.error{
	border: 1px solid red;
	font-weight: bold;
	padding: 5px;
	width: 400px;
	margin: 0px;
}
</style></head>
<body>
<form action="task1.php" method="post">
	<table>
		<tr>
			<td> Username:</td> 
			<td><input  type="text" name="username" /></td>
		</tr>
		<tr>

			<td> Password:</td> 
			<td><input  type="text" name="password1" /></td>
		</tr>
			<tr>

			<td> Confirm Password:</td> 
			<td><input  type="text" name="password2" /></td>
		</tr>
			<tr>
			
			<td><button  type="submit" name="submit" >Submit</button></td>
		</tr>
 </table>
</form>
</body>
</html>