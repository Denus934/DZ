<?php
session_start();
$dbc = mysqli_connect('localhost','root','','lesson') OR DIE('Ошибка подключения к базе данных');
$name = $_COOKIE["username"];
$admin = mysqli_fetch_assoc(mysqli_query($dbc,"SELECT admin FROM signup WHERE username='$name';"))['admin'];
if ($admin != "1") header('Location:index.php');
?>
<html>
<head>
<meta charset="utf-8" />
<title>Главная страница</title>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
                        <img class="png" src="https://resh.edu.ru/uploads/lesson_extract/3971/20190320121658/OEBPS/objects/c_math_1_16_1/58bdf43e-bd3d-43c5-b299-f1a243b93a4c.png"/>
			<h1>Природа</h1>
		</div>
		<div id="menu">
			
  <ul>
    <li><a href="index.php">Главная страница</a></li>
    <li><a href="Stati.html">Статьи</a></li>
    <li><a href="Связь.html">Связаться с нами</a></li>
  </ul>

		</div>
	</div>
</div>
<div id="header-featured">
	<div>
		<div id="banner" class="container">
			<h2>Добро пожаловать!</h2>
			<p></p>
		</div>
	</div>
</div>
<div id="wrapper">
	<div id="featured-wrapper">
		<div id="featured" class="extra2 margin-btm container">
			<div class="main-title">
			<?php
session_start();
$dbc = mysqli_connect('localhost','root','','lesson') OR DIE('Ошибка подключения к базе данных');
$name = $_COOKIE["username"];
$admin = mysqli_fetch_assoc(mysqli_query($dbc,"SELECT admin FROM signup WHERE username='$name';"))['admin'];
if(($admin)) {
echo '<p> ТЫ АДМИН!!!111!(прошу не ломать сайт)</p> ';
}
?>
				<h2>На даную страницу может попасть только администратор!</h2>
				<a href="index.php?do=logout">Выход</a>
		</div>
	</div>
</div>
<div id="copyright" class="container">
	<p>Здесь могла бы быть ваша реклама,но вы мне не заплатили!</p>
</div>
</body>

</html>
