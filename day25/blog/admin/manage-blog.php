<?php include 'includes/header.php'; ?>

<?php
    require_once '../vendor/autoload.php';
    use App\classes\Blog;

    $id = " ";
    $message='';

    if(isset($_GET['delete'])){
        $id = $_GET['id'];
        $message = Blog::deleteBlogInfo($id);
    }

    $queryResult = Blog::getAllBlogInfo();


?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">SL NO</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Blog Title</th>
                                    <th scope="col">Publication Status</th>
                                    <th scope="col" width="170">Action</th>
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
                                    <td><?php echo $data['blog_title'];?></td>
                                    <td><?php echo $data['publication_status'] == 1 ? 'Published' : 'Unpublished';?></td>
                                    <td>
                <a href="single-blog-view.php?id=<?php echo $data['id'];?>">View</a> ||
                <a href="edit-manage-blog.php?id=<?php echo $data['id'];?>">Edit</a> ||
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