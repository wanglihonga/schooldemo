<?php 
  session_start();
  // $_SESSION['Email'] = Email;
?>
<?php include("daohang.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
  	<style type="text/css">
	#content{
		height: 260px;
		width: 900px;
		margin-top: 5px; 
		border:3px dashed #000;
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
        else if(reg.UserPassword.value=="") 
        { 
        alert("请输入您的密码"); 
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
			<font size="+2" color="blue"><b>创建您的个人账户</b></font><br>
		</center>
	</div>
	<form action="actionregist.php?action=add" onsubmit="return docheck()" method="post" enctype="multipart/form-data" target="_self" name="reg">	
		<font size="+2" color="blue"><b>
		<table>
			<tr>
				<td align="right">姓名:</td>
				<td><input type="text" name="UserName"/></td>
			</tr><br>
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
				<td align="right">院系:</td>
				<td>
				<select type="text" name="UserY">
					<option value="0">请选择您所在院系</option>
					<option value="Department of computer science and technology">计算机科学技术系</option>
					<option value="Foreign language">外语系</option>
					<option value="Information management system">信息管理系</option>
					<option value="Digital and Art Department">数字艺术系</option>
				</select><!-- <input type="text" name="UserY"/> --></td>
			</tr>
			<tr>
				<td align="right">专业:</td>
				<td><input type="text" name="UserZ"/></td>
			</tr>
			<tr>
				<td align="right">班级:</td>
				<td>
					<select type="text" name="UserB" style="width='40px;'">
					<!-- <input type="text" name="UserB" type="select" /> -->
					<option value="0">请选择您所在班级</option>
					<option value="1班">1班</option>
					<option value="2班">2班</option>
					<option value="3班">3班</option>
					<option value="4班">4班</option>
					<option value="5班">5班</option>
					<option value="6班">6班</option>
					<option value="7班">7班</option>
					<option value="8班">8班</option>
					<option value="9班">9班</option>
					<option value="10班">10班</option>
					</select>
				</td>
			</tr>
			<tr>
				<td  align="right">邮箱:</td>
				<td><input type="email" name="Email" class="input-block" placeholder="" class="input-block" id="login_field" tabindex="2" type="text"></td>
			</tr>
			<tr>
				<td  align="right">密码:</td>
				<td><input type="password" name="UserPassword" maxlength="20" /></td>
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