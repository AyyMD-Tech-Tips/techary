<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  	<title>Techary</title>
  	<link rel="icon" href="img/logo-w.png">
	<link rel="stylesheet" href="css/style.css">
</head>
<body id="body">
  <div class="header">
  	<h2>Login</h2>
  </div>
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username/E-mail</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php" style="color:#fff;">Sign up</a>
  	</p>
  </form>
  	<script src="js/mobile.js"></script>
    <script src="js/style.js"></script>
</body>
</html>