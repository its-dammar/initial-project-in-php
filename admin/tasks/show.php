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
            if(isset($_GET['id'])){
                $id= $_GET['id'];

                $select_data="SELECT * FROM tasks WHERE id=$id";
                $result=mysqli_query($conn, $select_data);
                $receive_data=mysqli_fetch_assoc($result);
            }
            
            ?>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" readonly name="title" value="<?php echo  $receive_data['title']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" readonly name="description" rows="3"><?php echo  $receive_data['description']; ?></textarea>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</section>

<?php require("../layouts/footer.php"); ?>