<?php
include('connection.php');

if(isset($_REQUEST['submit'])){

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $message = $_REQUEST['message'];

$insert_qry = "insert into products set name = '$name', email = '$email', phone = '$phone', message = '$message'";

$result = mysqli_query($conn, $insert_qry);

if($result){
        header('location:admin/products.php');
    }
else{
    echo "Not connected";
}
}




