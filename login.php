<?php 
session_start();
include ('database.php');
$sql = 'select username, password from administrators';
foreach ($db->query($sql) as $row) {
 	$username = $row['username'];
 	$password = $row['password'];
 }
if (isset($_POST['btnSubmit'])) {		//if button is presseed
	$txtUsername = $_POST['txtUser'];	
	$txtPassword = $_POST['txtPass'];
	// $txtUsername = stripslashes($txtUsername);	
	// $txtPassword = stripslashes($txtPassword);
	// $txtUsername = mysqli_real_escape_string($txtUsername);	
	// $txtPassword = mysqli_real_escape_string($txtPassword);
	//validate user and login with database records
	if ($username === $txtUsername && $password === $txtPassword) {
	//credentials are correct

	//login and set session

		$_SESSION['username'] = $username;
		include 'productList.php';
		exit;
	}else{
		$status = 'incorrect login';
	}
}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <h1>Login Form</h1>
 <form action="login.php" method="post">
 	<ul>
 		<li>
 			<label for="username">Username:</label>
 			<input type="text" name="txtUser"></input>
 		</li>
 		<li>
 			<label for="password">Password:</label>
			<input type="password" name="txtPass"></input>
		</li>
		<li>
			<input type="submit" name="btnSubmit" value="Login"></input>
		</li>
 	</ul>
 	<?php 
 		if (isset($status)) {
 			echo $status;
 		}

 	 ?>
 	 
 	
 </form>
 </body>
 </html>