<?php
    $conn = mysql_connect("localhost:3306","root","laval", "")
    or die(mysql_error());
    mysql_select_db("database_initial", $conn)
    or die(mysql_error());
    $course_title = $_POST['course_title'];
    $course_code = $_POST['course_code'];
    $course_length = $_POST['course_length'];

    $query = "INSERT into database_initial.courses(course_code, course_title, course_length)
              VALUES ('$course_code', '$course_title', '$course_length')";

    mysql_query($query) or die(mysql_error());
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>

<table border="1">
<tr>
<td>course title:</td>
<td><?php echo($course_title) ?></td>
</tr>
<tr>
<td>course code:</td>
<td><?php echo($course_code) ?></td>
</tr>
<tr>
<td>course length:</td>
<td><?php echo($course_length) ?></td>
</tr>
</table>
        <p><?php echo '<p><a href="Adminpage.php">&lt;&lt; Back to Admin page</a></p>' ;?> <p>
    </body>
</html>
