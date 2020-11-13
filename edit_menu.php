<?php
include 'navbar.php';
$id=$_GET['menu_ID'];
include '../connect.php';
$sql="SELECT * FROM menu WHERE menu_ID='$id'";
$result=$con->query($sql);
$row=mysqli_fetch_array($result);
?>
<div class="container" style="width:600px;margin-top:50px;">
<form action="update_menu.php?menu_ID=<?php echo $row['menu_ID']; ?>"method="post">
  <div class="form-group row">
  <label class="col-md-3 cintrol label">รหัสสินค้า</label>
  <div class="col-md-9">
  <input type="text" name="menu_ID" class="form-control"value="<?php echo "$row[menu_ID]"; ?>">
  </div>
  </div>
  <div class="form-group row">
  <label class="col-md-3 cintrol label">ชื่อสินค้า</label>
  <div class="col-md-9">
  <input type="text" name="menu_Name" class="form-control"value="<?php echo "$row[menu_Name]"; ?>">
  </div>
  </div>
  <div class="form-group row">
  <label class="col-md-3 cintrol label">ราคาสินค้า</label>
  <div class="col-md-9">
  <input type="text" name="menu_Type" class="form-control"value="<?php echo "$row[menu_Type]"; ?>">
  </div>
  </div>
  <div class="form-group row">
  <label class="col-md-3 cintrol label">จำนวนสินค้า</label>
  <div class="col-md-9">
  <input type="text" name="menu_Price" class="form-control"value="<?php echo "$row[menu_Price]"; ?>">
  </div>
</div>
  <div class="form-group row">
  <label class="col-md-3 cintrol label"></label>
  <div class="col-md-9">
  <input type="submit" name="submit" class="btn btn-primary "value="บันทึกข้อมูล">
  </div>
  </div>
