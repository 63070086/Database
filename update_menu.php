<?php
include 'navbar.php';
$id=$_GET['menu_ID'];
include '../connect.php';
$id=$_GET['menu_ID'];
$menu_ID=$_POST['menu_ID'];
$menu_Name=$_POST['menu_Name'];
$menu_Type=$_POST['menu_Type'];
$menu_Price=$_POST['menu_Price'];
$sql="UPDATE menu SET menu_ID='$menu_ID',menu_Name='$menu_Name',menu_Type='$menu_Type',menu_Price='$menu_Price' WHERE menu_ID='$id'";
$result=$con->query($sql);
if($result){
header('location:menu.php');
}else{
echo"<script>alert('ไม่สามารถแก้ไขข้อมูลได้')</script>";
}
?>
