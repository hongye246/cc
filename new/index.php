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
<!DOCTYPE HTML>
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
     <li><a href='index.php<?php if($act) echo '?'.$act; ?>'class="cur"><span>首页</span>INDEX</a></li>
     <li><a href='download.php<?php if($act) echo '?'.$act; ?>'><span>下载中心</span>DOWNLOAD</a></li>
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
      <li><a href="<?php echo $url;?>?client=ios<?php if($act) echo '&'.$act; ?>" target='_blank' title='下载iPhone'><img src="images/icon_iphone.png" /><p>iPhone</p></a></li>
      <li><a href="<?php echo $url;?>?client=android<?php if($act) echo '&'.$act; ?>" target='_blank' title='下载Android'><img src="images/icon_android.png" /><p>Android</p></a></li>
      <li><img src="images/erweima<?php echo $png; ?>.png" width='79' height='79'/></li>
     </ul>
  </div>
 </div>
 </div>
 
 <div class=" notice">
 <div class=" box clear">
     <div class="notice_info">
     <p class='p_n'>好玩 <img src="images/icon_circle.png" />&nbsp;<img src="images/text_amusing.png" /></p>
     <p>多种合理刺激的游戏玩法，轻松，娱乐，疯狂</p>
      <p><img src="images/pic_amusing.jpg" width="300"/></p>
     </div>
     
        <div class="notice_info">
     <p class='p_n'>轻松 <img src="images/icon_circle.png" />&nbsp;<img src="images/text_relaxed.png" /></p>
     <p>一款全休闲合并的欢乐游戏！让你轻松度过游戏的世界！</p>
      <p><img src="images/pic_relaxed.jpg" width="300"/></p>
     </div>
     
      <div class="notice_info">
     <p class='p_n'>趣味 <img src="images/icon_circle.png" />&nbsp;<img src="images/text_interest.png" /></p>
     <p>酷炫画面，奖励丰富，俏皮可爱，趣味性高，老少皆宜</p>
      <p><img src="images/pic_interest.jpg" width="300"/></p>
     </div>
 </div>
</div>

 <div class='box m_link'>
 <span>合作伙伴：</span> <a href="http://www.xyzs.com/" target="_blank"><img src="images/partner_1.jpg" class='img'/></a><a href="http://www.iphonecake.com/" target="_blank"><img src="images/partner_2.jpg" class='img'/></a>
 <br/><br/>

<span>友情链接：</span> <a href="http://www.ipadown.com/search.php?keyword=名车老虎机" target="_blank">苹果i派党</a><a href="http://ios.d.cn" target="_blank">当乐网</a><a href="http://www.shouyou520.com" target="_blank">爱手游</a><a href="http://www.appgame.com/" target="_blank">任玩堂</a><a href="http://www.app111.com/info/922406553/" target="_blank">苹果园</a><a href="http://www.72g.com/mclhj/"target="_blank">72G手游网</a><a href="http://bbs.ptbus.com/" target="_blank">口袋巴士</a><a href="http://www.appying.com" target="_blank">APP营销推广分享</a><a href="http://games.bufan.com/info/32662.html" target="_blank">不凡游戏</a><a href="http://www.15153.com" target="_blank">15153手机游戏网</a><a href="http://www.5g.com/game/93001.html" target="_blank">5G手游</a>
</div>

</div>

<div id="foot" >
<div class=box>
    <p class=p1><a href='index.php'>返回首页&nbsp;&nbsp;|</a>
    <a href='download.php'>&nbsp;下载中心&nbsp;&nbsp;|</a>
    <a href='question.php'>&nbsp;常见问题&nbsp;&nbsp;|</a> 
    <a href='contact.php'>&nbsp;联系我们</a></p>
     <p class=p2>增值电信业务许可证 浙B2-20140728 COPYRIGHT © 2014 MOREDOO</p>
 </div>
</div>
<script>
$(function(){
	$(".content >img").mouseover(function(){
		$(this).attr("title","点击进入下载详情页面");
		$(this).css("cursor","pointer");
	});
	$(".content>img").click(function(){
		window.location.href="download-x.php<?php if($act) echo '?'.$act; ?>";
	})
})

</script>
</body>
</html>
