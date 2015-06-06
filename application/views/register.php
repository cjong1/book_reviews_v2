<!DOCTYPE HTML>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>

<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<div class="container">
		<div class="row">
			<h3>Welcome</h3>
		</div>
		<div class="row">
			<div class="six columns">
				<form action='/main/register' method='post'>
<?php
	if($this->session->flashdata('error'))
	{
		echo "<p>". $this->session->flashdata('error'). "</p>";
	}
?>	
					<h4>Register</h4>
					<label>Name</label>
						<input type='text' name='name'>
					<label>Alias</label>
						<input type='text' name='alias'>
					<label>Email</label>
						<input type='email' name='email'>
					<label>Password</label>
						<input type='password' name='password'>
						<p>* Password must be at least 8 characters</p>
					<label>Confirm PW</label>
						<input type='password' name='confirm'>
						<input type='submit' value='Register' name='register'>
				</form>
			</div>
			<div class="six columns">
				<form action='/main/login' method='post'>
<?php
	if($this->session->flashdata('login_error'))
	{
		echo "<p>". $this->session->flashdata('login_error'). "</p>";
	}
?>
					<h4>Login</h4>
					<label>Email</label>
						<input type='text' name='login_email'>
					<label>Password</label>
						<input type='password' name='login_password'>
						<input type='submit' value='Login' name='login'>
				</form>
			</div>
		</div>
	</div>
</body>
</html>