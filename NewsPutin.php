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
		unset($_SESSION['Email']);
		// die("您无权访问");
		echo "<script>对不起，您无权访问该页面，请登录后访问！</script>";
		echo "<script>windows.onload.location='./login.php'</script>";
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
	}</style>
</head>
<body>
<center>
<div id="content">
	<div>
		<center>
			<font size="+2" color="blue"><b>个人信息录入</b></font><br>
		</center>
	</div>
	<form action="actionNews.php?action=add" onsubmit="return docheck()" method="post" enctype="multipart/form-data" target="_self" name="reg">	
		<font size="+2" color="blue"><b>
		<table>
			<tr>
				<td align="right">学号:</td>
				<td>
					<input type="text" name="UserN" id="num" maxlength="15" />
						<script type="text/javascript">
						    function getId(id){
						        return document.getElementById(id);
						    }
						    var oldValue = ''; 
						    getId('num').onkeyup = function(){ 
						        if(!!this.value && this.value.trim().match(/^(\d+(\.\d*)?)?$/)){    //非法字符回退
						            oldValue = this.value.trim(); 
						        }else {
						            this.value = oldValue; 
						        }
						    }
						    
						    getId('num').onblur = function(){
						        var match = oldValue.match(/^(\d+(\.\d+)?)?$/);
						        this.value = !!match ? match[0] : '';    //不是数字则清空
						    }
						</script>
				</td>
			</tr>
			<tr>
				<td align="right">年份:</td>
				<td>
				<select type="text" name="year">
					<option value="0">请选择年份</option>
					<option value="2012">2012年</option>
					<option value="2013">2013年</option>
					<option value="2014">2014年</option>
					<option value="2015">2015年</option>
					<option value="2016">2016年</option>
					<option value="2017">2017年</option>
					<option value="2018">2018年</option>
					<option value="2019">2019年</option>
					<option value="2020">2020年</option>
					<option value="2021">2021年</option>
				</select></td>
			</tr>
			<tr>
				<td align="right">月份:</td>
				<td>
					<select type="text" name="mouth" style="width='40px;'">
						<option value="0">请选择月份</option>
						<option value="1">1月</option>
						<option value="2">2月</option>
						<option value="3">3月</option>
						<option value="4">4月</option>
						<option value="5">5月</option>
						<option value="6">6月</option>
						<option value="7">7月</option>
						<option value="8">8月</option>
						<option value="9">9月</option>
						<option value="10">10月</option>
						<option value="11">11月</option>
						<option value="12">12月</option>
					</select>
				</td>
			</tr>
			<tr>
				<td align="right">学期:</td>
				<td>
					<select type="text" name="day" style="width='40px;'">
					<option value="0">请选择学期数</option>
					<option value="1">第一学期</option>
					<option value="2">第二学期</option>
					<option value="3">第三学期</option>
					</select>
				</td>
			</tr>
			<tr>
				<td  align="right">成绩:</td>
				<td>
					<input type="text" name="CJ" id="num1" maxlength="5" />
					<script type="text/javascript">
						    function getId(id){
						        return document.getElementById(id);
						    }
						    var oldValue = ''; 
						    getId('num1').onkeyup = function(){ 
						        if(!!this.value && this.value.trim().match(/^(\d+(\.\d*)?)?$/)){    //非法字符回退
						            oldValue = this.value.trim(); 
						        }else {
						            this.value = oldValue; 
						        }
						    }
						    
						    getId('num1').onblur = function(){
						        var match = oldValue.match(/^(\d+(\.\d+)?)?$/);
						        this.value = !!match ? match[0] : '';    //不是数字则清空
						    }
					</script>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input class="button" name="sub" tabindex="3" type="submit" value="注册">
					<input type="reset" value="重置"></input>
				</td>
			</tr>
		</table>
		</b></font>
	</form>
</div>
</center>
</body>
</html>
<?php include("footer.php") ?>