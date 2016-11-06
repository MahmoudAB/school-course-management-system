<?php
    $conn = mysql_connect("localhost:3306","root","laval", "")
    or die(mysql_error());
    mysql_select_db("database_initial", $conn)
    or die(mysql_error());
    
    $query="SELECT * FROM courses";
    $rs=mysql_query($query) or die(mysql_error());
 
?>
      
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
   
    <body>
        <h2> DELETE COURSES - DELETE A COURSE</h2>
        <br>
        <br>

            
             <form method="POST" action="Delete_course_script.php" enctype="multipart/form-data">
<table border="1" width="50%">
<tr>
<th>COURSE TITLE</th><th>COURSE CODE</th><th>COURSELENGTH</th><th>EDIT</th>
</tr>
<?php while($ET=mysql_fetch_assoc($rs)){?>
<tr>
<td><?php echo($ET['course_title'])?></td>
<td><?php echo($ET['course_code'])?></td>
<td><?php echo($ET['course_length'])?></td>
<td><a href="Delete_course_script.php?course_title=<?php echo($ET['course_title'])?>">delete</a> </td>
<?php  } ?>
</table>
         </form>
        
    </body>
</html>
