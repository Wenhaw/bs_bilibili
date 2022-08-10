<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
		<title>哔哩哔哩 (゜-゜)つロ 干杯~-bilibili</title>
		
		<!--网页标签显示图标-->
		<link rel="icon" href="img/little TV blue.png" type="image/x-icon">
		<!--引入reset.css清除浏览器默认样式-->
		<link rel="stylesheet" href="css/reset.css" />
		<!--引入本作css文件-->
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/common.css" />
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/DPlayer.min.css">
		<!--读取用户登录状态-->
		<?php 
			header('content-type:text/html;charset=utf-8');
			ini_set('date.timezone','Asia/Shanghai');
			include_once('conn.php');

			
			$sql = "select * from identity_information where tel = '$tel' "; //读取tel行内容
						$result = mysql_query($sql);
						$num = mysql_num_rows($result);
						$row = mysql_fetch_array($result);
						
			$sql_c = "SELECT * FROM comment ORDER BY c_id DESC" ; //评论数据读取
			$result_c = mysql_query($sql_c);
			$row_c = mysql_fetch_array($result_c);
			$num_c = mysql_num_rows($result_c);
			
			$v_id=$_GET['c'];
			$sql_av = "select * from a_video  where a_v_id = '$v_id'"; //读取v_id行内容
						$result_av = mysql_query($sql_av);
						$num_av = mysql_num_rows($result_av);
						$row_av = mysql_fetch_array($result_av);
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
					<?php
					if($row!=0)
						echo "<img src=".$row[4]." class='head_img'/>";
						else
						echo "<img src='img/head.jpg' class='head_img'/>";
					?>
					
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
	
		
		
		<!--******主体******-->
		<div class="vd_mainBody">
			<?php echo "<h1 class='vd_title'>". $row_av[1]." </h1>"; ?>
			<div class="time"><?php echo $row_av[5];  ?></div>
			<div class="information">25.3万播放 · 1414弹幕 &nbsp;&nbsp;&nbsp;未经作者授权，禁止转载</div>
			
			<?php
				 
				$up_head = mysql_query("SELECT * FROM identity_information WHERE username = '$row_av[4]' ");//提取up主头像
				$up_head_row = mysql_fetch_array($up_head);
				?>
			<div class="up_info">
				<?php echo "<img src='$up_head_row[4]'/>"; ?>
				<div class="up_info_right">
					<span class="up_name"><?php echo $row_av[4]; ?></span><br />
					<span class="up_sign">这种鱼塘局随手摸鱼就可以了，谈不上carry</span>
					<a href="management/list_v.php" class="chongdian">返回审核</a><a href="#" class="follow">+17.1&nbsp;&nbsp;万关注</a>
				</div>
			</div>

<!--***左侧***-->
<div class="vd_left">
<!--**视频模块**-->
<div class="Dplayer_box">
    <div class="player_av">
        <div id="player1"></div>
    </div>

    
</div>

<div class="alert_back">加载中</div>
<script src="js/DPlayer.min.js"></script>
<script>
    console.log(" %c 该项目基于Dplayer.js",'color:red')
    var dp = new DPlayer({
        element: document.getElementById('player1'),
        video: {//video/E of zhang.mp4
            url: '<?php 
          echo "$row_av[3] ";//video/E of zhang.mp4
          ?>',
            pic: '<?php 
          echo "$row_av[2] ";
          ?>'
        },
        danmaku: {
            id: 'demo',
            api: 'https://api.prprpr.me/dplayer/',
            addition: ['https://api.prprpr.me/dplayer/bilibili?aid=15572523']
        }
    });
    // 弹出框
    function alert_back(text) {
        $(".alert_back").html(text).show();
        setTimeout(function () {
            $(".alert_back").fadeOut();
        },1200)
    }
    //秒转分秒
    function formatTime(seconds) {
        return [
//            parseInt(seconds / 60 / 60),
            parseInt(seconds / 60 % 60),
            parseInt(seconds % 60)
        ]
            .join(":")
            .replace(/\b(\d)\b/g, "0$1");
    }
$.ajax({
    url:"https://api.prprpr.me/dplayer/bilibili?aid=15572523",
    success:function (data) {
        if(data.code=="1"){
            var danmaku=data.danmaku;
            var autor="农民";
            $(".danmuku_num").text(danmaku.length)
            $(danmaku).each(function (index,item) {
                if(item.type=="right"){
                }else
                {
                    autor="地主"
                }
                var oLi=`   <ol class="danmuku_list" time="${item.time}">
            <li>${formatTime(item.time)}</li>
            <li title="${item.text}">${item.text}</li>
            <li>${autor}</li>
</ol>
`
                $(".list_ovefiow").append(oLi);
                autor="农民";
            })
        }else {
            alert_back("弹幕加载失败 -v-!");
        }
        $(".danmuku_list").on("click",function () {

            dp.seek( $(this).attr("time"))
        })
    }
})
</script>

<!--简介-->
<div class="br_rc">
	<span >视频简介</span><a href="#">稿件投诉</a>
	<div class="line"></div>
	<p>
		cp为priest小说《六爻》里的严争鸣x程潜。<br />
		非常喜欢这首歌，青山元不动，白云自去来，就画了白衣青袍的这一对ww<br />
		第一次用ae，画功与技术都有限，而且时间紧迫......远没达到预期效果orz，各种不足请多包涵。<br />
		这篇是LOFTER上六爻情人节24h活动16：00的粮，如有兴趣可移步tag围观～<br />
	</p>
</div>
<div class="line" style="margin-top:20px ;"></div>

	
	
	<!--回复部分-->
	
	
</div>
</div>




<!--***右侧***-->
<div class="vd_right">
	相关推荐
	<!--相关推荐内容-->
	<div class="rc_about">
		<ul>
			<li>
				<img src="img/suoluetu/s1.jpg" />
				<div class="ab_text">
					<a href="#">卧薪1尝胆嚎哭深渊carry全场</a><br />
					<span>吾鼠</span><br />
					<span style="bottom: 7px;">30万播放 · 2000弹幕</span>
				</div>
			</li>
			<li>
				<img src="img/suoluetu/s2.jpg" />
				<div class="ab_text">
					<a href="#">卧薪1尝胆嚎哭深渊carry全场</a><br />
					<span>吾鼠</span><br />
					<span style="bottom: 7px;">30万播放 · 2000弹幕</span>
				</div>
			</li>
			<li>
				<img src="img/suoluetu/s3.jpg" />
				<div class="ab_text">
					<a href="#">卧薪1尝胆嚎哭深渊carry全场</a><br />
					<span>吾鼠</span><br />
					<span style="bottom: 7px;">30万播放 · 2000弹幕</span>
				</div>
			</li>
			<li>
				<img src="img/suoluetu/s4.jpg" />
				<div class="ab_text">
					<a href="#">卧薪1尝胆嚎哭深渊carry全场</a><br />
					<span>吾鼠</span><br />
					<span style="bottom: 7px;">30万播放 · 2000弹幕</span>
				</div>
			</li>
			<li>
				<img src="img/suoluetu/s5.jpg" />
				<div class="ab_text">
					<a href="#">卧薪1尝胆嚎哭深渊carry全场</a><br />
					<span>吾鼠</span><br />
					<span style="bottom: 7px;">30万播放 · 2000弹幕</span>
				</div>
			</li>
			<li>
				<img src="img/suoluetu/s6.jpg" />
				<div class="ab_text">
					<a href="#">卧薪1尝胆嚎哭深渊carry全场</a><br />
					<span>吾鼠</span><br />
					<span style="bottom: 7px;">30万播放 · 2000弹幕</span>
				</div>
			</li>
			<li>
				<img src="img/suoluetu/s7.jpg" />
				<div class="ab_text">
					<a href="#">卧薪1尝胆嚎哭深渊carry全场</a><br />
					<span>吾鼠</span><br />
					<span style="bottom: 7px;">30万播放 · 2000弹幕</span>
				</div>
			</li>
			<li>
				<img src="img/suoluetu/s8.jpg" />
				<div class="ab_text">
					<a href="#">卧薪1尝胆嚎哭深渊carry全场</a><br />
					<span>吾鼠</span><br />
					<span style="bottom: 7px;">30万播放 · 2000弹幕</span>
				</div>
			</li>
		</ul>
	</div>
	
</div>
<div style="clear:both;"></div><!--清除vd_left&right浮动-->
			
			
			
			
			
		
		
		</div><!--这个是结尾-->
		
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
