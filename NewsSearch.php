<?php 
	error_reporting(0); 
	session_start();
	// echo "string";
	//  防止全局变量造成安全隐患
	$Email = false;
	//  启动会话，这步必不可少
	session_start();
	//  判断是否登陆
	if (isset($_SESSION['Email'])) {
	} else {
		//  验证失败，将 $_SESSION["Email"] 置为 false
		unset($_SESSION['Email'] );
		print_r('Email');
		die("您无权访问");
	}
?>
<?php include("daohang.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	#content{
		height: 500px;
		width: 900px;
		margin-top: 5px; 
		border:3px dashed #000;
	}
	.auto-style1{
        width: 600px;
        height: 25px;
        background-color: #CAFF70;
        float: left;
        text-align: center;
    }
    .auto-style2{
    	background-color: #CAFF70;
    }
	</style>
</head>
<body>
<center>
<div id="content">
	<div>
		<center>
			<font size="+2" color="blue"><b>个人信息查询</b></font><br>
		</center>
	</div>
	<div>
		<div style="background-color:#CAFF70">序&nbsp列 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 学&nbsp号 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp年&nbsp份 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp月&nbsp份 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp学&nbsp期 &nbsp&nbsp</div>
		<div>
			<?php
	            error_reporting(0);
	            include("dbconfig.php");
	            $conn = mysql_connect("localhost","root","");
	            mysql_select_db("studentsN",$conn);
	            // mysql_query("set names gbk_chinese_ci");
	            $Conn = mysqli_connect(HOST,USER,PASS,DBNAME) or die("Error " . mysqli_error($Conn));
	            mysql_select_db('studentsN');
	            $sql = mysql_query("SELECT * FROM News order by id limit 18 ");

	            echo "<center><div><table align='center' cellpadding='0' class='auto-style2'>";

	            while($field = mysql_fetch_field($sql))
	                // echo "<td class='auto-style1'>&nbsp;".$field->name."&nbsp;</td>";//读出字段名
	            while ( $row = mysql_fetch_array($sql))
	                    echo "<tr><td class='auto-style1'>$row[0]</td><td class='auto-style1'>$row[1]</td><td class='auto-style1'>$row[2]</td><td class='auto-style1'>$row[3]</td><td class='auto-style1'>$row[4]</td></tr>";//读取数据
	            echo "</table></center>";
	            mysql_close($conn);
	        ?>
	    </div>
	</div>
</div>
</center>
</body>
</html>
<?php include("footer.php") ?>