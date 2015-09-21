<?php
	require("dbconfig.php");
	$link = mysql_connect("localhost","root","");
	mysql_select_db("studentsN",$link);
	mysql_query("set names gbk_chinese_ci");

//获取action参数的值，并做对应的操作
	switch($_GET["action"]){
		case "add": //添加
			//1. 获取添加信息
			$UserN 	= $_POST["UserN"];
			$year	= $_POST["year"];
			$mouth  = $_POST["mouth"];
			$day  = $_POST["day"];
			$CJ  = $_POST["CJ"];
			$addtime = time();
			
			if($UserN){
				$sql ="SELECT * FROM customs WHERE UserN ='$UserN'";
				$res = mysql_query($sql);
				$row = mysql_fetch_assoc($res);
					$sql = "insert into `News` values(null,'$UserN','$year','$mouth','$day','$CJ','$addtime')";
					$res=mysql_query($sql,$link);
					//session_start();

					echo "<script>alert('恭喜您录入成功!')</script>";
					echo "<script>window.location.href='NewsSearch.php'</script>";
				// }
			}
	}
//四、关闭数据库
	mysql_close($link);
?>