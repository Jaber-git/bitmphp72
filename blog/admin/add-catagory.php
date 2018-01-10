
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
                                <input type="email" name="catagory_name" class="form-control" id="inputEmail3"
                                       placeholder="Catagory name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" name="password" class="col-sm-3
                            col-form-label">Catagory Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="catagory_description" ></textarea>
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
                                <button type="submit" name="btn" class="btn btn-primary btn-block">Save Catagory Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php';?>