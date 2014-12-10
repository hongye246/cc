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
<div class="content"><img src="images/banner_index.jpg" class="banner"/>
    <div class="box">
     <div class="down ">
      <p class="name">名车老虎机</p>
      <p class="name2">BRAND CAR SLOT MACHING</p>
       <p class="name3">经典热门电玩游戏，开启名车豪华之旅</p>
       <p class=down2><img src="images/icon_download.png" />&nbsp;下载游戏</p>
       <ul>
      <li><a href="<?php echo $url;?>?client=ios<?php if($act) echo '&'.$act; ?>" target='_blank'><img src="images/icon_iphone.png" /><p>iPhone</p></a></li>
      <li><a href="<?php echo $url;?>?client=android<?php if($act) echo '&'.$act; ?>" target='_blank'><img src="images/icon_android.png" /><p>Android</p></a></li>
      <li><img src="images/erweima<?php echo $png; ?>.png" width='79' height='79'/></li>
     </ul>
  </div>
 </div>
 </div>
 <div class="box">
    <div class="youxibi">
     <img src="images/pic_youxibi.jpg" class="d_img"/> 
     <p class="d_title">游戏免费，金币狂送！</p>
     <p class="d_desc">登陆，破产，活动均可领游戏币！</p>
    </div>
    
     <div class="mission">
     <p class="d_title">全面的任务系统</p>
     <p class="d_desc">新手任务，每日任务，欢送不停！</p>
      <img src="images/pic_mission.jpg" class="d_img"/> 
      <table>
      <tr>
      <td>新手任务　</td>
      <td>新手任务　</td>
      <td>新手任务</td>
      <td>新手任务</td>
      <td>新手任务</td>
      <td>新手任务</td>
      <td>新手任务</td>
      </tr>
      </table>
    </div>
    
    <div class="friend">
    <div class="left friend2">
       <p class="d_title">智能的好友系统</p>
       <p class="d_desc">实时互动私聊，更有多种礼品，礼尚往来！</p>
    </div>
  
      <img src="images/pic_friend.jpg" class="d_img right"/> 
    </div>
    
     <div class="mission">
     <p class="d_title">多种游戏场次</p>
     <p class="d_desc">初级场，中级场，高级场，玩的就是心跳！</p>
      <img src="images/pic_changci.jpg" class="d_img"/> 
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
</body>
</html>
