<?php
require('config/config.php');
require('middleware/secure.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>

<body>

    <div class="container-fluid bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Create
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Tasks</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Manage
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Tasks</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Setting</a></li>
                                <li><a class="dropdown-item" href="auth/logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 c-l-12">
                    <div class="card text-center shadow-sm" style="width: 18rem;" >
                      <!-- <img src="https://dummyimage.com/200x200/dddddd/fff.png&text=200x200" class="img-thumbnail" alt="..."> -->
                      <div class="card-body">
                        <h5 class="card-title"> Tasks</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="tasks/index.php" class="btn btn-danger bnt-sm ">View Tasks</a>
                        <a href="tasks/create.php" class="btn btn-info bnt-sm ">Add Task</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-light py-3">
        <div class="container text-center ">
            <div class="title ">
                <p>&copy; copyright By .....</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>