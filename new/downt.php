<?php  $url='http://ios.yyport.com/view/down/parse';?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>下载</title>
<script type="text/javascript">
            /*
             * 智能机浏览器版本信息:
             *
             */
             var browser = {
                versions: function() {
                    var u = navigator.userAgent, app = navigator.appVersion;
                    return {//移动终端浏览器版本信息 
                        trident: u.indexOf('Trident') > -1, //IE内核
                        presto: u.indexOf('Presto') > -1, //opera内核
                        webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                        gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                        mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/), //是否为移动终端
                        ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                        android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                        iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
                        iPad: u.indexOf('iPad') > -1, //是否iPad
                        webApp: u.indexOf('Safari') == -1, //是否web应该程序，没有头部与底部
						weixin: u.match(/MicroMessenger/)=='MicroMessenger', //是否为微信扫描
                    };
                }(),
                language: (navigator.browserLanguage || navigator.language).toLowerCase()
            }

           var hzq=getUrlParam('from');
           if(hzq===null)hzq='';

            if (browser.versions.ios || browser.versions.iPhone || browser.versions.iPad) {
          	     var appstore=getUrlParam('appstore');
			    window.location="<?php  echo $url;?>?hzq="+hzq+"&appstore=1&client=ios";			 
            }
            else if (browser.versions.android) {
              if(browser.versions.weixin){
			    window.location="<?php echo $url;?>?hzq=moredoo-wechat&appstore=0&client=android";
			  }else
                window.location="<?php echo $url;?>?hzq="+hzq+"&appstore=0&client=android";
            }
          function getUrlParam(name) {
             var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
             var r = window.location.search.substr(1).match(reg);  //匹配目标参数
             if (r!=null) return unescape(r[2]); return null; //返回参数值
             } 

        </script>
</head>

<body>

</body>
</html>