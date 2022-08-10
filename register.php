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
					<?php if($row == 0) 
						{  //如果未登录，弹出：
						?>
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
					<?php } 
						else { //如果登录，弹出：
						?>
						<div class="alert_login">
						欢迎您：<?php echo $row[0]; ?>
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
						<a href="logout.php" ><div class="btn_login">
							<p>注销</p>
						</div></a>
						<div class="register"><a href="register.php">修改个人信息</a></div>
					</div>
						<?php 
						}
							?>
				
				</div>
				
				<!--历史部分-->
				
					<div class="history"><a href="#"><div class="htr_c">历史</div></a></div>
				
				<!--投稿部分-->
				<div class="upload">
					<a href="up_video.php"><div class="ul_c">投稿</div></a>
				</div>
				
			</div>
			</div>
		</div>
		<div class="lgi_banner">
			<div class="lgi_banner_p">
				<img src="img/lgi_banner.png" />
				</div>
		</div>
		
		
		
		
		<!--******mainBody******-->
		<div class="rgt_mainBody">
			
			<div class="login_text">注册</div>
			<!--分割线*2-->
			<div class="rgt_line1"></div>
			<div class="rgt_line2"></div>
			
			<!--表单-->
			<form class="rgt_form" method="post" id="register" name="register" action="register2.php" enctype="multipart/form-data">
				<ul>
					<li><input type="text" name="username" class="" placeholder="昵称" /></li>
					<li><input type="password" name="password" class="" placeholder="密码(6-16个字符组成区分大小写)" /></li>
					<li>
						<select class="slc_country" name="adress">
							<option value="中国大陆">中国大陆</option>
							<option value="中国香港">中国香港</option>
							<option value="中国台湾">中国台湾</option>
							<option value="美国">美国</option>
							<option value="日本">日本</option>
						</select>
						<input type="tel" name="tel" class="in_phone_nub" placeholder="填写常用手机号" />
					</li>
					<a href="#" style="float: right;margin-top: 10px;">用邮箱注册></a>
					<li class="yzm">
						<a href="#" >请上传头像(仅.jpg)</a>
						<input type="file" name="head" id="head" value="" />
					</li>
					<div class="xieyi">
						<input type="checkbox" name="I_agree" class="I_agree" value="1"/>
						<div >我已同意<a href="#">《哔哩哔哩弹幕网用户使用协议》</a>和<a href="#">《哔哩哔哩弹幕网账号中心规范》</a></div>
					</div>
					<li>
						<input type="submit" name="rgt_sbm" class="rgt_sbm" value="注册"/>
					</li>
					<a href="login.php" style="float: right; margin-top: 10px;">已有账号？直接登录></a>
				</ul>
			</form>
			
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
