

<?php
    require_once '../vendor/autoload.php';
    $banner = new App\classes\Banner;

    $id = $_GET['id'];

    $queryResult = $banner->getBannerInfo($id);
$bannerResult = mysqli_fetch_assoc($queryResult);

    $message='';

    if(isset($_POST['btn'])){
        $message = $banner->updateBanner($_POST,$id);
    }
?>
<?php include 'includes/header.php'; ?>

    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <h4 class="text-primary text-center"><?php echo $message; ?></h4><br/>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Banner Title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="banner_title" value="<?php echo $bannerResult['banner_title'];?>" class="form-control" placeholder="Blog Title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Banner Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="banner_description"><?php echo $bannerResult['banner_description'];?></textarea>
                                </div>
                            </div>
<!--                            <div class="form-group row">-->
<!--                                <label for="inputEmail3" class="col-sm-3 col-form-label">Blog Image</label>-->
<!--                                <div class="col-sm-9">-->
<!--                                    <input type="file" name="blog_image" accept="image/*"/>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Publication Status</label>
                                <div class="col-sm-9">
                                    <label><input type="radio" <?php echo $bannerResult['publication_status'] == 1 ? 'checked' : '';?> name="publication_status" value="1"> Published</label>
                                    <label><input type="radio" <?php echo $bannerResult['publication_status'] == 0 ? 'checked' : '';?> name="publication_status" value="0"> Unpublished</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" name="btn" class="btn btn-primary btn-block">Update Banner</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>