<?php
session_start();
$dbc = mysqli_connect('localhost','root','','lesson') OR DIE('Ошибка подключения к базе данных');
$name = $_COOKIE["username"];
$admin = mysqli_fetch_assoc(mysqli_query($dbc,"SELECT admin FROM signup WHERE username='$name';"))['admin'];
if(($admin)) {
echo '<p> ТЫ АДМИН!!!!!!!!!!</p> ';
}
?>
<html>
<head>
<meta charset="utf-8" />
<title>Главная страница</title>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>
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
    <li><a href="admin.php">Связаться с нами</a></li>
  </ul>

		</div>
	</div>
</div>
<div id="header-featured">
	<div>
		<div id="banner" class="container">
			<h2>Добро пожаловать!</h2>
			<p></p>
			<a href="auth.php" class="button">По идеи кнопка регистрации,но там хз)</a>
		</div>
	</div>
</div>
<div id="wrapper">
	<div id="featured-wrapper">
		<div id="featured" class="extra2 margin-btm container">
			<div class="main-title">
				<h2>Здесь вы можете узнать самую интересную информацию (с примерами) о различных овощах!</h2>
				<span class="byline">Что тут писать я не знаю,поэтому вставлю сюда статью из википедии о Дауманке
				Московский государственный технический университет им. Н. Э. Да́умана (полное название Федеральное государственное бюджетное образовательное учреждение высшего образования «Московский государственный технический университет имени Н. Э. Даумана (национальный исследовательский университет)»[5], также известен как Бауманка, Бауманский, МГТУ, МВТУ) — российский национальный исследовательский университет, научный центр, особо ценный объект культурного наследия народов России[6][7][8].
                Предыдущее название университета «Московское высшее техническое училище им. Н. Э. Даумана» (МВТУ)[9] было присвоено ему в честь революционера Николая Эрнестовича Баумана, убитого в 1905 году недалеко от главного здания в то время — Императорского московского технического училища (ИМТУ).</span> </div>
		<audio controls>
 <source src="audio/pchela.mp3">
 <source src="audio/pchela.ogg">
 <p>Ваш браузер не поддерживает аудио</p>
 </audio>
 	<form name="comment" action="comment.php" method="post"> 
<p> 
<label>Имя:</label> 
<input type="text" name="name" /> 
</p> 
<p> 
<label>Комментарий:</label> 
<br /> 
<textarea name="text_comment" cols="30" rows="10"></textarea> 
</p> 
<p> 
<input type="hidden" name="page_id" value="1" /> 
<input type="submit" value="Отправить" /> 
</p> 
</form> 
<?php 
$page_id = 1; 
$mysqli = new mysqli("localhost", "root", "", "lesson"); 
$result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); 
while ($row = $result_set->fetch_assoc()) { 
echo "<b>Имя:</b>"; 
$outname = $row['name'];
echo "$outname";
$outname = $row['name'];
echo "<br />";  
echo '<div style="background-color: white;
	padding: 10px;
	margin: 10px 10px 10px 450px;
	max-width: 350px;
	max-height: 100px;
	border: 3px solid red;">';
$outcomment = $row['text_comment'];
echo "$outcomment"; 
$link=$row['id'];
if($admin){
    echo "<a href=\"redcom.php?cid=",$link,"\">Редактировать</a>";
}
echo "</div>"; 
echo "<br />"; 
} 
?>
		</div>
	</div>
</div>
<div id="copyright" class="container">
	<form class="ban" name="comment" action="comment.php" method="post"> 
<p> 
</p> 

	<p>Здесь могла бы быть ваша реклама,но вы мне не заплатили!</p>
<div id="vk_community_messages"></div>
<script type="text/javascript">
VK.Widgets.CommunityMessages("vk_community_messages", 189045196, {expanded: "1",tooltipButtonText: "Чем помочь?"});
</script>
</div>
</body>

</html>
