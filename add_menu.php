<?php
include '../connect.php';
$menu_ID=$_POST['menu_ID'];
$menu_Name=$_POST['menu_Name'];
$menu_Type=$_POST['menu_Type'];
$menu_Price=$_POST['menu_Price'];
$sql="insert into menu
values('$menu_ID','$menu_Name','$menu_Type','$menu_Price')";
$result=$con->query($sql);
if($result){
  echo "<script>
  window.location.href='menu.php';
  </script>";
}else{
  echo "<script>alert('บันทึกข้อมูลผิดพลาด');</script>";
}
?>
