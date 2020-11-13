<?php
$id=$_GET['menu_ID'];
include '../connect.php';
$sql="DELETE FROM menu WHERE menu_ID='$id'";
$result=$con->query($sql);
if($result){
  header('location:menu.php');
}else{
  echo"<script>alert('ไม่สามารถลบข้อมูลได้')</script>";
}
?>
