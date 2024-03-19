<?php require("../layouts/header.php"); ?>

<?php require("../layouts/navbar.php"); ?>

<section class="py-5">
    <div class="container">
        <div class="card">
            <div class="title">
                <h3 class="p-2">Manage Tasks</h1>
                    <a class="btn btn-primary btn-sm float-end" href="./create.php" role="button">Create Task</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $query="SELECT * FROM tasks ORDER BY id DESC";
                        $result=mysqli_query($conn,$query);
                        $i =0;
                        while($data=mysqli_fetch_array($result)){
                            ?>
                            <tr>
                            <th scope="row"><?php echo ++$i; ?></th>
                            <td><?php echo $data['title'] ; ?></td>
                            <td><?php echo $data['description'] ; ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm " href="#" role="button">Edit </a>
                                <a class="btn btn-info btn-sm " href="#" role="button">View </a>
                                <a class="btn btn-danger btn-sm " href="#" role="button">Delete </a>
                            </td>
                        </tr>
                        <?php
                        }
                        
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php require("../layouts/footer.php"); ?>