<?php
	
session_start();
	
if(isset($_GET['cid'])){	
$cid=$_GET['cid'];
		
$dbc0=mysqli_connect('localhost','root','','lesson');		
$q2="SELECT text_comment FROM comments WHERE id='$cid';";

}
	
if($_POST['docmnt']){
		
$text=$_POST['cmnt'];
		
$q3="UPDATE comments SET text_comment='$text' WHERE id='$cid';";
		
mysqli_query($dbc0,$q3);
	
}


?>

<!DOCTYPE HTML>

<html>

<head>
	
<title>Shok</title>
	
<meta charset="utf-8">
	
<style>
		
input{display:block;}
	
</style>

</head>

<body>
	
<?php
	if(isset($_COOKIE["username"])){
		
$nick=$_COOKIE["username"];
		
$q1="SELECT admin FROM signup WHERE username='$nick';";
		
if(mysqli_fetch_assoc(mysqli_query($dbc0,$q1))['admin']==1){
	
?>
	
<form method="post">
		
<textarea name="cmnt"><?php echo mysqli_fetch_assoc(mysqli_query($dbc0,$q2))['text_comment'];?></textarea>
		
<input type="hidden" name="docmnt" value="1">		
		
<input type="submit" value="update">
	
</form>
	
<a href="index.php"> Выйти </a>
<?php
		
}
	
}

?>

</body>
</html>
