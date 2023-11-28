<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `customer` where customer_id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:index.php');
    }
}




?>