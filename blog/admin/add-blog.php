
<?php include 'include/header.php'; ?>

<div class="container" style="margin-top: 10px">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-danger" style="text-align: center"></h4><br/>
                    <form action="" method="post">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Catagory Name</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="" id="">
                                    <option value="">--Select Catagory--</option>
                                    <option value="">Catagory 1</option>
                                    <option value="">Catagory 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" name="password" class="col-sm-3
                            col-form-label">Blog Title</label>
                            <div class="col-sm-9">
                                <input type="email" name="blog-title" class="form-control" id="inputEmail3"
                                       placeholder="Blog Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" name="password" class="col-sm-3
                            col-form-label">Short Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="short_description" placeholder="Short                            Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" name="password" class="col-sm-3
                            col-form-label">Long Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control textarea" name="long_description" placeholder="Long Description" ></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" name="password" class="col-sm-3
                            col-form-label">Blog Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image_file" accept="images/*">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" name="password" class="col-sm-3
                            col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio" name="publication_status" value="1">Publish
                                <input type="radio" name="publication_status" value="0">Unpublish
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <button type="submit" name="btn" class="btn btn-primary btn-block">Save Blog Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php';?>
