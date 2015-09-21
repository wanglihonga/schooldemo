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
	 <meta name="msapplication-TileImage" content="/windows-tile.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <link rel="icon" type="image/x-icon" href="img/favicon.ico">
  <link href="css/github-0f5611c27a5a2a6928dc6e99d63581265b963e34.css" media="all" rel="stylesheet" type="text/css">
  <link href="css/github2-6102d7944435d804d870f38bf20f1e16fe40a4d0.css" media="all" rel="stylesheet" type="text/css">
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
    <style type="text/css">
	#content{
		height: 500px;
		width: 900px;
		margin-top: 5px; 
		border:3px dashed #000;
	}</style>
</head>
<body>
<center><div id="content">
<div class="wrapper">
  <div class="site clearfix">
    <div id="site-container" class="context-loader-container" data-pjax-container="">
      <div class="auth-form" id="login">
        <form accept-charset="UTF-8" action="actionlogin.php" method="post" enctype="multipart/form-data" target="_self" onsubmit="return docheck()" name="reg"><!--session-->
          <div style="margin:0;padding:0;display:inline">
            <input name="authenticity_token" type="hidden" value="Rcdhc2nTlv38jliTa+dmk543WHixlWsb9SJAxGY68MY=">
          </div>
          <div class="auth-form-header">
            <h1>登  陆</h1>
          </div>
          <div class="auth-form-body">
            <label for="login_field">
              输入您的邮箱<br>
            </label>
            <input type="email" name="Email" class="input-block" placeholder="请输入您的邮箱" class="input-block" id="login_field" tabindex="2" type="text">
            <label for="password">
              登录密码
            </label>
            <input class="input-block" id="password" tabindex="2" type="password" name="UserPassword" class="textfield" placeholder="请输入您的密码">
            <input class="button" name="sub" tabindex="3" type="submit" value="登陆">
            <a href="regist.php"><input class="button" name="reg" tabindex="" type="" value="注册" style="width:62px;"></a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- /.wrapper -->
</div></center>
</body>
</html>
<?php include("footer.php") ?>