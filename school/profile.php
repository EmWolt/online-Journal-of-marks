<?php 
require 'config.php';
$data = $_POST;
 ?>
 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="vieport" content="width=device-width,initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script  src="js/jquery.js"></script>
	<script  src="js/bootstrap.js"></script>
</head>
<body>
<?php require 'nav.php' ?>
<div class="container" align="center">
<h2 class="text-center"><?php echo $_SESSION['logged_user']->name; ?></h2>
<img  class="img-circle" width="25%" height="20%" src="images/user.png" alt="">
<h3>Класс: <?php echo $_SESSION['logged_user']->class; ?></h3>
<h4 style="margin-top: 35px;">Оценки:</h4>
</div>
<table border="2" align="center" width="70%" style="font-size: 23px;">
	<tr>
		<th>Предмет</th>
		<th>1 четверь</th>
		<th>2 четверть</th>
		<th>3 четверть</th>
		<th>4 четверть</th>
	</tr>
	<tr>
		<th>Алгебра</th>
		<td>
			<?php echo $_SESSION['logged_user']->algebra1; ?>
		</td>
		<td>
			<?php echo $_SESSION['logged_user']->algebra2; ?>

		</td>
		<td><?php echo $_SESSION['logged_user']->algebra3; ?>

		 </td>
		<td><?php echo $_SESSION['logged_user']->algebra4; ?>
		 </td>
	</tr>
	<tr>
		<th>Алгебра</th>
		<td>2</td>
		<td>5</td>
		<td>5</td>
		<td>5</td>
	</tr>
	<tr>
		<th>Алгебра</th>
		<td>5</td>
		<td>5</td>
		<td>5</td>
		<td>5</td>
	</tr>
	<tr>
		<th>Алгебра</th>
		<td>5</td>
		<td>5</td>
		<td>5</td>
		<td>5</td>
	</tr>
	<tr>
		<th>Алгебра</th>
		<td>5</td>
		<td>5</td>
		<td>5</td>
		<td>5</td>
	</tr>
	<tr>
		<th>Алгебра</th>
		<td>5</td>
		<td>5</td>
		<td>5</td>
		<td>5</td>
	</tr>

</table>

<?php require 'footer.php' ?>
</body>
</html>