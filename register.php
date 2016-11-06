<?php
session_start();
$warning = '';
include 'formValidation.php';
if ($warning !== '') {
    echo "<script type='text/javascript'>alert('$warning');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

  <h1>Registration Page</h1>
		<form name="register" method="post">
		     <h3>Personal Information</h3>

			<label>First Name: <input type = "text" name="fname" value="" size="30" maxlength="30" required="required"/></label><br /><br />

			<label>Family Name: <input type = "text" name="lname" value="" size="30" maxlength="30" required="required"/></label><br /><br />

			<label>Primay Phone Number:<input type = "tel" name="phone" placeholder="(XXX)XXX-XXXX" size="20" required="required"/></label><br /><br />

			<label>Email: <input type = "email" name="email" value="" size="40" maxlength="40" required="required"/></label><br /><br />
            
			<h3>Login Information</h3><br>
			<label>Username: <input type = "text" name="username" value="" size="30" maxlength="30" required="required"/></label><br /><br />
			<label>Password:<input type = "password" name="passwrd1" required="required"/></label><br />
			<label>Re-enter password:<input type = "password" name="passwrd2" required="required"/></label><br /><br />
			<input type = "reset" value="Reset Form" /> 
			<input type = "submit" value="Submit Form"/><br /><br />
		</form>

</body>
</html>