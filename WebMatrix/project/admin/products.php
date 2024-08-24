<?php
include ('connection.php');

$get_qry = "select * from products";
$result = mysqli_query($conn, $get_qry);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets\css\bootstrap.min.css">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php include('admin.php') ?>
    <div class="container-fluid">
        <div class="row mt-3 mb-3">
            <div class="d-flex justify-content-center">
                <div class="p-2"><button type="button" class="btn btn-outline-success"> Products/Blog</button></div>
                <div class="p-2"><button type="button" class="btn btn-outline-primary">Add Categories</button></div>
                <div class="p-2"><button type="button" class="btn btn-outline-danger">View Details</button></div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="d-flex justify-content-center">
            <div class="p-2">
                <a href="add.php" class="btn btn-outline-success "> Add Products/Blog</a>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="offset-md-2 col-md-8">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Message</th>
                        <th scope="col">action</th>


                    </tr>

                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($result as $val) {
                        // echo "<pre>";
                        // print_r($val);
                    
                        ?>
                        <tr>
                            <th><?php echo $i?></th>
                            <td><?php echo $val['name'] ?></td>
                            <td><?php echo $val['email'] ?></td>
                            <td><?php echo $val['phone'] ?></td>
                            <td><?php echo $val['message'] ?></td>
                            <td>
                                <div class="d-flex flex-row mb-3">
                                    <a href="delete.php?id=<?php echo $val['id']; ?>">
                                        <div class="p-2 btn btn-danger">Delete</div>
                                    </a>
                                    <a href="edit.php?id=<?php echo $val['id']; ?>">
                                        <div class="p-2 btn btn-primary">Edit</div>
                                    </a>
                                </div>
                            </td>
                            <?php $i++;
                    } ?>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>


</body>
<script src="../assets\js\bootstrap.bundle.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
<script>
    let table = new DataTable('#myTable');
</script>

</html>