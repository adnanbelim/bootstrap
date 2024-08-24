<?php
include('connection.php');

$id = $_GET['id'];
$qry = "select * from products where id = '$id'";
$result = mysqli_query($conn, $qry);
$product_data = mysqli_fetch_array($result);

if (isset($_REQUEST['submit'])) {

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $message = $_REQUEST['message'];

    $qry = "update products set name = '$name', email = '$email', phone = '$phone', messgae = '$message' where id = '$id'";

    $result = mysqli_query($conn, $qry);

    if ($result) {
        header('location:products.php');
    }
 else {
        echo "error";
    }
}


