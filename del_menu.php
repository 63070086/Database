<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'databaseitf.mysql.database.azure.com', 'superoof@databaseitf', 'Pin187932', 'itflab', 3306);
$sql="DELETE FROM guestbook WHERE ID='$id'";
$result=$con->query($sql);
if($result){
  header('location:index.php');
}else{
  echo"<script>alert('The data cannot be deleted.')</script>";
}
?>
