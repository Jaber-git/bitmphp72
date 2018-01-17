

<?php
require_once '../vendor/autoload.php';

$banner = new App\classes\Banner;

$id = "";
$message='';

if(isset($_GET['delete'])){
    $id = $_GET['id'];
    $message = $banner->deleteBannerInfo($id);
}

$getResult = $banner->getAllBannerInfo();


?>
<?php include 'includes/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover" width="100%">
                            <thead class="thead-dark" width="100%">
                            <tr>
                                <th scope="col">SL NO</th>
                                <th scope="col" width="180">Banner Title</th>
                                <th scope="col">Banner Description</th>
                                <th scope="col">Publication Status</th>
                                <th scope="col" width="170">Action</th>
                            </tr>
                            </thead>
                            <tbody width="100%">


                            <?php
                            $i = 1;
                            while ($data = mysqli_fetch_assoc($getResult)){
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $i++;?></th>
                                    <td><?php echo $data['banner_title'];?></td>
                                    <td><?php echo $data['banner_description'];?></td>
                                    <td><?php echo $data['publication_status'];?></td>
                                    <td>
                                        <a href="edit-banner.php?id=<?php echo $data['id'];?>">Edit</a> ||
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