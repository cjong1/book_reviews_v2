<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title><?= $reviews[0]['name'] ?></title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <!-- Custom CSS -->
    <link href="/assets/css/book-item.css" rel="stylesheet">

    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

</head>

<body>

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll">Read & Rate</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="/main/books">My Account</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/main/add">Add Book</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/main/logout">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <img class="img-responsive" src="<?= $reviews[0]['image'] ?>" alt="">
            </div>

            <div class="col-md-9">
                <div class="caption-full">
                    <h4><?= $reviews[0]['name'] ?></h4>
                    <h5><?= $reviews[0]['author'] ?></h5>
                    <p><?= $reviews[0]['summary'] ?></p>
                </div>
                <div class="ratings">
<?php  
            if ($reviews[0]['review'] == NULL) {
                echo "<p>0 review(s)</p>";
            }
            else {
                echo "<p>".count($reviews)." review(s)</p>";
            }
?>
                </div>
            </div>

            <div class="row"></div>

            <div class="well">

                <div class="text-right">
                    <a href="/main/review/<?= $reviews[0]['book_id'] ?>" class="btn btn-md btn-default">Leave a Review</a>
                </div>
<?php
            foreach ($reviews as $review) {
?>
            <hr>

                <div class="row">
                    <div class="col-md-12">
                        Rating: 
<?php
    $rating = $review['rating'];

        if ($rating == 0) {
            echo "<p>No reviews yet.</p>";
        }
        else {
            for ($i = 0; $i<$rating; $i++) {
                echo "<span class='glyphicon glyphicon-star'></span>";
            };
            for ($j = 0; $j<(5-$rating); $j++) {
                echo "<span class='glyphicon glyphicon-star-empty'></span>";
            }
        }
?>
                        <abbr class="timeago pull-right" title="<?= $review['created_at'] ?>"></abbr>
                        <p>
                            by <a id="alias" href="/main/users/<?= $review['id'] ?>"><?= $review['alias'] ?></a>
                        </p>
                        <p><?= $review['review'] ?></p>
                    </div>
                </div>
<?php
            }
?>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/assets/js/jquery.js"></script>

    <!-- Custom JavaScript -->
    <script src="/assets/js/script.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/js/bootstrap.min.js"></script>

</body>

</html>
