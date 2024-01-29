
<nav class="navbar navbar-default " style="margin-bottom: 0px;background-color: lightgray;">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php" style="font-family:'PFChampionScriptPro-Bold';font-size: 35px; ">
				<?php echo $config['title']; ?>
			</a>
		</div>
		<div class="collapse navbar-collapse" id="mynavbar">
			<ul class="nav navbar-nav">
	<li><a href="index.php">Главная</a></li>
	
		<?php if (isset($_SESSION['logged_user'])):  ?>
			<li><a href="profile.php">Оценки <?php echo $_SESSION['logged_user']->name; ?></a></li>
		<?php endif ?>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Ученикам<span class="caret"></span></a>
<ul class="dropdown-menu">
	<li><a href="kanikuli.php">Расписание праздников и каникул</a></li>
	<li><a href="about.php">О школе</a></li>
</ul>
	</li>
	<li> <a href="raspisanie.php">Расписание уроков</a></li>
	<li> <a href="news.php">Новости</a></li>
<?php if ($_SESSION['logged_user']->name == 'Директор'): ?>
	<li><a href="admin.php">Админ панель!!!!!!</a></li>
	<?php endif ?>
</ul>
		<ul class="nav navbar-nav navbar-right">
			<?php if (isset($_SESSION['logged_user'])):  ?>
	<h6>Вы авторизованный! <br>Добро пожаловать <?php echo $_SESSION['logged_user']->name.' '. $_SESSION['logged_user']->fname; ?>
		
		<a href="logout.php">Выйти</a>
	<?php else: ?>
		<li><a href="login.php"><i class="glyphicon glyphicon-log-in"></i>Логин</a></li>
		<?php endif ?>
	</h6>
</ul>

<form class="navbar-form navbar-right">
	<div class="input-group">
		<input type="text" class="form-control" placeholder="Search">
		<div class="input-group-btn">
			<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>		
		</div>

		
	</div>
	
	
</form>
	</div>
</div>

</nav>
