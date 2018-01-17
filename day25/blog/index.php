<?php

require_once 'vendor\autoload.php';

$application = new App\classes\Application;
$queryResult = $application->getAllPublishedBlogInfo();

$getBannerResult = $application->getBannerContent();


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/heroic-features.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body style="padding: 0; margin: 0">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto float-right">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin/index.php">Login</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <header style="height: 350px" class="item jumbotron my-0 active">
                <h1 class="display-3"> A Welcome!!! </h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo
                    sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae
                    fugiat numquam repellat.</p>
                <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
            </header>

            <?php while ($bannerContent = mysqli_fetch_assoc($getBannerResult)) { ?>

                <header style="height: 350px" class="item jumbotron my-0">
                    <h1 class="display-3"><?php echo $bannerContent['banner_title']; ?></h1>
                    <p class="lead"><?php echo $bannerContent['banner_description']; ?></p>
                    <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
                </header>

            <?php } ?>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Page Features -->
    <div class="row text-center">

        <?php while ($blogInfo = mysqli_fetch_assoc($queryResult)) { ?>


            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="admin/<?php echo $blogInfo['blog_image'] ?>" alt="" height="200" w>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $blogInfo['blog_title'] ?></h4>
                        <p class="card-text"><?php echo $blogInfo['short_description'] ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="blog-details.php?id=<?php echo $blogInfo['id'] ?>" class="btn btn-primary">Find Out
                            More!</a>
                    </div>
                </div>
            </div>


        <?php } ?>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
