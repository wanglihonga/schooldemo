<html>
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=8" /> 
  <meta content="no-cache" http-equiv="pragma" /> 
  <meta content="no-store, must-revalidate" http-equiv="cache-control" /> 
  <meta content="0" http-equiv="expires" /> 
  <link href="./css/global_max.css" rel="stylesheet" type="text/css" /> 
  <link href="./css/index.css" rel="stylesheet" type="text/css" /> 
  <link href="./css/index_body.css" rel="stylesheet" type="text/css" /> 
  <link href="./css/footer.css" rel="stylesheet" type="text/css" /> 
  <script src="./js/hm.js"></script> 
  <script src="./js/jquery-1.6.2.js" type="text/javascript"></script> 
  <script src="./js/menu.js" type="text/javascript"></script> 
  <script type="text/javascript" src="./js/script.js"></script> 
  <script type="text/javascript" src="./js/style.js"></script> 
  <script type="text/javascript">
  $(document).ready(function(){
    $("#appleQuery").change(function(event){
      var id = $("#appleQuery")[0].selectedIndex;
      if (id==1)
      {window.location.href="http";}
      else if(id==2)
      {window.location.href="http";}
      else if(id==3)
      {window.location.href="http";}
    });
    
    $("#vercod").find("span:first").click(function(){
      $(this).parent().parent().hide();
    })
  });  
  
  if(!window.slider) var slider={};
    slider.data=[
      {"id":"slide-img-6","client":"","desc":""},
      {"id":"slide-img-1","client":"","desc":""},
      {"id":"slide-img-2","client":"","desc":""},
      {"id":"slide-img-3","client":"","desc":""},
      {"id":"slide-img-4","client":"","desc":""},
      {"id":"slide-img-5","client":"","desc":""}];
</script> 
  <title>学院学生信息系统</title> 
  <style type="text/css">
  .auto-style1 {
  text-align: right;
  }
  </style> 
 </head> 
 <body id="body-img"> 
  <div class="top-header"> 
   <div class="top-banner"> 
    <div class="top-banner-img"> 
    </div> 
   </div> 
   <div class="flash-banner"> 
    <a target="_blank" href="#"> <img alt="" src="./img/10.jpg" width="900px" height="197px" /> </a> 
   </div> 
   <div class="main-menu"> 
    <ul class="topnav"> 
     <li itemid="#fb4f28" style="background: #F1F1F1"> <a href="index.php"> 
       <div> 
        <span><font color="#fb4f28">首页</font></span> 
       </div> </a> </li> 
     <li itemid="f2d2bc" style="background-color: rgb(242, 210, 188); background-position: initial initial; background-repeat: initial initial;"> 
      <div> 
       <span style="color: black;">学院概况</span> 
      </div> 
      <ul class="subnav" style="display: none;"> 
       <li><a href="aboutschool.php">学院简介</a></li> 
       <li><a href="tese.php">办学特色</a></li> 
       <li><a href="jiangjin.php">奖学金</a></li>
      </ul></li> 
     <li itemid="fe9f6e" style="background-color: rgb(254, 159, 110); background-position: initial initial; background-repeat: initial initial;" class="auto-style1"> 
      <div> 
       <span style="color: black;">学生信息</span> 
      </div> 
      <ul class="subnav" style="display: none;"> 
       <li><a href="NewsPutin.php">信息录入</a></li> 
       <li><a href="NewsSearch.php">信息查询</a></li>
      </ul> </li> 
     <li itemid="fd874a" style="background-color: #fd874a"> 
      <div> 
       <span><a href="jiuye.php">就业咨询</a></span> 
      </div> </li> 
     <li itemid="f9872a" style="background-color: #f9872a"> 
      <div> 
       <span><a href="contact.php">留言</a></span> 
      </div></li> 
     <li itemid="fc7728" style="background-color: #fc7728"> 
      <div> 
       <span><a href="login.php"><?php include("./session.php"); ?></a></span> 
      </div></li> 
     <li itemid="fb4f28" style="background-color: #fb4f28"> 
      <div> 
       <span><a href="others.php">其他通知</a></span> 
      </div> </li>
    </ul> 
   </div> 
  </div> 
  <!--导航栏结束--> 
  </body>