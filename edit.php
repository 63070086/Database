<?php
include 'navbar.php';
$id=$_GET['menu_ID'];
include '../connect.php';
$sql="SELECT * FROM menu WHERE menu_ID='$id'";
$result=$con->query($sql);
$row=mysqli_fetch_array($result);
?>
<form action = "update.php" method = "post" id="CommentForm" class="form-group">
    Name:<br>
    <input type="text" name = "name" id="idName" <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment" ></textarea><br>  
    Link:<br>
    <input type="text" name = "link" id="idLink" > <br><br>
    <input type="submit" id="commentBtn"class="btn btn-outline-warning">
  </form> 
