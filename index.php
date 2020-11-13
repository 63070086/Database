<?php
include 'connect.php';
$sql="SELECT * FROM guestbook";
$result=$con->query($sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container" style="width:1000px;margin-top:50px;">
<table class="table table-striped table-bordered">
  <tr class="bg-info">
    <th>Link</th>
    <th>Name</th>
    <th>Commemt</th>
    <th>Link</th>
    <th>Edit and Delete</th>
  </tr>
    <?php
    $i=1;
    while ($row=mysqli_fetch_array($result)){
      ?>
      <tr>
    <td><?php echo $row['ID']?></td>
    <td><?php echo $row['Name']?></td>
    <td><?php echo $row['Comment']?></td>
    <td><?php echo $row['Link']?></td>
    <td>
      <div class="btn-group" role="group" aria-label="Basic example">
      <a href="edit_menu.php?ID=<?php echo $row['ID']?>" class="btn btn-secondary">แก้ไข</a>
      <a href="del_menu.php?ID=<?php echo $row['ID']?>" class="btn btn-secondary"onclick="return confirm('ยืนยันการลบข้อมูล?')">ลบ</a>
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
