<?php 
$dbc = mysqli_connect('localhost', 'root', '', 'lesson'); 
if(!isset($_COOKIE['user_id'])) { 
if(isset($_POST['submit'])) { 
$user_username = mysqli_real_escape_string($dbc, trim($_POST['username'])); 
$user_password = mysqli_real_escape_string($dbc, trim($_POST['password'])); 
if(!empty($user_username) && !empty($user_password)) { 
$query = "SELECT `user_id` , `username` FROM `signup` WHERE username = '$user_username' AND password = SHA('$user_password')"; 
$data = mysqli_query($dbc,$query); 
if(mysqli_num_rows($data) == 1) { 
$row = mysqli_fetch_assoc($data); 
setcookie('user_id', $row['user_id'], time() + (60*60*24*30)); 
setcookie('username', $row['username'], time() + (60*60*24*30)); 
$home_url = 'http://' . $_SERVER['HTTP_HOST']; 
header('Location: '. $home_url); 
} 
else { 
echo 'Извините, вы должны ввести правильные имя пользователя и пароль'; 
} 
} 
else { 
echo 'Извините вы должны заполнить поля правильно'; 
} 
} 
} 
?>
<html>
<head>
<meta charset="utf-8" />
<title>Главная страница</title>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
                        <img class="png" src="https://resh.edu.ru/uploads/lesson_extract/3971/20190320121658/OEBPS/objects/c_math_1_16_1/58bdf43e-bd3d-43c5-b299-f1a243b93a4c.png"/>
			<h1>Природа</h1>
		</div>
		<div id="menu">
			
  

		</div>
	</div>
</div>
<div id="header-featured">
	<div>
		<div id="banner" class="container">
			<h2>Добро пожаловать!</h2>
			<p>Вы находитесь на странице авторицации и входа!</p>

		</div>
	</div>
</div>
<section>
<?php
	if(empty($_COOKIE['username'])) {
?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<label for="username">Логин:</label>
	<input type="text" name="username"><br>
	<label for="password">Пароль:</label>
	<input type="password" name="password"><br>
	<button type="submit" name="submit">Вход</button><br>
	<a href="registr.php">Регистрация</a>
	</form>
<?php
}
else {
	?>
	<p><a href="index.php">Главная страница</a></p>
	<p><a href="exit.php">Выйти(<?php echo $_COOKIE['username']; ?>)</a></p>
<?php	
}
?>
</section>
<div id="wrapper">
	<div id="featured-wrapper">
		<div id="featured" class="extra2 margin-btm container">
			<div class="main-title">
				</div>
	</div>
  </div>
</div>
<div id="copyright" class="container">
	<p>Здесь могла бы быть ваша реклама,но вы мне не заплатили!</p>
</div>
</body>
</html>
