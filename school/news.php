<?php 
require 'config.php';

 ?>

 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="vieport" content="width=device-width,initial-scale=1">
	<title>Новости</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script  src="js/jquery.js"></script>
	<script  src="js/bootstrap.js"></script>
	<style>
		.uve{
	border-width: 4px;
	border-style: solid;
	border-color: aqua;
	
}
.great{
	transition: all 0.5s ease-in-out;
}
.great:hover{
	background-color: lightgray;
}


	</style>
</head>
<body>
<?php include 'nav.php'; ?>

<div class="container-fluid">
	<?php 
$news = R::getAssoc('SELECT * FROM news');
foreach ($news as $row):
  ?>
  <div  class="container kek" style="margin-bottom: 20px;" >
	<h3><a href="" style="text-decoration: none;"><?php echo $row['name'] ?>
	<img src="<?php echo $row['file'] ?>" class="uve" alt="" style="float: left;margin-right: 15px;" width="45%" height="45%" ></a></h3><p style="padding: 15px;"><?php echo $row['news'] ?></p>
	<h6><?php echo $row['date_news'] ?></h6>

</div>
<?php endforeach ?>
	
</div>

<?php require 'footer.php' ?>

</body>
</html>