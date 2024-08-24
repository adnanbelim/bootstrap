<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'system') or die("not connect");
if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry = "select * from admin where email = '$email' && password = '$password'";
    $result = mysqli_query($conn, $qry);
    if ($result) 
    {
        $result_arr = mysqli_fetch_array($result);
        $_SESSION['user_data'] = $result_arr;

        header('location:index.php');
        
    } else {
       
            echo "<script>
            alert('User Not Register');
            </script>";
      
    }

}
include ('header.php');
?>

<section class="bg-dark bg-main bg-color first-section">
    <div class="container-fluid  contact-bg ">
        <div class="row text-lg-start">
            <h2 class="text-lg-start h-35 text-light fw-bolder">
                Login Form
            </h2>
        </div>
    </div>
</section>

<div class="container">
    <div class="row m-5">
        <div class="col-12 col-lg-12">
            <form method="POST">
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