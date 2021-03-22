<?php
// formula for adding images
require './config/config.php';
require './config/dbh.config.php';

 ?>

<!DOCTYPE html>
<html>
<head>
<title>Image retrieve</title>
</head>

<body>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td><input type="submit" name="submit2" value="display"></td>
</tr>
</table>
</form>
<?php
$db = new Database();
$con = mysqli_connect('localhost','root','','') or die('Unable To connect');


if(isset($_POST["submit2"]))
{
   $res=mysqli_query($db->db(),"SELECT * FROM customer");
   echo "<table>";
   echo "<tr>";
   
   while($row=mysqli_fetch_array($res))
   {
   echo "<td>";
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="400" width="300"/>';
   echo "<br>";
   ?><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a> <?php
   echo "</td>";
   }
   echo "</tr>";

   echo "</table>";
  }
?>
</body>
</html>
