<?php require("../layouts/header.php"); ?>

<?php require("../layouts/navbar.php"); ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="py-2">
                <h3>Create Task</h1>
                    <a class="btn btn-primary btn-sm float-end" href="index.php" role="button"> Manage Tasks</a>
            </div>
            <div class="col-lg-6">

                <?php
                if (isset($_POST['submit'])) {
                    $title = $_POST['title'];
                    $description = $_POST['description'];

                    $filename = $_FILES['dataFile']['name'];
                    $filesize = $_FILES['dataFile']['size'];

                    $explode = explode('.', $filename);
                    $firstname = strtolower($explode[0]);
                    $ext = strtolower($explode[1]);
                    $rep = str_replace(' ', '', $filename);

                    $finalfilename = $rep . time() . '.' . $ext;

                    if ($filesize < 2 * 1024 * 1024) {
                        if ($ext == "jpg" || $ext == "png") {
                            if (move_uploaded_file($_FILES['dataFile']['tmp_name'], '../uploads/' . $finalfilename)) {
                                $query = "INSERT INTO files (title, description, file_link, type) 
                    VALUES ('$title','$description','$finalfilename', '$ext')"; // variable

                                $result = mysqli_query($conn, $query); // connect to database
                                if ($result) {
                                    echo "file is submitted";
                                    echo header("location: index.php");
                                } else {
                                    echo "file is not submitted ";
                                }
                            }
                        } else {
                            echo "File extension is not match ";
                        }
                    } else {
                        echo "file size must me less 2MB";
                    }


                    // validation to input field

                }
                ?>

                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" accept="image/*" class="form-control" id="image" name="dataFile">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Add file</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require("../layouts/footer.php"); ?>