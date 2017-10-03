<?php
$errors=false;
$username;
if(isset($_POST["submitBtn"])){
	$username = $_POST["username"];
}else{
	$errors=true;
}

if(empty($username)){
	$errors=true;
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>This is the PHP page</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php
if(!$errors){
	echo "Welcome ".$username;
}else{
	echo "There was a problem";
}

?>
</body>
</html>

