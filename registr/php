<?php 
$dbc = mysqli_connect('localhost', 'root', '', 'lesson') OR DIE('Ошибка подключения к базе данных'); 
if(isset($_POST['submit'])){ 
$username = mysqli_real_escape_string($dbc, trim($_POST['username'])); 
$password1 = mysqli_real_escape_string($dbc, trim($_POST['password1'])); 
$password2 = mysqli_real_escape_string($dbc, trim($_POST['password2'])); 
if(!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) { 
$query = "SELECT * FROM `signup` WHERE username = '$username'"; 
$data = mysqli_query($dbc, $query); 
if(mysqli_num_rows($data) == 0) { 
$query ="INSERT INTO `signup` (username, password) VALUES ('$username', SHA('$password2'))"; 
mysqli_query($dbc,$query); 
echo 'Всё готово, можете авторизоваться<br> <a href="auth.php"><p>Авторизоваться</p></a>'; 
mysqli_close($dbc); 
exit(); 
} 
else { 
echo 'Логин уже существует'; 
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
			
  <ul>
    <li><a href="index.html">Главная страница</a></li>
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
			<p>Вы находитесь на странице авторицации и входа!</p>

		</div>
	</div>
</div>
<div id="wrapper">
	<div id="featured-wrapper">
		<div id="featured" class="extra2 margin-btm container">
			<div class="main-title">
  <content>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label  for ="username">Введите ваш логин:</label>
  <input type="text" name="username"><br>
  <label  for ="password">Введите ваш пароль:</label>
  <input type="password" name="password1"><br>
  <label  for ="password">Введите ваш пароль еще раз:</label>
  <input type="password" name="password2">
  <button type="submit" name="submit">Вход</button>
  </form>
  </content>
				</div>
	</div>
  </div>
</div>
<div id="copyright" class="container">
	<p>Здесь могла бы быть ваша реклама,но вы мне не заплатили!</p>
</div>
</body>
</html>
