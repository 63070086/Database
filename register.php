<!DOCTYPE html>
<?php
include 'navbar.php' ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-top:100px;width:670px;padding:20px;background:skyblue;">
      <div class="container" style="width:600px;margin-top:50px;">
      <form action="add_menu.php"method="post">
        <div class="form-group row">
        <label class="col-md-3 cintrol label">รหัสอาหาร</label>
        <div class="col-md-9">
        <input type="text" name="menu_ID" class="form-control" maxlength="4" minlength="4" required pattern="m\d+">
        </div>
        </div>
        <div class="form-group row">
        <label class="col-md-3 cintrol label">ชื่ออาหาร</label>
        <div class="col-md-9">
        <input type="text" name="menu_Name" class="form-control" maxlength="50">
        </div>
        </div>
        <div class="form-group row">
        <label class="col-md-3 cintrol label">ประเภทอาหาร</label>
        <div class="col-md-9">
        <input type="text" name="menu_Type" class="form-control" maxlength="2">
        </div>
        </div>
        <div class="form-group row">
        <label class="col-md-3 cintrol label">ราคา</label>
        <div class="col-md-9">
        <input type="text" name="menu_Price" class="form-control" maxlength="4">
        </div>
        </div>
        <div class="form-group row">
        <label class="col-md-3 cintrol label"></label>
        <div class="col-md-9">
        <input type="submit" name="submit" class="btn btn-primary "value="บันทึกข้อมูล">
        </div>
        </div>
  </body>
</html>
