<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];
    $sql="insert into `customer`(name,age,address,salary) values('$name',$age,'$address',$salary)";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:index.php');
    }else{

        die(mysqli_error($con));
    }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD USER</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container my-5">
    <form method="POST">
  <div class="mb-3 form-group">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" required name="name" placeholder="Enter your name">
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Age</label>
    <input type="number" class="form-control" autocomplete="off" name="age" placeholder="Enter your age">
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Address</label>
    <input type="text" class="form-control"  name="address" placeholder="Enter your address">
  </div>
  
  <div class="mb-3 form-group">
    <label class="form-label">Salary</label>
    <input type="number" class="form-control" name="salary" placeholder="Enter your salary">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</body>
</html>