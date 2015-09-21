<?php 
  session_start();
?>
<?php 
include("daohang.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	#content{
		height: 725px;
		width: 900px;
		margin-top: 5px; 
		border:3px dashed #000;
	}
	#font{
		width: 680px;
		height: 180px;
	}
	#imglook{
		width: 100%;
		height: 20px;
		float: left;
	}
	</style>
</head>
<body>
<center>
<div id="content">
	<div>
		<center>
			<font size="+2" color="blue"><b>学院简介</b></font><br>
			<img src="./img/about/1.png" width="600px" height="400px;"><br>
		</center>
	</div>
	<br>
	<div id="font">
		<span style{float:left;}> 
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp成都东软学院（学院在川招生代码：5177；在渝招生代码：5167）是经教育部批准设立，由东软联合亿达投资创办的一所以工学为主，兼办管理学、人文学等学科专业的二批次民办普通高等本科院校。学院开展普通全日制本、专科教育，招生纳入国家普通高等学校招生计划。目前，全日制在校生9000余名。<br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp学院位于成都市郊的世界文化遗产——都江堰-青城山风景区，校园独具川西园林特色，占地面积近40万平方米，总建筑面积约17万平方米。学院依托东软集团IT优势及在成都独特的IT布局，拥有一流的软硬件环境和国际化的师资队伍，并构建了产学合作、面向应用的TOPCARES-CDIO人才培养模式，获得了社会各界的广泛认可。
        </span>
	</div>
	<div id="imglook">
		<img src="./img/about/1-2.png"><img src="./img/about/1-3.png">
	</div>
</div>
</center>
</body>
</html>
<?php 
include("footer.php"); ?>