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
		height: 660px;
		width: 900px;
		margin-top: 5px; 
		border:3px dashed #000;
	}
	body{
			font-family:楷体;
		}
		td{
			font-size:14px;
		}
	</style>
	<script language="javascript"> 
      function IsDigit(cCheck) 
      { 
      return (('0'<=cCheck) && (cCheck<='9')); 
      } 

      function IsAlpha(cCheck) 
      { 
      return ((('a'<=cCheck) && (cCheck<='z')) || (('A'<=cCheck) && (cCheck<='Z'))) 
      } 

      function IsValid() 
      { 
      var struserName = reg.UserName.value; 
      for (nIndex=0; nIndex<struserName.length; nIndex++) 
      { 
      cCheck = struserName.charAt(nIndex); 
      if (!(IsDigit(cCheck) || IsAlpha(cCheck))) 
      { 
      return false; 
      } 
      } 
      return true; 
      } 
      function chkEmail(str) 
      { 
      return str.search(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/)==0?true:false 
      }

      function docheck() 
      { 
        if(reg.Email.value =="") 
        { 
          alert("请输入您的邮箱"); 
          return false; 
        } 
        else if(!chkEmail(reg.Email.value)) 
        { 
          alert("请输入正确的邮箱地址"); 
          return false; 
        }
        else 
        { 
        return true; 
        } 
      } 
    </script>
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
	<a href="./showcontact.php">查看留言</a><br>
	<form action="actioncontact.php?action=add" method="post" onsubmit="return docheck()" method="post" enctype="multipart/form-data" target="_self" name="reg">	
		<table>
			<tr>
				<td align="right">标题:</td>
				<td><input type="text" name="Subject"/></td>
			</tr><br>
			<tr>
				<td  align="right">学号:</td>
				<td>
					<input type="text" name="UserName" id="num"/>
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
				<td  align="right">邮箱:</td>
				<td><input type="email" name="Email" class="input-block" placeholder="" class="input-block" id="login_field" tabindex="2" type="text"></td>
			</tr>
			<tr>
				<td  align="right" valign="top">内容:</td>
				<td><textarea name="Body" cols="80" rows="20"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input class="button" name="sub" tabindex="3" type="submit" value="提交">
					<input type="reset" value="重置"></input>
				</td>
			</tr>
		</table>
	</form>
</div></center>
</body>
</html>
<?php include("footer.php") ?>