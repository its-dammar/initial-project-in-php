<?php require("../layouts/header.php"); ?>

<?php require("../layouts/navbar.php"); ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="py-2">
                <h3>Create Services</h1>
                    <a class="btn btn-primary btn-sm float-end" href="index.php" role="button"> Manage Tasks</a>
            </div>
            <div class="col-lg-6">
                <?php
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    $title= $_POST['title'];
                    $sub_title= $_POST['sub_title'];
                    $icon= $_POST['icon'];
                    $description= $_POST['description'];

                    if($title !="" && $description !="" && $sub_title !="" && $icon !=""){
                       $query="INSERT INTO services(title, sub_title, icon, description) VALUES('$title','$sub_title', '$icon','$description')";
                       $result= mysqli_query($conn, $query);
                       if($result){
                           echo "<div class='alert alert-success' role='alert'> Service added successfully </div";
                           header("Refresh:2; url=index.php");
                       }
                       else{
                           echo "<div class='alert alert-danger' role='alert'> Error in adding Service </div";
                       }
                    }
                    else{
                        echo "<div class='alert alert-danger' role='alert'> All Data are required </div";
                        header("Refresh:2;");
                    }
                  
                }
                ?>

                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Sub Title</label>
                        <input type="text" class="form-control" id="title" name="sub_title">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Icon</label>
                        <input type="text" class="form-control" id="title" name="icon">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Add task</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require("../layouts/footer.php"); ?>