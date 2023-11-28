
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Final Assignment</title>
</head>
<style>
a{
  text-decoration:none;
}


</style>
<body >
   <h1>Customer Table</h1> 
   <div class="container my-5">
    <button class="btn btn-primary" ><a href="customer.php" class="text-light">Add Customer</a></button>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Customer id</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Address</th>
            <th scope="col">Salary</th>
            <th scope="col">Operations</th>


          </tr>
        </thead>
        <tbody>
            <?php
            include 'connect.php';
            $sql="select * from `customer`";
            $result=mysqli_query($con,$sql);
            // if($result){
            //   $row=mysqli_fetch_assoc($result);
            // }
            if($result){
            
            
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['customer_id'];
                $name=$row['name'];
                $age=$row['age'];
                $address=$row['address'];
                $salary=$row['salary'];
                echo ' <tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$age.'</td>
                <td>'.$address.'</td><td>'.$salary.'</td><td>
                <button class="btn btn-dark"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>

                </td>
              </tr>';
            
            
            }
            }
            ?>
        
        </tbody>
      </table>
   </div>
   <h2>Orders table</h2>
   <table class="table">
        <thead>
          <tr>
            <th scope="col">Order id</th>
            <th scope="col">Date of purchase</th>
            <th scope="col">Customer id</th>
            <th scope="col">Amount</th>
            <th scope="col">Operations</th>


          </tr>
        </thead>
        <tbody>
            <?php
            include 'connect.php';
            $sql="select * from `order`";
            $result=mysqli_query($con,$sql);
            // if($result){
            //   $row=mysqli_fetch_assoc($result);
            // }
            if($result){
            
            
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['order_id'];
                $dop=$row['date'];
                $cid=$row['customer_id'];
                $amt=$row['amount'];
                echo ' <tr>
                <th scope="row">'.$id.'</th>
                <td>'.$dop.'</td>
                <td>'.$cid.'</td>
                <td>'.$amt.'</td><td>
                <button class="btn btn-dark"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>

                </td>
              </tr>';
            
            
            }
            }
            ?>
        
        </tbody>
      </table>
   <button class="btn btn-dark" ><a href="order.php" class="text-light">Add order</a></button> 
   <h3>Customers giving Orders</h3>
   <table class="table">
        <thead>
          <tr>
            
            <th scope="col">Customer id</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>


            <th scope="col">Amount</th>


          </tr>
        </thead>
        <tbody>
            <?php
            include 'connect.php';
            $sql="select * from `customer`  join `order` on  `customer`.customer_id=`order`.customer_id";

            $result=mysqli_query($con,$sql);
            // if($result){
            //   $row=mysqli_fetch_assoc($result);
            // }
            if($result){
            
            
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['customer_id'];
                $dop=$row['name'];
                $cid=$row['age'];
                $amt=$row['amount'];
                echo ' <tr>
                <th scope="row">'.$id.'</th>
                <td>'.$dop.'</td>
                <td>'.$cid.'</td>
                <td>'.$amt.'</td><td>
                <button class="btn btn-dark"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>

                </td>
              </tr>';
            
            
            }
            }
            ?>
        
        </tbody>
      </table>
      //inner join
      <table class="table">
        <thead>
          <tr>
            
            <th scope="col">Customer id</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>


            <th scope="col">Amount</th>


          </tr>
        </thead>
        <tbody>
        
            <?php
            include 'connect.php';
            // $sql="select * from `customer`  cross join `order` on  `customer`.customer_id=`order`.customer_id where `order`.amount>2500" ;
            $sql="select * from `customer`  cross join `order` " ;


            $result=mysqli_query($con,$sql);
            // if($result){
            //   $row=mysqli_fetch_assoc($result);
            // }
            if($result){
            
            
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['customer_id'];
                $dop=$row['name'];
                $cid=$row['age'];
                $amt=$row['amount'];
                echo ' <tr>
                <th scope="row">'.$id.'</th>
                <td>'.$dop.'</td>
                <td>'.$cid.'</td>
                <td>'.$amt.'</td><td>
                <button class="btn btn-dark"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>

                </td>
              </tr>';
            
            
            }
            }
            ?>
        
        </tbody>
      </table>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>