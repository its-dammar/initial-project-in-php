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
                ?>

                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" readonly name="title" value="<?php echo  $data['title']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" readonly name="description" rows="3"><?php echo  $data['description']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Image</label>
                        <img src="<?php echo '../uploads/' . $data['file_link']; ?>" width="100" height="100" alt="">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require("../layouts/footer.php"); ?>