<?php

session_start();

$user = isset($_POST['user']) ? $_POST['user'] : '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit']) &&  $_POST['user'] == ''){
        echo "Username is empty!";
  } 
	  elseif (isset($_POST['submit']) && (isset($_POST['pass']) & $_POST['pass'] == '')) {
        echo "Password is empty!";
  }
else {

    if(isset($_POST['user'])){
        $username= $_POST['user'];
    }

    if(isset($_POST['pass'])){
        $pass= $_POST['pass'];
    }
		$mysqli = new mysqli("localhost", "cl26-username", "username", "cl26-username");
    
	if(mysqli_connect_error()){

		echo"Cannot connect to the database";
	}

//Mysql query to find username and password
//$query = "SELECT * FROM `users` WHERE `name` = '".$username."'";

//
$query = "SELECT * FROM `users` WHERE `password` = '".$pass."' AND `username` = '".$username."'";
$result = $mysqli->query($query);
if ($result->num_rows > 0) {
   
   header('Location: welcome.php'); // redirect to requested page and logged in

    
} else {
  echo "failed to login";
}

/* close connection */
$mysqli->close();
	}
	
}
?>
<html>
<head>
<title>Home</title>
</head>
<body>

<h1>Student Management center</h1>

<form action="" method="post">
  login:<br>
   <input type="text" name="user" id="user" value="<?php echo $user; ?>" /><br><br>
  <br>
  password:<br>
  <input type="password" name="pass" id="pass" value="" /><br><br>
  <br><br>
 <input type="submit" value="Login" name="submit" id="submit" />
</form>
 <a href="register.php">
   <button>Register</button>
</a>
  




</body>
</html>