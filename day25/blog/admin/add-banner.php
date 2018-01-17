<?php include 'includes/header.php'; ?>

<?php
require_once '../vendor/autoload.php';
$categories = new App\classes\Banner;


$bannerMessage='';
if(isset($_POST['btn'])) {
    $bannerMessage = $categories->saveBannerInfo($_POST);
}
?>

    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <h4 class="text-primary text-center"><?php echo $bannerMessage; ?></h4><br/>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Banner Title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="banner_title" class="form-control" placeholder="Banner Title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Banner Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" placeholder="Short Description" name="banner_description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Banner Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="blog_image" accept="image/*"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Publication Status</label>
                                <div class="col-sm-9">
                                    <label><input type="radio" name="publication_status" value="1" checked> Published</label>
                                    <label><input type="radio" name="publication_status" value="0"> Unpublished</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-12">
                                    <button type="submit" name="btn" class="btn btn-primary btn-block">Save Blog Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include 'includes/footer.php'; ?>