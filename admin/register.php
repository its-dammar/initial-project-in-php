<?php    require('config/config.php'); ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Title</title>
</head>

<body>

  <section class="py-5">
    <div class="container w-25 py-5 shadow ">
      <div class="title text-center pb-4">
        <h1>Create an Account</h1>
      </div>
      <?php
     
      if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        if ($msg == "register") {
          echo "<div class='alert alert-success' role='alert'>  Account added successfully </div";
          header("Refresh:2; url=index.php");
        }
        if ($msg == "error") {
          echo "<div class='alert alert-warning' role='alert'> Account is not added </div";
          header("Refresh:2; url=index.php");
        }
      }
      ?>
      <form action="auth/register.php" method="POST" enctyle="miltipart/form-data">
        <div class="mb-3">
          <label for="exampleInputName" class="form-label">Username</label>
          <input type="text" class="form-control" name="username" id="exampleInputName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-danger btn-sm">Submit</button>
        <a class=" text-decoration-none ps-4" href="index.php" role="button"> Login</a>
      </form>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>