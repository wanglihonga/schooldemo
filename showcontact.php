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
        //  验证失败，将 $_SESSION["admin"] 置为 false
        unset($_SESSION['Email']);
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
		height: 100%;
		width: 900px;
		margin-top: 5px; 
		border:3px dashed #000;
	}
	#show{
    width: auto;
    height: auto;
    /*background: #d7d3d3;*/
    float: left;
    }
    #totle{
    width: 100%;
    height: 32px;
    /*border:#dddbdb solid 1px;*/
    }
    #usern{/*用户名*/
    width: 150px;
    height: 30px;
    float: left;
    background: #d3dad6;
    border:#23b2ed solid 4px;
    border-bottom: #6ba5b8 solid 4px;
    border-right:none; 
    }
    #subject{/*留言标题*/
    width: 396px;
    height: 30px;
    float: left;
    background: #42da7f;
    border:#23b2ed solid 4px;
    border-bottom: #6ba5b8 solid 4px;
    border-left:none; 
    }
    #body{/*留言内容*/
    width: 546px;
    height: 200px;
    background: #fafafa;
    border:#23b2ed solid 4px;
    border-top: none;
    }
    #lastaction{
    height: auto;
    width: 100px;
    position: absolute;
    margin-top: -10px;
    margin-left: 20px;
    float: left;
    }
    /*#action{
    height: auto;
    width: 50px;
    position: relative;
    }*/
    #columns_contactcols{
    width: auto;
    height: auto;
    }
    #columns_contactcolscontent{
    width: 570px;
    height: auto;
    float: left;
    }
    .auto-style1{
        width: 600px;
        height: 25px;
        background-color: #CAFF70;
        float: left;
        text-align: center;
    }
	</style>
</head>
<body>
<center>
<div id="content">
	<div>
		<center>
			<font size="+2" color="blue"><b>留言板</b></font><br>
		</center>
	</div>
	<hr size="1" width="60%">
	<a href="./contact.php">留言</a>
	<a href="./showcontact.php">查看留言</a>
	<table>
        <?php
            error_reporting(0);
            include("dbconfig.php");
            $conn = mysql_connect("localhost","root","");
            mysql_select_db("studentsN",$conn);
            // mysql_query("set names gbk_chinese_ci");
            $Conn = mysqli_connect(HOST,USER,PASS,DBNAME) or die("Error " . mysqli_error($Conn));
            mysql_select_db('studentsN');
            $sql = mysql_query("SELECT * FROM contact order by id DESC limit 28");

            echo "<center><div><table align='center' cellpadding='0' class='auto-style2'>";

            while($field = mysql_fetch_field($sql))
                echo "<td class='auto-style1'>&nbsp;".$field->name."&nbsp;</td>";//读出字段名
            while ( $row = mysql_fetch_array($sql))
                    echo "<tr><td class='auto-style1'>$row[0]</td><td class='auto-style1'>$row[1]</td><td class='auto-style1'>$row[2]</td><td class='auto-style1'>$row[3]</td><td class='auto-style1'>$row[4]</td></tr>";//读取数据
            echo "</table></center>";
            mysql_close($conn);
        ?>
	<table>
</center>
</body>
</html>
<?php include("footer.php") ?>