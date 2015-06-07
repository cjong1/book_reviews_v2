<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Add a Book and Review</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <!-- Custom CSS -->
    <link href="/assets/css/user.css" rel="stylesheet">

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
			<div class="six columns" id='user'>
				<h3>User Alias: <?= $user['alias'] ?></h3>
				<h6>Name: <?= $user['name'] ?></h6>
				<h6>Email: <?= $user['email'] ?></h6>
				<h6>Total Reviews: <?= $user['review']->count ?></h6>
			<h5>Posted Reviews on the following books:</h5>
<?php 				
					foreach ($review as $review) {
?>
					<a href="/main/show/<?= $review->id ?>"><?= $review->name ?></a>
<?php
					}
?>
			</div>
		</div>
	</div>
</body>
</html>