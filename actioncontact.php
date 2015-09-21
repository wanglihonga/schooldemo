<?php
//一、导入配置文件和函数库文件
	require("dbconfig.php");
	$link = mysql_connect("localhost","root","");
	mysql_select_db("studentsN",$link);

//二、连接MySQL，选择数据库
	$link = mysql_connect(HOST,USER,PASS) or die("SQL die !");
	mysql_select_db(DBNAME,$link);

//三、获取action参数的值，并做对应的操作
	switch($_GET["action"]){
		case "add": //添加
			//1. 获取添加信息
			$UserN 	= $_POST["UserName"];
			$Email = $_POST["Email"];
			$Subject = $_POST["Subject"];
			$Body 	= $_POST["Body"];
			$addtime = time();
			//2. 验证()省略
			if(empty($Email)){
				die("邮箱不能为空 !");
			}
			//3. 拼装sql语句，并执行添加
			$sql = "insert into contact values('{$UserName}','{$Email}','{$Subject}','{$Body}','{$addtime}')";
			//echo $sql;
			$res=mysql_query($sql,$link);
			
			$count = mysql_affected_rows();
			//6. 判断并输出结果
			if($count>=0){
				echo "<script>alert('发表成功 !')</script>";
				echo "<script>window.location.href='showcontact.php'</script>";
			}
			else{
				//echo ".$sql()";
				echo "<script>alert('发表失败 !')</script>".$sql();
				echo "<script>window.location.href='contact.php'</script>";
			}
			break;
		}
//四、关闭数据库
mysql_close($link);
?>