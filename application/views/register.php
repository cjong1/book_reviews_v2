<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/landing-page.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>

    <div class="site-wrapper">

    	<div class="site-wrapper-inner">

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

			<form class="form-signin" action="/main/user_register" method="post">
<?php
	if($this->session->flashdata('error'))
	{
		echo "<p class='message'>". $this->session->flashdata('error'). "</p>";
	}
	else if($this->session->flashdata('reg_successful'))
	{
		echo "<p class='message'>". $this->session->flashdata('reg_successful'). "</p>";
	}
?>	
		        <h2 class="form-signin-heading">Please register</h2>
		        <label for="inputName" class="sr-only">Name</label>
		        	<input type="text" id="inputName" class="form-control" placeholder="Name" name="name" required autofocus>
		        <label for="inputAlias" class="sr-only">Alias</label>
		        	<input type="text" id="inputAlias" class="form-control" placeholder="Alias" name="alias" required autofocus>
		        <label for="inputEmail" class="sr-only">Email address</label>
		        	<input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
		        <label for="inputPassword" class="sr-only">Password</label>
		        	<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
				<label for="inputConfirmPassword" class="sr-only">Confirm Password</label>
		        	<input type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirm Password" name="confirm" required>
		        <button class="btn btn-lg btn-default submit" type="submit">Register</button>
		    </form>

		</div>

	</div>
</body>
</html>