<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'databaseitf.mysql.database.azure.com', 'superoof@databaseitf', 'Pin187932', 'itflab', 3306);
$sql="SELECT * FROM guestbook WHERE ID='$id'";
$row=mysqli_fetch_array($conn);
echo "$id";
echo "$row[ID]";
 ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="container" style="width:600px;margin-top:50px;">
  <form action = "update.php?ID=<?php echo $row["ID"]; ?>" method = "post" id="CommentForm" class="form-group">
    Name:<br>
    <input type="text" name = "Name" placeholder="Enter Name" value="<?php echo "$row[Name]"; ?>"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "Comment" placeholder="Enter Comment" value="<?php echo "$row[Comment]"; ?>"></textarea><br>
    Link:<br>
    <input type="text" name = "Link" placeholder="Enter Link" value="<?php echo "$row[Link]"; ?>"> <br><br>
    <input type="submit" id="commentBtn"class="btn btn-outline-warning">
  </form>
</div>
</html>
