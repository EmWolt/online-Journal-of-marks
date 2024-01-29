<?php 
require 'config.php';
$data = $_POST;

	$errors = [];
if (isset($data['log'])) {

	$user = R::findOne('ucheniki' , 'login = ?' , array($data['login']));
		if ($user) {
			
			if (password_verify($data['password'] , $user['password'])) {
				echo "<div style='color:green; font-size:24px;'>Well logged <a href='index.php'>Home page</a></div>";
				$_SESSION['logged_user'] = $user;
			}
			else{
				$errors[] = 'You password is not correct';
			}

		}
		else{
			$errors[] = 'Login not found';
		}
		if(!empty($errors)){
			echo "<div style='color:red;'>".array_shift($errors)."</div><hr><hr><hr>";
		}
}
 ?>
 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="vieport" content="width=device-width,initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script  src="js/jquery.js"></script>
	<script  src="js/bootstrap.js"></script>
</head>
<body>
	<?php 
require 'nav.php'
	 ?>
<div class="container">
	<form action="login.php" method="POST" style="margin-top: 10%;margin-bottom: 15%;border-color: darkgray;border-width: 3px;border-style: solid;padding: 20px;">
				<div class="form-group">
					<label for="login" align="center">Логин:</label>
					<input type="text" name="login" class="form-control" id="login" placeholder="Логин">
					<label for="password" align="center">Пароль:</label>
					<input type="password" name="password" class="form-control" id="password" placeholder="Пароль">
					<button type="submit" name="log" class="btn btn-primary" style="margin-top: 9px;">Авторизоваться</button>
		</div>
</form>
</div>
	 <?php 
require 'footer.php'
	  ?>

</body>
</html>