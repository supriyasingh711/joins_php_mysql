<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql="select * from `customer` where customer_id=$id";
$r=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($r);
$name=$row['name'];
$age=$row['age'];
$address=$row['address'];
$salary=$row['salary'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];
    $sql="update `customer` set customer_id=$id,name='$name',age=$age,address='$address',salary=$salary where customer_id=$id";
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
    <input type="text" class="form-control" value=<?php echo $name;?> required name="name" placeholder="Enter your name">
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Age</label>
    <input type="number" class="form-control" 
    value=<?php echo $age?>
    autocomplete="off" name="age" placeholder="Enter your age">
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Address</label>
    <input type="text" class="form-control" 
    value=<?php echo $address?> 
    name="address" placeholder="Enter your address">
  </div>
  
  <div class="mb-3 form-group">
    <label class="form-label">Salary</label>
    <input type="number" class="form-control" 
    value=<?php echo $salary?>
    name="salary" placeholder="Enter your salary">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
    </div>
</body>
</html>