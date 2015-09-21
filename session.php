<?php
if(!array_key_exists("Email",$_SESSION))
{
 echo"<a href='login.php'>登陆</a>";
 echo "//";
 echo"<a href='regist.php'>注册</a>";
}else{
  $rest1 = substr($_SESSION['Email'],0,1);
  $rest2 = substr($_SESSION['Email'],-2);
  echo "<a href='NewsSearch.php'>$rest1...$rest2</a>";//$rest为截取字符，功能为截取了需要展示的邮箱的3个字符空位进行展示，避免了邮箱过长引起页面错位
  echo "//";
  echo "<a href='session_destroy.php'>注销</a>";
  //session_destroy("<div class='header-actions'><a class='button Logout'>Logout</a></div>");
}
?>