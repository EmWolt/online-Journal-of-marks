<?php
require 'config.php';
$data = $_POST;
if (isset($data['add'])) {
	$info = R::dispense('ucheniki');
	$info->name = $data['name'];
	$info->fname = $data['fname'];
	$info->class = $data['class'];
	$info->login = $data['login'];
	$info->password = password_hash( $data['password'] , PASSWORD_DEFAULT) ;
R::store($info);
}

if (isset($data['zamena'])) {
	$user = R::findOne('ucheniki','name = ?', array($data['findname']));
	$cat = R::load('ucheniki', $user);
	$cat->algebra2 = $data['algebra228'];
	R::store($cat);
}
 ?>
 <?php 
if ($_SESSION['logged_user']->name == 'Директор'):
	?>
	<?php 
if (isset($data['upload'])) {
	if ($_FILES['img_upload']['name'] != '') {
		$allowed_ext = array('jpg', 'jpeg', 'png');
		$aaa = explode('.', $_FILES['img_upload']['name']);
		$ext = end($aaa);
		if (in_array($ext, $allowed_ext)) {
			if ($_FILES['img_upload']['size'] < 10000000){
				$name = md5(rand()). '.'.$ext;
				$path = "uploads/". $name;
				move_uploaded_file($_FILES['img_upload']['tmp_name'], $path);

				$item = R::dispense('news');
				$item->file = $path;
				$item->name = $data['zagolovok'];
				$item->news = $data['times'];
				$item->date_news = date('d.M.y H.i');
				R::store($item);

			}
			else{
				echo "<script>alert('Big file');</script>";
			}
		}
		else{
			echo "<script>alert('Invalid image file');</script>";
		}
	}
	else{
		echo "<script>alert('Please select file');</script>";
	}
}
	 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="vieport" content="width=device-width,initial-scale=1">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script  src="js/jquery.js"></script>
	<script  src="js/bootstrap.js"></script>
</head>
<body>
	<?php require 'nav.php' ?>

	<div class="container" style="margin-top: 8%;">
		<button class="btn btn-block btn-primary" data-toggle="collapse" data-target="#add">
			Добавить ученика
		</button>
		<div id="add" class="collapse">
			<form action="admin.php" style="border-style: solid;border-width: 2px;border-color: blue;" method="POST">
				<div class="form-group">
					<label for="name">Имя:</label>
					<input type="text" name="name" class="form-control" id="name" placeholder="Имя ученика">
					<label for="fname">Фамилия:</label>
					<input type="text" name="fname" class="form-control" id="fname" placeholder="Фамилия ученика">
					<label for="class">Класс:</label>
					<input type="text" name="class" class="form-control" id="class" placeholder="Класс ученика">
					<label for="login">Логин:</label>
					<input type="text" name="login" class="form-control" id="login" placeholder="Личный логин ученика">
					<label for="password">Пароль:</label>
					<input type="text" name="password" class="form-control" id="password" placeholder="Пароль ученика">

				</div>
<button type="submit" class="btn btn-success" name="add">Добавить</button>
			</form>
		</div>

		<button data-toggle="collapse" data-target="#news" class="btn btn-block btn-primary" style="margin-top: 4%">
			Добавить новость
		</button>

<form enctype="multipart/form-data" action="admin.php" id="news" class="collapse" method="POST"> 
<div class="form-group">
				<label >Добавить новость:</label>
				<input style="margin: 7px;" type="text" name="zagolovok" class="form-control" placeholder="Заголовок">
				<textarea name="times" cols="159" rows="7"></textarea>
				<label >Выбрать фото:</label>
				<input name="img_upload" type="file" placeholder="Загрузить изображение" >
				<button type="submit" class="btn btn-default" name="upload">Добавить новость</button>
				</div>
</form>


		<button class="btn btn-block btn-primary" data-toggle="collapse" data-target="#ocenki" style="margin-top: 3%">
			Редактировать оценки
		</button>
		<form action="admin.php" id="ocenki" class="collapse" method="POST">
			<div class="form-group">
				<label >Введите данные ученика:</label>
				<input style="margin: 7px;" type="text" name="findname" class="form-control" placeholder="Имя ученика">
				<input style="margin: 7px;"  type="text" name="findthur" class="form-control" placeholder="Фамилия ученика">
				<input style="margin: 7px;" type="text" name="findclass" class="form-control" placeholder="Класс ученика">
			</div>
			<div class="col-lg-3">
			<label >1-ая четверть</label><br>
			<input type="text" name="algebra228" value="1" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<br>
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			</div>
			<div class="col-lg-3">
			<label >2-ая четверть</label><br>
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<br>
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			</div>
			<div class="col-lg-3">
			<label >3-ая четверть</label><br>
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<br>
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			</div>
			<div class="col-lg-3">
			<label >4-ая четверть</label><br>
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<br>
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			<input type="text" name="algebra" placeholder="algebra">
			</div>
			<button type="submit" class="btn btn-block" name="zamena">Изменить оценки</button>
		</form>
	</div>
	<?php require 'footer.php' ?>


</body>
</html>
<?php endif ?>