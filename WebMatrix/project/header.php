<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Management</title>
    <link rel="shortcut icon" href="./assets/img/fevicon.png" type="image/x-icon">
    <!-- local css -->
    <link rel="stylesheet" href="./assets/css/index.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- font awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">The Recipe Point</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./chef.php">Our Chef</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Varieties
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./veg.php">Veg</a></li>

                            <li><a class="dropdown-item" href="./nonveg.php">Non-Veg</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./fastfood.php">Fast - Food</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./admin/products.php">Login details</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
