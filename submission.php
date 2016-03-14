<?php 
include 'php/header.php';
$name = $_POST['txtName'];
$phone = $_POST['txtPhone'];
$email = $_POST['txtEmail'];
$message = $_POST['message'];
$message2 = $name." ".$phone." ".$email." ".$message;

mail("willsmith12289@gmail", 'Contact Form', $message2);
 ?>
 <section>
 	<p>
 		<h1><?php echo "Thanks, ".$name.", "; ?>We will get back to you as soon as possible!</h1>
 	</p>
 	<p>Call Paul</p>
	<p>Cell:<a href="tel:">(908)892-4452</a></p>
	<p>Office:<a href="tel:">(908)892-4452</a></p>
	<p><a href="mailto:@gmail.com">wdw@gmail.com</a></p>
 </section>
 <?php 
include 'php/footer.php';
 ?>