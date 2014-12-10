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
     <li><a href='question.php<?php if($act) echo '?'.$act; ?>' class="cur"><span>常见问题</span>Q＆A</a></li>
     <li><a href='contact.php<?php if($act) echo '?'.$act; ?>'><span>联系我们</span>CONTACT</a></li>
     </ul>
   </div>
 </div>
</div>
<!--正文部分  -->
<div id="container">
<div class="contact"><img src="images/banner_problem.jpg" class="banner"/>
<div class="box ">
     <p class="name">常见问题</p>
      <p class="name2">COMMEN PROBLEM</p>
</div>
</div>

<div class="box">
   <div class="problem_content">
    <p class=ques>名车老虎机收费吗？</p>
    <p class=answer>名车老虎机游戏是免费的，在游戏过程中会产生少量的流量费用，为带来更顺畅的游戏体验，建议您在wifi下运行本游戏。精美绝伦的画面，合理刺激的玩法，动感的背景音乐使这款游戏深受玩家欢迎，游戏易于操作和理解，轻松掌握，为玩家带来最佳的游戏体验。</p>
     </div>
     
   <div class="problem_content">
    <p class=ques>如何获取游戏里的个人信息？</p>
    <p class=answer>大厅右下角是玩家的个人信息，包括头像，昵称，金币等信息，也就点击菜单功能键【个人中心】可以进入详细的个人资料页面，可以在这个页面进行头像，昵称，性别的修改，金币的查看。</p>
     </div>
     
       <div class="problem_content">
    <p class=ques>如何绑定您的帐号？</p>
    <p class=answer>如果你是一次进游戏，系统会根据你的设备号自动分配一个游戏账号。如果你需要完善账户资料，则可以在大厅界面的个人中心菜单里，通过绑定账号将自己的手机号码进行绑定。</p>
     </div>
       <div class="problem_content">
    <p class=ques>如何联系客服？</p>
    <p class=answer>点击好友菜单中的【名车小秘书】，发送消息即可回复客服信息进行联系。或点击【帮助中心】查看相关信息，并提交您的反馈信息，留下您的建议及联系方式，我们将及时与您联系。</p>
     </div>
       <div class="problem_content">
    <p class=ques>任务系统如何完成？</p>
    <p class=answer>点击游戏大厅菜单功能键【任务】即可进入任务中心，完成任务即可领取相应金币奖励。“新手任务”、“每日任务”在等着您哦!</p>
     </div>
       <div class="problem_content">
    <p class=ques>如何查看游戏公告？</p>
    <p class=answer>个人信息右上角是游戏公告滚动条，循环显示游戏公告内容，点击菜单页【消息】，可以进入查看完整的游戏公告。</p>
     </div>
       <div class="problem_content">
    <p class=ques>如何进行设置？</p>
    <p class=answer>点击游戏大厅菜单功能键【设置】，即可打开游戏设置面板。玩家也进行账号切换，版本升级；同时通过声音设置玩家可以调节游戏里面背景音乐及游戏音效的大小。也可以点击静音复选框直接将所有声音关掉。</p>
     </div>
       <div class="problem_content">
    <p class=ques> 如何查看我的好友？</p>
    <p class=answer>点击游戏大厅菜单功能键【好友】按钮可以进入好友页面，可以在这个页面进行好友的查找，进行好友实时私聊，添加浏览，删除。</p>
     </div>
	<div class="problem_content">
    <p class=ques>如何与别人聊天？</p>
    <p class=answer>私聊：即玩家与玩家之间一对一的聊天。<br/>
　　游戏内聊天：同一个游戏房间内的玩家专属聊天平台。</p>
     </div>
   <div class="problem_content">
    <p class=ques> 如何退出游戏？</p>
    <p class=answer>无论苹果还是安卓设备，点击home（大退）键即可退出游戏，并且还能收到来自游戏的部分推送，以便玩家及时了解到游戏里的信息。</p>
     </div>
   <div class="problem_content">
    <p class=ques> 如何联系我们？</p>
    <p class=answer>官方网站：http://www.moredoo.com<br/>
   　　微    信：imoredoo<br/>
  　　QQ    群：安卓：203805291   　IOS：195399029<br/>
　　客 服 QQ：2193523131<br/>
　　投诉建议：kefu@moredoo.com</p>
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
