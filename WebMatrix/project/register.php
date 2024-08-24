<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'system') or die("not connect");
if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // print_r($_POST);
        // exit;

        $qry = "select * from admin where email = '$email'";
        $getEmail = mysqli_query($conn, $qry);
        $count = mysqli_num_rows($getEmail);
        if($count == 1)
        {
            echo "  <script>
                        alert('email exist')
                    </script>";
        } else {
        $qry1 = "insert into admin set name = '$name', email = '$email', password = '$password'";
        $result = mysqli_query($conn, $qry1);

        if ($result) {
            echo "<script>
            alert('user added successfully!!')   
          </script>";
        } else {
            echo "error";
        }
    }
     
    }
    include('header.php');
?>

<section class="bg-dark bg-main bg-color first-section">
    <div class="container-fluid  contact-bg ">
        <div class="row text-lg-start">
            <h2 class="text-lg-start h-35 text-light fw-bolder">
                Register Form
            </h2>
        </div>
    </div>
</section>

<div class="container">
    <div class="row m-5">
        <div class="col-12 col-lg-12">
            <form method="POST">
                <div class="form-group">
                    <label for="exampleName1" >Name</label>
                    <input type="text" class="form-control mt-3 mb-3" id="exampleName1" placeholder="Enter name" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control mt-3 mb-3" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control mt-3 mb-3" id="exampleInputPassword1" placeholder="Password"
                        name="password">
                </div>
                <button type="submit" class="btn btn-primary mt-5" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include ('footer.php') ?>