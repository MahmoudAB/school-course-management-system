<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    return;
}
$warning = "";
if ($_POST['fname'] === "") {
    $warning .= 'Empty field for "First name"\n';
}
if ($_POST['lname'] === "") {
    $warning .= 'Empty field for "Last name"\n';
}
if ($_POST['phone'] === "") {
    $warning .= 'Empty field for "Phone number"\n';
}
if ($_POST['email'] === "") {
    $warning .= 'Empty field for "Email address"\n';
}

if ($_POST['username'] === "") {
    $warning .= 'Empty field for "username"\n';
}

if ($_POST['passwrd1'] === "") {
    $warning .= 'Empty field for "Choose password"\n';
}
if ($_POST['passwrd2'] === "") {
    $warning .= 'Empty field for "Confirm password"\n';
}
if ($_POST['passwrd1'] !== $_POST['passwrd2']) {
    $warning .= 'Both passwords do not match\n';
}

if ($warning !== "") {
    return;
} else {
    
        $mysqli = new mysqli("localhost", "cl26-username", "username", "cl26-username");
    
    if(mysqli_connect_error()){

        echo"Cannot connect to the database";
    }



$query = "INSERT INTO `cl26-username`.`users` (`name`, `lastname`, `email`, `phone`, `password`, `id`, `username`) VALUES ('".$_POST['fname']."', 
    '".$_POST['lname']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['passwrd1']."', '1', '".$_POST['username']."')";


$result = $mysqli->query($query);


    header('Location: index.php');

    echo "Error: " . $sql . "<br>" . $conn->error;

//die();
/* close connection */
$mysqli->close();
    
}
?>