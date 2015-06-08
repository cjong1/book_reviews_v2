<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title><?= $reviews[0]['name'] ?></title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <!-- Custom CSS -->
    <link href="/assets/css/review.css" rel="stylesheet">

    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

</head>

<body>

<!-- HEADER -->

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
                <a class="navbar-brand page-scroll" href="#page-top">Read & Rate</a>
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

<!--     ADD REVIEW FORM -->

    <div class="site-wrapper">

    	<div class="site-wrapper-inner">

			<form class="form-horizontal form-signin" role="form" action="/main/new_review" method="post">
		        <h2 class="form-signin-heading">Add a new book and review</h2>
				<div class="form-group">
					<h4><label class="control-label col-sm-2" for="title">Title:</label></h4>
					<div class="col-sm-10">
						<input type="title" class="form-control" id="title" value="<?= $book[0]['name'] ?>" name="title" readonly>
			    	</div>
			  	</div>
			  	<div class="form-group">
					<h4><label class="control-label col-sm-2" for="author">Author:</label></h4>
					<div class="col-sm-10">
						<input type="author" class="form-control" id="author" value="<?= $book[0]['author'] ?>" name="author" readonly>
			    	</div>
			  	</div>
				<div class="form-group">
					<h4><label class="control-label col-sm-2" for="review">Review:</label></h4>
					<div class="col-sm-10">
						<textarea class="form-control" rows="5" id="review" name="review" placeholder="Write your review..." required></textarea>
					</div>
			  	</div>
			  	<div class="form-group">
					<h4><label class="control-label col-sm-2" for="rating">Rating:</label></h4>
					<div class="col-sm-10">
						<select class="form-control" id="rating" name="rating" required>
			        		<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<button class="btn btn-lg btn-default submit" type="submit">Add Book and Review</button>
				<input type='hidden' value='<?= $book[0]['id'] ?>' name='book'>
				<input type='hidden' value='<?= $this->session->userdata('id') ?>' name='user'>
			</form>

		</div>

	</div>

    <!-- jQuery -->
    <script src="/assets/js/jquery.js"></script>

    <!-- Custom JavaScript -->
    <script src="/assets/js/script.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/js/bootstrap.min.js"></script>

</body>

</html>