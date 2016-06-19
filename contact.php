<?php 
include 'header.php';
 ?>
<section>
	<form method="post" action="submission.php">
		<table>
			<tr>
				<td>Name: </td>
				<td>
				<input type="text" name="txtName" value="Jon Smith"></input>
				</td>
			</tr>
			<tr>
				<td>Phone: </td>
				<td>
					<input type="text" name="txtPhone" value="(555)555-5555"></input>
				</td>
			</tr>
			<tr>
				<td>Email: </td>
				<td>
					<input type="text" name="txtEmail" value="Name@something.com"></input>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<textarea name="message">Your Comments Here</textarea>
				</td>
			</tr>
			<tr>
			<td></td>
				<td>
					<input type="submit" name="btnSubmit" value="Submit" id="btnContact"></input>
				</td>
			</tr>
		</table>
	</form>
	<p>Call Paul</p>
	<p>Cell:<a href="tel:">(908)892-4452</a></p>
	<p>Office:<a href="tel:">(908)892-4452</a></p>
	<p><a href="mailto:@gmail.com">wdw@gmail.com</a></p>
</section>

 <?php 
include 'footer.php';
 ?>