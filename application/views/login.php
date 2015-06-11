<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Welcome | Login</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/landing-page.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>

    <div class="site-wrapper">

    	<div class="site-wrapper-inner">

        <!-- <div class="cover-container"> -->

			<div class="masthead clearfix">
	            <div class="inner">
	              <h3 class="masthead-brand">Read & Rate</h3>
	              <nav>
	                <ul class="nav masthead-nav">
	                  <li><a href="/main/index">Home</a></li>
	                  <li><a href="/main/login">Login</a></li>
	                  <li><a href="/main/register">Register</a></li>
	                </ul>
	              </nav>
	            </div>
			</div>

			<form class="form-signin" action="/main/user_login" method="post">
<?php
	if($this->session->flashdata('login_error'))
	{
		echo "<p>". $this->session->flashdata('login_error'). "</p>";
	}
?>
		        <h2 class="form-signin-heading">Please sign in</h2>
		        <label for="inputEmail" class="sr-only">Email address</label>
		        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="login_email" required autofocus>
		        <label for="inputPassword" class="sr-only">Password</label>
		        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="login_password" required>
		        <button class="btn btn-lg btn-default submit" type="submit">Sign in</button>
		    </form>

        <!-- </div> -->

      </div>

    </div>

</body>
</html>