<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'databaseitf.mysql.database.azure.com', 'superoof@databaseitf', 'Pin187932', 'itflab', 3306);
$sql="SELECT * FROM guestbook WHERE ID='$id'";
$row=mysqli_fetch_array($conn);
if (mysqli_connect_errno($row))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
 ?>
<div class="container" style="width:600px;margin-top:50px;">
  <form action = "update.php?ID=<?php echo $row["ID"]; ?>" method = "post"class="form-group">
    Name:<br>
    <input type="text" name = "Name" value="<?php echo "123"; ?>"> <br>
		Comment:<br>
    <textarea rows="10" cols="20" name = "Comment" value="<?php echo "$row[Comment]"; ?>"></textarea><br>
    Link:<br>
    <input type="text" name = "Link" value="<?php echo "$row[Link]"; ?>"> <br><br>
    <input type="submit" class="btn btn-outline-warning">
  </form>
</div>
