<?php
echo "<script>alert('该视频对于作者非常重要，如要删除请再次点击删除按钮以确认删除！');</script>";
?>
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
		<!--引入数据表-->
		<?php 
			include_once('conn.php');
			session_start();
			
			$sql_v = "SELECT * FROM up_video" ;
			$result_v = mysql_query($sql_v);
			$row_v = mysql_fetch_array($result_v);
			$num_v = mysql_num_rows($result_v);
			?>
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
		
		
		
		
		<!--******mainBody******-->
		<div class="rgt_mainBody">
			<div class="login_text">管理员您好</div>
			<!--分割线*2-->
			<div class="rgt_line1" style="width: 350px;"></div>
			<div class="rgt_line2" style="width: 350px;"></div>
			
			<!--视频列表-->
			<ul style="margin-top: 50px;">
				<?php
	while($row_v = mysql_fetch_array($result_v)){
					?>
			<li style="margin-top: 10px;">
			<form method="post" action="a_delet2.php">
				<?php echo "<input type='text' name='v_id' value=$row_v[0] style='display: none;' />"; ?>
			<div class="ed_list">
				<?php 
				echo "<img src='$row_v[2]' class='ed_pic'/>";
				?>
				<ul>
				<li style="font-size: 12px; color: #6D757A;"><?php echo "视频编号:&nbsp;".$row_v[0] ?></li> 
				<li style="margin-top: 5px;">视频名称:&nbsp;<a href="video.php"><?php echo $row_v[1] ?></a>
				</li>
				<li style="margin-top:5px ;"><div style="font-size: 14px;">作者:<?php echo $row_v[4] ?></div> <div style="font-size: 14px; margin-top: 3px;">封面地址:&nbsp;<?php echo $row_v[2] ?></div></li>
				<li style="font-size: 12px; color: #6D757A; float: left; margin-top: 10px;">视频地址:&nbsp;<?php echo $row_v[3] ?></li>
				<li style="font-size: 12px; color: #6D757A; float: right; margin-top: 10px;">时间:&nbsp;<?php echo $row_v[5] ?></li>
				</ul>
				<div class="change_delet">
				<input type="submit" class="change" style="height: 100px;" value="谨慎&#13;&#10;删除" />
				</div>
			</form>
			</div>
			</li>
			<?php
            } ?>
			</ul>
			
			
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