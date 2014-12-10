<?php 
$act=$png='';
if($_GET['hzq']){
	$act.="&hzq={$_GET['hzq']}";
	$png.="_{$_GET['hzq']}";
	}
if (isset ( $_GET ['appstore'] )){
	$act .= "&appstore={$_GET['appstore']}";	
   if($_GET ['appstore']==0||$_GET ['appstore']=='false')
   $png.='_0';
 }
$act=substr($act,1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>名车老虎机下载</title>
<link href="css/down.css" rel="stylesheet" type="text/css" />
</head>

<body>
 <div id="top"> 
 <div class="box clear">
   <div  class="left  logo"><img src="images/logo.png" class=""/></div>
  
   <div  class="right">
   <ul>
     <li><a href='index.php<?php if($act) echo '?'.$act; ?>'><span>首页</span>INDEX</a></li>
     <li><a href='download.php<?php if($act) echo '?'.$act; ?>'><span>下载中心</span>DOWNLOAD</a></li>
     <li><a href='question.php<?php if($act) echo '?'.$act; ?>'><span>常见问题</span>Q＆A</a></li>
     <li><a href='contact.php<?php if($act) echo '?'.$act; ?>' class="cur"><span>联系我们</span>CONTACT</a></li>
     </ul>
   </div>
 </div>
</div>
<!--正文部分  -->
<div id="container">
<div class="contact"><img src="images/banner_contact.jpg" class="banner"/>
<div class="box ">
     <p class="name">联系我们</p>
      <p class="name2">CONTACT US</p>
</div>
</div>

<div class="clear contact2">
   <div class="contact_content clear">
     <img src="images/icon_zxfw.png" class="left img"/>
    <ul>
      <li><h1>在线服务</h1></li>
     <li><span>工作时间：</span> 9:00--18:00</li>
     <li><span>客服QQ：</span>2193523131</li>
     <li><img src="images/icon_QQ.png" /></li>
     </ul>
   </div>
   
  <div class="contact_content clear">
     <img src="images/icon_swhz.png" class="left  img"/>
    <ul >
      <li><h1>商务合作</h1></li>
     <li><span>电话：</span>0571-89939849</li>
     <li><span>邮箱：</span>business@moredoo.com</li>
     </ul>
   </div>
  
<div class="contact_content clear">
     <img src="images/icon_jrwm.png" class="left  img"/>
    <ul>
      <li><h1>加入我们</h1></li>
     <li><span>电话：</span>0571-89939849</li>
     <li><span>邮箱：</span>zhaopin@moredoo.com</li>
     </ul>
   </div>
   
</div>

<div class="contact3">
<div class="erweima">
<div class=" left">
   <img src="images/erweima_weixin.jpg" width='215' height='215'/>
    <p>扫描关注<span>官方微信</span></p>
</div>

<div class=" right">
   <img src="images/erweima_weibo.png" width='215' height='215'/>
    <p>扫描关注<a href='http://weibo.com/imoredoo' target='blank'>新浪微博</a></p>
</div>
</div>
</div>
</div>

<div id="foot" >
<div class="box">
     <p class=p1><a href='index.php'>返回首页&nbsp;&nbsp;|</a>
    <a href='download.php'>&nbsp;下载中心&nbsp;&nbsp;|</a>
    <a href='question.php'>&nbsp;常见问题&nbsp;&nbsp;|</a> 
    <a href='contact.php'>&nbsp;联系我们</a></p>
    <p>增值电信业务许可证 浙B2-20140728 COPYRIGHT © 2014 MOREDOO</p>
 </div>
</div>
</body>
</html>
