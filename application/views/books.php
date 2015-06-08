<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Add a Book and Review</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <!-- Custom CSS -->
    <link href="/assets/css/dashboard.css" rel="stylesheet">

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
                <a class="navbar-brand page-scroll" href="#page-top">Welcome, <?= $this->session->userdata('alias') ?></a>
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

    <div class="container">
		<div class="row">
			<div class="col-md-7 recent-reviews">
				<h4>Recent Book Reviews</h4>
<?php
			foreach ($review as $book) {
?>
				<a href="/main/show/<?= $book->book_id ?>"><?= $book->name ?></a>
				<p>Rating: <?= $book->rating ?></p>
				<p><a href="/main/users/<?= $book->id ?>"><?= $book->alias ?></a> says: <?= $book->review ?><p>
				<h6>Posted on <?= $book->created_at ?></h6>

				<hr>
<?php
			}
?>
				</div>
			<div class="col-md-5">
				<h4>Other Books with Reviews</h4>
<?php
				foreach ($books as $book_title) {
?>
					<a href="/main/show/<?= $book_title->id ?>"><img class="img-responsive other-books" src="<?= $book_title->image ?>" alt=""></a>
<?php
				}
?>
			</div>
		</div>
	</div>
</body>
</html>