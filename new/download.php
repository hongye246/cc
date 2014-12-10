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
$url='http://ios.yyport.com/view/down/parse';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>名车老虎机下载</title>
<link href="css/down.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="css/jquery.min.js"></script>
</head>

<body>
 <div id="top"> 
 <div class="box clear">
    <div  class="left  logo"><img src="images/logo.png" class=""/></div>
  
   <div  class="right">
   <ul>
     <li><a href='index.php<?php if($act) echo '?'.$act; ?>'><span>首页</span>INDEX</a></li>
     <li><a href='download.php<?php if($act) echo '?'.$act; ?>' class="cur"><span>下载中心</span>DOWNLOAD</a></li>
     <li><a href='question.php<?php if($act) echo '?'.$act; ?>'><span>常见问题</span>Q＆A</a></li>
     <li><a href='contact.php<?php if($act) echo '?'.$act; ?>'><span>联系我们</span>CONTACT</a></li>
     </ul>
   </div>
 </div>
</div>
<!--正文部分  -->
<div id="container">
<div class="box "><p class=down3>经典版名车老虎机</p></div>
<div class="clear height0">
 <div  class="left down_L">
    <div class="down_content">
       <p class="d1">iPhone v1.0.1</p>
       <p class="d2">发布时间：2014-10-15</p>
       <p class="d3"><a href='<?php echo $url;?>?client=ios<?php if($act) echo '&'.$act; ?>' target='_blank'><img src="images/icon_iphone.png" />&nbsp;立即下载</a></p>
       <p class="d4"><img src="images/erweima<?php echo $png; ?>.png" width='121' height='121'/></p>       
   </div>
 </div>
  
   <div  class="right down_R">
  <div class="down_content">
       <p class="d1">Android v1.2.0</p>
       <p class="d2">发布时间：2014-7</p>
       <p class="d3"><a href='<?php echo $url;?>?client=android<?php if($act) echo '&'.$act; ?>' target='_blank'><img src="images/icon_android.png" />&nbsp;立即下载</a></p>
       <p class="d4"><img src="images/erweima<?php echo $png; ?>.png" width='121' height='121'/></p>       
   </div>
   </div>
   
</div>

</div>

<div id="foot" >
<div class=box>
   <p class=p1><a href='index.php'>返回首页&nbsp;&nbsp;|</a>
    <a href='download.php'>&nbsp;下载中心&nbsp;&nbsp;|</a>
    <a href='question.php'>&nbsp;常见问题&nbsp;&nbsp;|</a> 
    <a href='contact.php'>&nbsp;联系我们</a></p>
      <p>增值电信业务许可证 浙B2-20140728 COPYRIGHT © 2014 MOREDOO</p>
 </div>
</div>
<script>
$(function(){
	$(".height0  :not(a)").mouseover(function(){
		$(this).attr("title","点击进入下载详情页面");
	});
	$(".height0  :not(a)").click(function(){
		window.location.href="download-x.php<?php if($act) echo '?'.$act; ?>";
	})
})

</script>
</body>
</html>
