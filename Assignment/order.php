<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $dateop=$_POST['date'];
    $cid=$_POST['customer_id'];
    $amt=$_POST['amount'];
    $sql="insert into `order`(date,customer_id,amount) values ('$dateop',$cid,$amt)";
    $r=mysqli_query($con,$sql);
    if($r){
        echo "inserted";
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
    <label class="form-label">Date</label>
    <input type="date" class="form-control" required name="date" placeholder="Enter the date">
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Customer Id</label>
    <input type="number" class="form-control" autocomplete="off" name="customer_id" placeholder="Enter your customer id">
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Amount</label>
    <input type="number" class="form-control"  name="amount" placeholder="Enter the amount">
  </div>
  
  
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</body>
</html>