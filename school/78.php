<?php 
require 'config.php';


 ?>
 <!DOCTYPE html>
<html>
<head>
	<style>
.uve{
	border-width: 4px;
	border-style: solid;
	border-color: aqua;
	
}

.kek{
	transition: all 0.5s ease-in-out;
	width: 90%;

}
.kek:hover{
	width: 80%;
}
p{
	font-family: 'mirror 82';
}


	</style>
<meta charset="utf-8">
<meta name="vieport" content="width=device-width,initial-scale=1">
	<title><?php echo $config['title']; ?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script  src="js/jquery.js"></script>
	<script  src="js/bootstrap.js"></script>
</head>
<body>
	<?php include 'nav.php'; ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel" >
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
	</ol>

	<div class="carousel-inner" role="listbox">
		<div class="item active" align="center">
			<img src="images/sholka.png" alt="Not found image" >
		</div>

		<div class="item" align="center">
			<img src="images/sholka.png" alt="Not found image">
		</div>

		<div class="item" align="center"> 
			<img src="images/sholka.png" alt="Not found image">
		</div>

		<div class="item" align="center">
			<img src="images/sholka.png" alt="Not found image">
		</div>
	</div>
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	<span class="sr-only">Предыдущий</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	<span class="sr-only">Следуйщий</span>
</a>

</div>


<div  class="container kek" style="margin-bottom: 20px;" > 
	<h2 class="text-center">Последние новости:</h2>
	<h3><a href="" style="text-decoration: none;">Поздравляем с открытием нашего личного сайта!
	<img src="images/sye.jpg" class="uve" alt="" style="float: left;margin-right: 15px;" width="45%" height="45%" ></a></h3><p style="padding: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore asperiores nam ...</p>
	<h6>21.09.2018 12:47</h6>



</div>
<div  class="container kek" style="margin-bottom: 20px;"> 

	<h3><a href=""  style="text-decoration: none;">Поздравляем с открытием нашего личного сайта!
	<img src="images/sye.jpg" class="uve" alt="" style="float: left;margin-right: 15px;" width="45%" height="45%" ></a></h3><p style="padding: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore asperiores nam ...</p>
	<h6>21.09.2018 12:47</h6>


</div>
<div  class="container kek" style="margin-bottom: 20px;"> 
	
	<h3><a href="" style="text-decoration: none;">Поздравляем с открытием нашего личного сайта!
	<img src="images/sye.jpg" class="uve" alt="" style="float: left;margin-right: 15px;" width="45%" height="45%" ></a></h3><p style="padding: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore asperiores nam ...</p>
	<h6>21.09.2018 12:47</h6>
	
</div>
<div style="background-color: lightgray;">
<div class="container" style="background-color: lightgray;height: 345px;">
	<div style="margin-top: 33px; width: 33%;float: right;">
		<img src="images/book.png" alt="">
		<button class="btn btn-default" style="margin-top: 10px;width: 70%;font-size: 19px;"><a href="" style="text-decoration: none;">Список учеников и оценки</a></button>
	</div>
	<div style="margin-top: 33px; width: 33%;float: right;">
		<img src="images/book.png" alt="">
		<button class="btn btn-default" style="margin-top: 10px;width: 70%;font-size: 19px;"><a href="" style="text-decoration: none;">Список учеников и оценки</a></button>
	</div>
	<div style="margin-top: 33px; width: 33%;">
		<img src="images/book.png" alt="">
		<button class="btn btn-default"  style="margin-top: 10px;width: 70%;font-size: 19px;"><a href="" style="text-decoration: none;">Список учеников и оценки</a></button>
	</div>
</div>
</div>
<h1 class="text-center">Наши лучшие ученики:</h1>
<div class="container">
	
	<div>
		<a href=""  >		
		<div align="center" class="col-lg-4 col-md-4 col-sm-4 col-xs-6" >
<img  src="images/user.png" alt="Mmmm???" class=" img-responsive" >
<p class="caption text-center"><h3> Ходжаев Даян<br>Лучший ученик!!</h3></p>
</div>
</a>
<a href=""  >		
		<div align="center" class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
<img src="images/user.png" alt="Mmmm???" class=" img-responsive" >
<p class="caption text-center"  ><h3> Ходжаев Даян<br>Лучший ученик!!</h3></p>
</div>
</a>
<a href=""  >		
		<div align="center" class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
<img src="images/user.png" alt="Mmmm???" class=" img-responsive" >
<p class="caption text-center"  ><h3> Ходжаев Даян<br>Лучший ученик!!</h3></p>
</div>
</a>
<a href=""  >		
		<div align="center" class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
<img src="images/user.png" alt="Mmmm???" class=" img-responsive" >
<p class="caption text-center"  ><h3> Ходжаев Даян<br>Лучший ученик!!</h3></p>
</div>
</a>

<a href=""  >		
		<div align="center" class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
<img src="images/user.png" alt="Mmmm???" class=" img-responsive" >
<p class="caption text-center"  ><h3> Ходжаев Даян<br>Лучший ученик!!</h3></p>
</div>
</a>

<a href=""  >		
		<div align="center" class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
<img src="images/user.png" alt="Mmmm???" class=" img-responsive" >
<p class="caption text-center"  ><h3> Ходжаев Даян<br>Лучший ученик!!</h3></p>
</div>
</a>

<a href=""  >		
		<div align="center" class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
<img src="images/user.png" alt="Mmmm???" class=" img-responsive" >
<p class="caption text-center"  ><h3> Ходжаев Даян<br>Лучший ученик!!</h3></p>
</div>
</a>
<a href=""  >		
		<div align="center" class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
<img src="images/user.png" alt="Mmmm???" class=" img-responsive" >
<p class="caption text-center"  ><h3> Ходжаев Даян<br>Лучший ученик!!</h3></p>
</div>
</a>

<a href=""  >		
		<div align="center" class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
<img src="images/user.png" alt="Mmmm???" class=" img-responsive" >
<p class="caption text-center"  ><h3> Ходжаев Даян<br>Лучший ученик!!</h3></p>
</div>
</a>
</div>
</div>

<?php require 'footer.php' ?>


</body>
</html>