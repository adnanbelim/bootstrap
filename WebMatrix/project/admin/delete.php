<?php

include ('connection.php');
$id = $_GET['id'];
$del_qry = "delete from products where id = '$id'";
$result = mysqli_query($conn, $del_qry);

if ($result) {
    header('location:products.php');
} else {
    echo "error";
}
