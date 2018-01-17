<?php include 'includes/header.php'; ?>

<?php
    require_once '../vendor/autoload.php';
    use App\classes\Blog;

    $id = $_GET['id'];
    $queryResult = Blog::getBlogInfoById($id);
    $result = mysqli_fetch_assoc($queryResult);
?>

    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Blog Details</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-active">
                            <tr>
                                <th colspan="2" class="text-center">
                                    <img src="<?php echo $result['blog_image'];?>" alt="" height="200" width="250"></th>
                            </tr>
                            <tr>
                                <th>Category ID</th>
                                <td><?php echo $result['category_id'];?></td>
                            </tr>
                            <tr>
                                <th>Blog Title</th>
                                <td><?php echo $result['blog_title'];?></td>
                            </tr>
                            <tr>
                                <th>Short Description</th>
                                <td><?php echo $result['short_description'];?></td>
                            </tr>
                            <tr>
                                <th>Long Description</th>
                                <td><?php echo $result['long_description'];?></td>
                            </tr>
                            <tr>
                                <th>Publication Status</th>
                                <td><?php echo $result['publication_status'] == 1 ? 'Published' : 'Unpublished' ;?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer">
                        <p class="text-center">Blog info details</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include 'includes/footer.php'; ?>