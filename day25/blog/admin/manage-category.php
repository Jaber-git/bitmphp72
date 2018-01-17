<?php include 'includes/header.php'; ?>

<?php
    require_once '../vendor/autoload.php';
    use App\classes\Blog;

    $id = " ";
    $message='';

    if(isset($_GET['delete'])){
        $id = $_GET['id'];
        $message = Blog::deleteCategoryInfo($id);
    }

    $queryResult = Blog::getAllCategoryInfo($id);


?>

<div class="container">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">SL NO</th>
                                <th scope="col"width="180">Category Name</th>
                                <th scope="col">Category Description</th>
                                <th scope="col">Publication Status</th>
                                <th scope="col" width="120">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                            $i = 1;
                            while ($data = mysqli_fetch_assoc($queryResult)){
                                ?>
                            <tr>
                        <th scope="row"><?php echo $i++;?></th>
                        <td><?php echo $data['category_name'];?></td>
                        <td><?php echo $data['category_description'];?></td>
                        <td><?php echo $data['publication_status'] == 1 ? 'Published' : 'Unpublished';?></td>
                        <td>
                            <a href="edit-manage-category.php?id=<?php echo $data['id'];?>">Edit</a> ||
                            <a href="?delete=true&id=<?php echo $data['id'];?>" onclick="return confirm('Are you sure to delete this')">Delete</a>
                        </td>
                            </tr>
                        <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>