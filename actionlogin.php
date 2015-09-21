<html>
<head>
	<META content="text/html; charset=utf-8" http-equiv=Content-Type>
	<link href="img/favicon.ico" type="image/x-icon" rel="shortcut  icon" /> 
	<title>学生信息管理系统</title>
</head>
<body>
<?php
error_reporting(0);
$mysql_servername = "localhost"; //主机地址
$mysql_username = "root"; //数据库用户名
$mysql_password =""; //数据库密码
$mysql_database ="studentsN"; //数据库
$con = mysql_connect($mysql_servername , $mysql_username , $mysql_password);
mysql_select_db($mysql_database); 
$Email=$_POST['Email'];
$UserPassword=md5($_POST['UserPassword']);

if ($Email && $UserPassword){
	$sql = "SELECT Email FROM customs WHERE Email = '$Email' and UserPassword = '$UserPassword'";
	$res = mysql_query($sql);
	$row = mysql_fetch_assoc($res);
	if($row['Email']==$Email){
		session_start();
		$_SESSION['Email']=$Email;
		echo "<script>alert('恭喜您成功登陆!')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}
	else{
		echo "<script>alert('对不起，登录失败，请重新登录！')</script>";
		echo "<script>window.location.href='login.php'</script>";
	}
	//session_destroy();
}
//设置email为true，验证用户是否登陆
$posts = $_POST;
foreach ($posts as $key => $value) {
	$posts[$key] = trim($value);
}
$UserPassword = md5($posts["UserPassword"]);
$Email = $posts["Email"];

$query = "SELECT `Email` FROM `customs` WHERE `UserPassword` = '$UserPassword' AND `Email` = `$Email`";

$userInfo = $DB->getRow($query);

if (!empty($userInfo)) {
	session_start();
	$_SESSION['Email'] = true;
}else{
	die("die !");
}

?>
</body>
</html>