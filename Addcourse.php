<?php
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <h1>ADD COURSE</h1>


        <form method="POST" action="Add_course_script.php" enctype="multipart/form-data">
<Table>
<tr>
<td>Course Title:</td>
<td><input type ="text" name = "course_title"></td>
</tr>
<tr>
<td>Course Code:</td>
<td><input type ="text" name = "course_code"></td>
</tr>
<tr>
<td>Course Length:</td>
<td><input type ="text" name = "course_length"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Add"></td>
</table>
         </form>
        
    </body>
</html>
