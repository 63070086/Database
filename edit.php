<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'databaseitf.mysql.database.azure.com', 'superoof@databaseitf', 'Pin187932', 'itflab', 3306);
$result=$con->query($sql);
$row=mysqli_fetch_array($result);
?>
<div class="container" style="width:600px;margin-top:50px;">
<form action = "update.php?ID=<?php echo $row['ID']; ?>" method = "post" id="CommentForm" class="form-group">
    Name:<br>
    <input type="text" name = "Name" id="idName" value="<?php echo "$row[Name]"; ?>" <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "Comment" id="idComment" value="<?php echo "$row[Comment]"; ?>"></textarea><br>  
    Link:<br>
    <input type="text" name = "Link" id="idLink" value="<?php echo "$row[Link]"; ?>"> <br><br>
    <input type="submit" id="commentBtn"class="btn btn-outline-warning">
  </form>
