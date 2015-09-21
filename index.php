<?php 
  session_start();
?>
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
  <?php include("daohang.php"); ?>
  <!--导航栏结束--> 
  <div class="body_container" style="height: 605px"> 
   <div class="section_1"> 
    <div class="mailquery_container">
     <b>内容更新</b> 
     <span>
       <li>
         <ul>1.网站开通学生信息查询功能</ul>
         <ul>2.网站开通学生信息录入功能</ul>
         <ul>3.网站设置学生可登陆、注册服务</ul>
         <ul>4.可以浏览学院基本概况</ul>
         <ul>5.增加学院联系方式</ul>
       </li>
     </span>
    </div> 
    <div class="slider_container"> 
     <div id="slide-header"> 
      <div class="slide-wrap"> 
       <div id="slide-holder"> 
        <div id="slide-runner"> 
         <a href="#"> <img id="slide-img-1" alt="" class="slide" src="./img/img7.png" style="left: -1000px; display: inline;" /></a> 
         <a href=""> <img id="slide-img-2" alt="" class="slide" src="./img/img1.png" style="left: 0px; display: inline;" /></a> 
         <a href="" target="_blank"> <img id="slide-img-3" alt="" class="slide" src="./img/index_mobile.jpg" style="left: 1000px; display: inline;" /></a> 
         <a href=""> <img id="slide-img-4" alt="" class="slide" src="./img/img2.png" style="left: 2000px; display: inline;" /></a> 
         <a href=""> <img id="slide-img-5" alt="" class="slide" src="./img/img3.png" style="left: 3000px; display: inline;" /></a> 
         <a href="#"> <img id="slide-img-6" alt="" class="slide" src="./img/img8.png" style="left: -2000px; display: inline;" /></a> 
         <div id="slide-controls" style="display: block;"> 
          <p id="slide-client" class="text"><strong></strong> <span></span></p> 
          <p id="slide-desc" class="text"></p> 
          <p id="slide-nav"><a id="slide-link-0" href="#" onclick="slider.slide(0);return false;" onfocus="this.blur();" class="">1</a><a id="slide-link-1" href="#" onclick="slider.slide(1);return false;" onfocus="this.blur();" class="">2</a><a id="slide-link-2" href="#" onclick="slider.slide(2);return false;" onfocus="this.blur();" class="on">3</a><a id="slide-link-3" href="#" onclick="slider.slide(3);return false;" onfocus="this.blur();" class="">4</a><a id="slide-link-4" href="#" onclick="slider.slide(4);return false;" onfocus="this.blur();" class="">5</a><a id="slide-link-5" href="#" onclick="slider.slide(5);return false;" onfocus="this.blur();" class="">6</a></p> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   <div> 
    <div class="box_1"> 
     <span></span>
     <b>功能介绍</b>
       <li>
         <ul>学生信息查询功能</ul>
         <ul>学生信息录入功能</ul>
         <ul>学院展示</ul>
         <ul>学生用户登陆注册功能</ul>
       </li>
    </div> 
    <div class="box_3"> 
     <span></span> 
     <div class="news_header"> 
      <a href="#">更多新闻</a> 
     </div> 
     <div class="news_body"> 
      <ul id="news"> 
       <li><a class="news_title" href="#">网站开通时间另行通知，敬请关注！</a><p class="news_date">2014-01-15</p></li> 
       <li><a class="news_title" href="#">网站开通时间另行通知，敬请关注！</a><p class="news_date">2014-01-07</p></li> 
       <li><a class="news_title" href="#">网站开通时间另行通知，敬请关注！</a><p class="news_date">2014-01-02</p></li> 
       <li><a class="news_title" href="#">网站开通时间另行通知，敬请关注！</a><p class="news_date">2013-12-27</p></li> 
       <li><a class="news_title" href="#">网站开通时间另行通知，敬请关注！</a><p class="news_date">2013-12-26</p></li> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <div class="section_3"> 
    <div class="box_5" style="margin-left: -3px;"> 
     <img alt="" src="./img/index_finalV10_64_20131126.png" usemap="#Map" width="100%" height="115px" />
    </div> 
   </div> 
   <div class="body_footer"> 
    <div class="bottom_container"> 
     <p class="bottom_text">版权所有：Coralcarol [京ICP证0306211号] 京公网安备[11040140018411]</p> 
    </div> 
    <br /> 
   </div>  
  </div>
 </body>
</html>