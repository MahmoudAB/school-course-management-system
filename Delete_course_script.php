<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
         <h2>Delete Courses - Delete A Course</h2>

<?php
  
 $conn = mysql_connect("localhost:3306","root","laval", "")
    or die(mysql_error());
    mysql_select_db("database_initial", $conn)
    or die(mysql_error());
        
      $course_title=$_GET['course_title'];
      $course_code  =$_GET['course_code'];
      $course_length=$_GET['course_length'];
$query="DELETE course_title,course_code,course_length FROM database_initial.courses WHERE course_title=$course_title AND course_code=$course_Code";
mysql_query($query) or die(mysql_error());

      // Confirm success with the user
      

  echo '<p><a href="adminpage.php">&lt;&lt; Back to admin page</a></p>';
?>

    </body>
</html>
