<?php
	require("dbconfig.php");
	$link = mysql_connect("localhost","root","");
	mysql_select_db("studentsN",$link);
	mysql_query("set names gbk_chinese_ci");

//获取action参数的值，并做对应的操作
	switch($_GET["action"]){
		case "add": //添加
			//1. 获取添加信息
			$UserName 	= $_POST["UserName"];
			$UserN 	= $_POST["UserN"];
			$UserY	= $_POST["UserY"];
			$UserZ  = $_POST["UserZ"];
			$UserB  = $_POST["UserB"];
			$Email  = $_POST["Email"];
			$UserPassword 	= md5($_POST["UserPassword"]);
			$addtime = time();
			
			//验证邮箱是否被注册
			if($Email){
				$sql ="SELECT * FROM customs WHERE Email ='$Email'";
				$res = mysql_query($sql);
				$row = mysql_fetch_assoc($res);
				if($row['{Email}']==$Email){
					echo "<script>alert('对不起，您输入的邮箱已经被注册请重新输入!')</script>";
					echo "<script>window.location.href='regist.php'</script>";
				}
				else{
					$sql = "insert into `customs` values(null,'$UserName','$UserN','$UserY','$UserZ','$UserB','$Email','$UserPassword','$addtime')";
					$res=mysql_query($sql,$link);
					//session_start();
					$_SESSION['Email']=$Email;

					echo "<script>alert('恭喜您注册成功!')</script>";
					echo "<script>window.location.href='index.php'</script>";
				}
			}
	}
//四、关闭数据库
	mysql_close($link);
?>