<?php
include '../connect.php';
include 'navbar.php';
$sql="SELECT * FROM menu";
$result=$con->query($sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="width:1000px;margin-top:50px;">
      <form class="form-inline" action="search.php" method="post">
        <div class="form-group">
        <label>รหัสอาหาร/ชื่ออาหาร</label>
          <input type="text" name="keyword" class ="form-control mx-sm-2">
          <input type="submit" name="search" value="ค้นหา" class="btn btn-outline-warning">
        </div>
      </form>

<table class="table table-striped table-bordered">
  <tr class="bg-info">
    <th>ลำดับที่</th>
    <th>รหัสอาหาร</th>
    <th>ชื่ออาหาร</th>
    <th>ประเภทอาหาร</th>
    <th>ราคา</th>
    <th>การจัดการ</th>
  </tr>
    <?php
    $i=1;
    while ($row=mysqli_fetch_array($result)){
      ?>
      <tr>
    <td><?php echo $i  ?></td>
    <td><?php echo $row['menu_ID']?></td>
    <td><?php echo $row['menu_Name']?></td>
    <td><?php if($row['menu_Type']==1)
  { echo "อาหารคาว";
  }elseif ($row['menu_Type']==2)
  {echo "อาหารหวาน";
  }elseif (($row['menu_Type']==3))
  {echo "อาหารว่าง";
  }?></td>
    <td><?php echo $row['menu_Price']?></td>
    <td>
      <div class="btn-group" role="group" aria-label="Basic example">
      <a href="edit_menu.php?menu_ID=<?php echo $row['menu_ID']?>" class="btn btn-secondary">แก้ไข</a>
      <a href="del_menu.php?menu_ID=<?php echo $row['menu_ID']?>" class="btn btn-secondary"onclick="return confirm('ยืนยันการลบข้อมูล?')">ลบ</a>
      </div>
    </td>
  </tr>
  <?php
  $i++;
}
?>
</table>
<a href="register.php" class="btn btn-primary btn-lg btn-block">เพิ่มข้อมูล</a>
</div>
  </body>
</html>
