<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>哔哩哔哩 (゜-゜)つロ 干杯~-bilibili</title>
		
		<!--网页标签显示图标-->
		<link rel="icon" href="img/little TV blue.png" type="image/x-icon">
		<!--引入reset.css清除浏览器默认样式-->
		<link rel="stylesheet" href="css/reset.css" />
		<!--引入本作css文件-->
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/common.css" />
	</head>
	
	<body>
		<!--top ngtv-->
			<div class="lgi_ngtv">
			<div class="main_bar_size">
			<!--左侧文字-->
			<div class="TNgvt_bar_w" >
				<div class="in"><a href="index.php"><img src="img/little TV blue.png" class="in_i"/><p>主站</p></a></div>
				<ul>
					<a href="#"><li>画友</li></a>
				    <a href="#"><li>音频</li></a>
				    <a href="#"><li>游戏中心</li></a>
				    <a href="#"><li>直播</li></a>
				    <a href="#"><li>会员购</li></a>
				    <a href="#"><li>漫画</li></a>
				    
			    </ul>
			    <div class="download"><a href="#"><img src="img/phone.png" class="dl_i" /><p>下载APP</p></a> <img src="img/download app.png" class="alert_dl_i"/></div>
			</div>
			
			<!--右侧登录等信息-->
			<div class="TNgvt_bar_l">
				
				<!--头像部分-->
				<div class="head">
					<img src="img/head.jpg" class="head_img"/>
					
					<!--弹出登录界面-->
					<div class="alert_login">
						登录后你可以：
						<!--弹幕动画部分-->
						<div class="a_l_img">
							<div id="demo">
								<div id="indemo">
									<div id="demo1">
										<img src="img/danmu.png" border="0" />
										<img src="img/danmu.png" border="0" />
										<img src="img/danmu.png" border="0" />
									</div>
									<div id="demo2"></div>
								</div>
							</div>
							<script>
								var speed=10; //数字越大速度越慢
								var tab=document.getElementById("demo");
								var tab1=document.getElementById("demo1");
								var tab2=document.getElementById("demo2");
								tab2.innerHTML=tab1.innerHTML;
								function Marquee(){
									if(tab2.offsetWidth-tab.scrollLeft<=0)
									tab.scrollLeft-=tab1.offsetWidth
									else{
										tab.scrollLeft++;
									}
								}
								var MyMar=setInterval(Marquee,speed);
								tab.onmouseover=function() {clearInterval(MyMar)};
								tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};
							</script>
						</div>
						<a href="login.php" ><div class="btn_login">
							<p>登录</p>
						</div></a>
						<div class="register">首次使用?<a href="register.php">点我去注册</a></div>
					</div>
				
				</div>
				
				<!--历史部分-->
				
					<div class="history"><a href="#"><div class="htr_c">历史</div></a></div>
				
				<!--投稿部分-->
				<div class="upload">
					<a href="#"><div class="ul_c">投稿</div></a>
				</div>
				
			</div>
			</div>
		</div>
		<div class="lgi_banner">
			<div class="lgi_banner_p">
				<img src="img/lgi_banner.png" />
				</div>
		</div>
		
		
		<!--lgi_mainBody-->
		<div class="lgi_mainBody">
			
			<div class="login_text">欢迎您，尊敬的管理员先生</div>
			<!--分割线-->
			<div class="lgi_line1" style="width: 200px;"></div>
			<div class="lgi_line2" style="width: 200px;"></div>
			<div class="lgi_line3"></div>
			<!--左-->
			<div class="lgi_left">
				<img src="img/login_left1.jpg" />
			</div>
			
			<!--右，登录表格-->
			<div class="lgi_form">
				<form id="login" name="login" method="post" action="a_log2.php">
					<ul>
						<li><input type="tel" name="a_tel" class="" placeholder="你的手机号/邮箱"/></li>
						<li><input type="password" name="a_password" class="" placeholder="密码"/></li>
						<li><input type="text" name="yanzhengma" class="yzm" placeholder="验证码" /> <img /></li>
						<li><input type="checkbox" name="remember me" class="rm" /> <div class="rmt">记住我</div> <div class="notme">不是自己的电脑上不要勾选此项</div> </li>
						<li><input type="submit" name"login" class="login" value="登录"></li>
					</ul>
				</form>
			</div>
			
		</div>
		
		<!--foot-->
		<div class="foot">
			<div class="foot_top">
      <ul class="foot_con">
         <li>
           <h6>bilibili</h6>
           <a href="#" class="card">关于我们</a>
           <a href="#" class="card">友情链接</a>
           <a href="#" class="card">周边</a>
           <a href="#" class="card">联系我们</a>
           <a href="#" class="card">加入我们</a>
           <a href="#" class="card">官方认证</a>
         </li>
         <li class="foot_cen">
           <h6>传送门</h6>
           <a href="#" class="card">帮助中心</a>
           <a href="#" class="card">高级弹幕</a>
           <a href="#" class="card">活动专题页</a>
           <a href="#" class="card">侵权申诉</a>
           <a href="#" class="card">分院帽计划</a>
           <a href="#" class="card">活动中心</a>
           <a href="#" class="card">用户反馈论坛</a>
           <a href="#" class="card">壁纸站</a>
           <a href="#" class="card">名人堂</a>
         </li>
         <li class="foot_rig">
           <div class="other_aboutme">
             <a href="#" class="other_aboutme_app">
               <i></i>
               <em style="color: #000000; font-size: 14px;">手机端下载</em>
               <img src="img/app-qrcode.png" alt="#">
             </a>
             <a href="#" class=" other_aboutme_weibo">
               <i></i>
               <em style="color: #000000; font-size: 14px;">新浪微博</em>
               <img src="img/weibo-qrcode.png" alt="#">
             </a>
             <a href="#" class=" other_aboutme_weixin">
               <i></i>
               <em style="color: #000000; font-size: 14px; ">官方微信</em>
               <img src="img/weixin-arcode.gif" alt="#">
             </a>
           </div>
         </li>
      </ul>

			</div>
		</div>
			
	</body>
</html>