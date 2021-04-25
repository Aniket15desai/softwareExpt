<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
  <div class="header">
  	<h2>SIGN IN</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="Username" value="<?php if(isset($_COOKIE['emailcookie'])) { echo $_COOKIE['emailcookie'];} ?>">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Password" value="<?php if(isset($_COOKIE['passwordcookie'])) { echo $_COOKIE['passwordcookie'];} ?>">
  	</div>
	
	<div class="cookies">
  		<input type="checkbox" name="RememberMe"> &nbsp;&nbsp; Remember Me
  	</div>

  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>