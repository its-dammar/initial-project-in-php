<?php require("../layouts/header.php"); ?>

<?php require("../layouts/navbar.php"); ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="py-2">
                <h3>Edit Task</h1>
                    <a class="btn btn-primary btn-sm float-end" href="index.php" role="button"> Manage Tasks</a>
            </div>
            <div class="col-lg-6">

                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $query = "SELECT * FROM files WHERE id=$id";
                    $result = mysqli_query($conn, $query);
                    $data = $result->fetch_assoc();
                }

                if (isset($_POST['submit'])) {
                    $title = $_POST['title'];
                    $description = $_POST['description'];
                    $file = $_FILES['dataFile']['name'];
                    $file_size = $_FILES['dataFile']['size'];

                    // Update name only
                    if ($title != "" && $file == "") {
                        $query = "UPDATE files SET title='$title', description='$description' WHERE id='$id'";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            echo "<div class='alert alert-success'>Name updated successfully.</div>";
                            echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
                        } else {
                            echo "<div class='alert alert-danger'>Failed to update name.</div>";
                        }
                    } else {
                        // Update name and replace file
                        if ($file != "" && $description!="" && $title != "") {
                            if ($file_size < 2 * 1024 * 1024) { // 2MB limit
                                $explode = explode('.', $file);
                                $flink = strtolower($explode[0]);
                                $extlink = strtolower($explode[1]);
                                $replace = str_replace(' ', '', $file);
                                $finalname = $replace . time() . '.' . $extlink;
                                $target_file = '../uploads/' . $finalname;

                                if (in_array($extlink, ['jpg', 'png', 'jpeg'])) {
                                    // Replace old file
                                    $oldfilelink = $data['file_link'];
                                    $finallink = '../uploads/' . $oldfilelink;
                                    if (file_exists($finallink)) {
                                        unlink($finallink);
                                    }

                                    if (move_uploaded_file($_FILES['dataFile']['tmp_name'], $target_file)) {
                                        $query = "UPDATE files SET title='$title', file_link='$finalname', type='$extlink' WHERE id='$id'";
                                        $result = mysqli_query($conn, $query);
                                        if ($result) {
                                            echo "<div class='alert alert-success'>File uploaded and name updated successfully.</div>";
                                            echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
                                        } else {
                                            echo "<div class='alert alert-danger'>Failed to update database.</div>";
                                        }
                                    } else {
                                        echo "<div class='alert alert-danger'>File upload failed.</div>";
                                    }
                                } else {
                                    echo "<div class='alert alert-warning'>Invalid file extension. Only JPG, PNG, and JPEG are allowed.</div>";
                                }
                            } else {
                                echo "<div class='alert alert-warning'>File size must be less than 2MB.</div>";
                            }
                        } else {
                            echo "<div class='alert alert-primary'>All fields are required.</div>";
                            echo "<meta http-equiv='refresh' content='2;URL=index.php'>";
                        }
                    }
                }
                ?>

                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo  $data['title']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"><?php echo  $data['description']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Image</label>
                        <img src="<?php echo '../uploads/' . $data['file_link']; ?>" width="100" height="100" alt="">
                        <input type="file" class="form-control" id="title" name="dataFile">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require("../layouts/footer.php"); ?>