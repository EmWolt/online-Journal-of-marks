<?php 
require 'config.php'
 ?>
 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="vieport" content="width=device-width,initial-scale=1">
	<title>Список учеников</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script  src="js/jquery.js"></script>
	<script  src="js/bootstrap.js"></script>
</head>
<body>
	<?php require 'nav.php' ?>
<div class="container " style="margin-top: 50px;">
	<div class="jumbotron">
	<a href="#1a"  data-toggle="collapse" style="text-decoration: none;"><h3>1 "A" класс</h3></a>
</div>
<div class="media collapse" id="1a" >
	<a href="#">
	<div class="media-left">
		<img src="images/user.png" class="media-object" width="60px" alt="">
	</div>
	<div class="media-body">
		<h4 class="media-heading">Первоклашка Первоклашкавич</h4>
	</div>
	</a>

	<a href="#">
	<div class="media-left">
		<img src="images/user.png" class="media-object" width="60px" alt="">
	</div>
	<div class="media-body">
		<h4 class="media-heading">Первоклашка Первоклашкавич</h4>
	</div>
	</a>

	<a href="#">
	<div class="media-left">
		<img src="images/user.png" class="media-object" width="60px" alt="">
	</div>
	<div class="media-body">
		<h4 class="media-heading">Первоклашка Первоклашкавич</h4>
	</div>
	</a>

	<a href="#">
	<div class="media-left">
		<img src="images/user.png" class="media-object" width="60px" alt="">
	</div>
	<div class="media-body">
		<h4 class="media-heading">Первоклашка Первоклашкавич</h4>
	</div>
	</a>
</div>

<div class="jumbotron">
	<a href="#9a"  data-toggle="collapse" style="text-decoration: none;"><h3>9"A" класс</h3></a>
</div>
<div class="media collapse" id="9a" >
	<a href="profile.php">
	<div class="media-left">
		<img src="images/user.png" class="media-object" width="60px" alt="">
	</div>
	<div class="media-body">
		<h4 class="media-heading">Ходжаев Даян</h4>
	</div>
	</a>
	</div>

</div>


<?php require 'footer.php' ?>
</body>
</html>