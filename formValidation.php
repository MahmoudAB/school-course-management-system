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
    
$mysqli = new mysqli("localhost", "root", "root", "database_initial");
    
    if(mysqli_connect_error()){

        echo"Cannot connect to the database";
    }

$query = "SELECT * FROM `users` WHERE `password` = '".$pass."' AND `username` = '".$username."'";
$result = $mysqli->query($query);

if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
die();
/* close connection */
$mysqli->close();
    
}
?>