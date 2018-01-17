

<?php
    require_once '../vendor/autoload.php';
    $blog = new App\classes\Blog;
    $category = new App\classes\Categories;

    $id = $_GET['id'];
    $queryResult = $blog->getBlogInfoById($id);
    $result = mysqli_fetch_assoc($queryResult);

    $getResult = $category->getAllCategoryInfo();

    $message='';

    if(isset($_POST['btn'])){
        $message = $blog->updateBlogInfoById($_POST,$id);
    }
?>
<?php include 'includes/header.php'; ?>

    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <h4 class="text-primary text-center"><?php echo $message; ?></h4><br/>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" name="editBlogForm" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="category_id">
                                        <option value="">---Select Category Name---</option>

                                        <?php while($category = mysqli_fetch_assoc($getResult)) { ?>
                                            <option value="<?php echo $category['id']; ?>"><?php echo $category['category_name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Blog Title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="blog_title" value="<?php echo $result['blog_title'];?>" class="form-control" placeholder="Blog Title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Short Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="short_description"><?php echo $result['short_description'];?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Long Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control textarea" name="long_description" rows="10"><?php echo $result['long_description'];?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Blog Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="blog_image" accept="image/*"/>
                                    <img src="<?php echo $result['blog_image']?>" alt="" height="80" width="100">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Publication Status</label>
                                <div class="col-sm-9">
                                    <label><input type="radio" <?php echo $result['publication_status'] == 1 ? 'checked' : '' ?> name="publication_status" value="1"> Published</label>
                                    <label><input type="radio" <?php echo $result['publication_status'] == 0 ? 'checked' : '' ?> name="publication_status" value="0"> Unpublished</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" name="btn" class="btn btn-primary btn-block">Update Blog Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    document.forms['editBlogForm'].elements['category_id'].value = '<?php echo $result['category_id']; ?>';
</script>
<?php include 'includes/footer.php'; ?>