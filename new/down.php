<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>名车老虎机下载</title>
</head>
<?php 
$down=$_GET['d'];
$from=empty($_GET['from'])?"moredooAnd":$_GET['from'];
if($down=='iphone'){  
	$url="http://ios.yyport.com/view/down/parse?hzq=moredoo&appstore=1&client=ios";
}else if($down=='android'){  
    $url="http://ios.yyport.com/view/down/parse?hzq={$from}&appstore=0&client=android";
}  
?>

<body>
<div class="body">
	下载马上开始 <span id="time">3</span>，如果长时间没有开始下载请 <a id="down" href="<?php  echo $url; ?>">点击下载</a>
</div>
<div style="display:none;">
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F05688b88b4307cf5cee48512ed6d274c' type='text/javascript'%3E%3C/script%3E"));
</script>
</div>
<script type="text/javascript">
window.onload = function (){
	var sss = setInterval(function(){
		var a = document.getElementById('time');
		a.innerHTML -= 1;
		if(a.innerHTML <= 1){
			window.open(document.getElementById('down').href,"_self");
			clearInterval(sss);
			setTimeout(function(){window.close();},1000);
		}
	},1000);
}
</script>
</body>
</html>