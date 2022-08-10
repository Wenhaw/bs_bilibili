<!DOCTYPE html>
<html>
	<head>
		<meta  http-equiv="Content-Type" content="text/html; charset="utf-8" />
		<title>哔哩哔哩 (゜-゜)つロ 干杯~-bilibili</title>
		
		<!--网页标签显示图标-->
		<link rel="icon" href="img/little TV blue.png" type="image/x-icon">
		<!--引入reset.css清除浏览器默认样式-->
		<link rel="stylesheet" href="css/reset.css" />
		<!--引入本作css文件-->
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/common.css" />
		<!--读取用户登录状态-->
		<?php 
			include_once('conn.php');
			session_start();
			$tel=$_SESSION["tel"];
			
			$sql_v = "SELECT * FROM up_video" ;
			$result_v = mysql_query($sql_v);
			$row_v = mysql_fetch_array($result_v);
			$num_v = mysql_num_rows($result_v);
			?>
	</head>
	<body style="background-color: ;" >
		
	<!--banner-->
	<div class="banner">
		
		
		<!--top navigation bar-->
		<div class="TNgvt_bar">
			<div class="main_bar_size">
			<!--左侧文字-->
			<div class="TNgvt_bar_w">
				<div class="in"><a href="index.php"><img src="img/little TV white.png" class="in_i"/><p>主站</p></a></div>
				<ul>
					<a href="#"><li>画友</li></a>
				    <a href="#"><li>音频</li></a>
				    <a href="#"><li>游戏中心</li></a>
				    <a href="#"><li>直播</li></a>
				    <a href="#"><li>会员购</li></a>
				    <a href="#"><li>漫画</li></a>
				    
			    </ul>
			    <div class="download"><a href="#"><img src="img/phone white.png" class="dl_i" /><p>下载APP</p></a> <img src="img/download app.png" class="alert_dl_i"/></div>
			</div>
			
			<!--右侧登录等信息-->
			<div class="TNgvt_bar_l">
				<!--头像部分-->
				<div class="head">
					<?php						
						$sql = "select * from identity_information where tel = '$tel' ";
						$result = mysql_query($sql);
						$num = mysql_num_rows($result);
						$row = mysql_fetch_array($result);
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
						<div class="register"><a href="edit.php">修改个人信息</a></div>
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
		
		<!--搜索部分-->
		<div class="little_body">
		<div class="search_part">
			<a href="#"><div class="rank"><img src="img/rank.png" class="rank_i"/><div class="r_w">排行榜</div></div></a>
			<form>
			<div class="search">
				<input type="text" name="search" class="sc_text" placeholder="请输入搜索内容"/>
				<input type="button" onclick="alert('对不起，此功能暂不可用')" class="sc_btn"/>
			</div>
			</form>
		</div>
		</div>
		
	</div>
	<!--おめでとう！banner over!-->
	
	<!--主体部分-->
	<div class="main_body">
		
		<!--次级导航栏-->
		<div class="nagetive">
			<ul>
					<li><a href="#"><img src="img/I_home_i.png" class="I_home_i"/><div class="ng_index">首页</div></a></li>
					
					<div class="other_li">
					<!--大多数都是双级菜单-->
					<li>
						<a href="#"><img src="img/I_ng_i.png" />动画</a>
						<ul>
							<a href="video.php"><li><img src="img/ng_guide.png" />MAD·AMV</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />MMD·3D</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />短片·手书·配音</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />综合</li></a>
						</ul>
					</li>
					<li>
						<a href="#"><img src="img/I_ng_i.png" />番剧</a>
						<ul>
							<a href="#"><li><img src="img/ng_guide.png" />连载动画</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />完结动画</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />资讯</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />官方延伸</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />新番时间表</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />番剧索引</li></a>
						</ul>
					</li>
					<li>
						<a href="#"><img src="img/I_ng_i.png" />国创</a>
						<ul>
							<a href="#"><li><img src="img/ng_guide.png" />国产动画</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />国产原创相关</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />布袋戏</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />资讯</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />新番时间表</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />国产动画索引</li></a>
						</ul>
					</li>
					<li>
						<a href="#"><img src="img/I_ng_i.png" />音乐</a>
						<ul style="width: 150px;">
							<a href="#"><li style="width: 150px;"><img src="img/ng_guide.png" />音频</li></a>
							<a href="#"><li style="width: 150px;"><img src="img/ng_guide.png" />原创音乐</li></a>
							<a href="#"><li style="width: 150px;"><img src="img/ng_guide.png" />翻唱</li></a>
							<a href="#"><li style="width: 150px;"><img src="img/ng_guide.png" />VOCALOID·UTAU</li></a>
							<a href="#"><li style="width: 150px;"><img src="img/ng_guide.png" />电音</li></a>
							<a href="#"><li style="width: 150px;"><img src="img/ng_guide.png" />演奏</li></a>
							<a href="#"><li style="width: 150px;"><img src="img/ng_guide.png" />MV</li></a>
							<a href="#"><li style="width: 150px;"><img src="img/ng_guide.png" />音乐现场</li></a>
							<a href="#"><li style="width: 150px;"><img src="img/ng_guide.png" />音乐综合</li></a>
						</ul>
					</li>
					<li>
						<a href="#"><img src="img/I_ng_i.png" />舞蹈</a>
						<ul>
							<a href="#"><li><img src="img/ng_guide.png" />宅舞</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />三次元舞蹈</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />舞蹈教程</li></a>
						</ul>
					</li>
					<li>
						<a href="#"><img src="img/I_ng_i.png" />游戏</a>
						<ul>
							<a href="#"><li><img src="img/ng_guide.png" />单机游戏</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />电子游戏</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />手机游戏</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />网络游戏</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />桌游棋牌</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />GMV</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />音游</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />Mugen</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />游戏赛事</li></a>
						</ul>
					</li>
					<li>
						<a href="#"><img src="img/I_ng_i.png" />科技</a>
						<ul>
							<a href="#"><li><img src="img/ng_guide.png" />趣味科普人文</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />野生技术协会</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />演讲·公开课</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />星海</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />机械</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />汽车</li></a>
						</ul>
					</li>
					<li>
						<a href="#"><img src="img/I_ng_i.png" />数码</a>
						<ul>
							<a href="#"><li><img src="img/ng_guide.png" />手机平板</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />电脑装机</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />摄影摄像</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />影音智能</li></a>
						</ul>
					</li>
					<li>
						<a href="#"><img src="img/I_ng_i.png" />生活</a>
						<ul>
							<a href="#"><li><img src="img/ng_guide.png" />搞笑</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />日常</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />美食圈</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />动物圈</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />手工</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />绘画</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />运动</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />其他</li></a>
						</ul>
					</li>
					<li>
						<a href="#"><img src="img/I_ng_i.png" />鬼畜</a>
						<ul>
							<a href="#"><li><img src="img/ng_guide.png" />鬼畜调教</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />音AMD</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />人力VOCALOID</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />教程演示</li></a>
						</ul>
					</li>
					<li>
						<a href="#"><img src="img/I_ng_i.png" />时尚</a>
						<ul>
							<a href="#"><li><img src="img/ng_guide.png" />美妆</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />服饰</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />健身</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />T台</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />风尚标</li></a>
						</ul>
					</li>
					<li>
						<a href="#"><img src="img/I_ng_i.png" />广告</a>
					</li>
					<li>
						<a href="#"><img src="img/I_ng_i.png" />娱乐</a>
						<ul>
							<a href="#"><li><img src="img/ng_guide.png" />综艺</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />明星</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />Korea相关</li></a>
						</ul>
					</li>
					<li>
						<a href="#"><img src="img/I_ng_i.png" />影视</a>
						<ul>
							<a href="#"><li><img src="img/ng_guide.png" />影视杂谈</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />影视剪辑</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />短片</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />预告·资讯</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />特摄</li></a>
						</ul>
					</li>
					<li>
						<a href="#"><img src="img/I_ng_i.png" />放映厅</a>
						<ul>
							<a href="#"><li><img src="img/ng_guide.png" />纪录片</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />电影</li></a>
							<a href="#"><li><img src="img/ng_guide.png" />电视剧</li></a>
						</ul>
					</li>
					
					</div>
			</ul>
		</div>
		<!--导航栏终了——导航栏右侧开始-->
		<div class="ng_right">
			<a href="#"><img src="img/W_threegile.gif" style="width: 60px; float: right;"/></a>
			<ul style="float: left;">
				<a href="#"><li><img src="img/r_zhuanlan.png" />专栏</li></a>
				<a href="#"><li><img src="img/r_guangchang.png" />广场</li></a>
				<a href="#"><li><img src="img/r_zhibo.png" />直播</li></a>
				<a href="#"><li><img src="img/r_xiaoheiwu.png" />小黑屋</li></a>
			</ul>
		</div>
		
		<!--右侧终了——推荐部分开始-->
		<!--来吧！轮播图！-->
		<div class="wrapper11">
        <ul class='sliderPage11'>
        	
            <li>
                <a href="#" ><img src="img/rc_shadow.png" class="rc_shadow" /><div class="sl_title">等了你500年，因为，我记得！</div><img src="img/r1.jpg" /></a>
            </li>
            <li>
                <a href="#" ><div class="sl_title">卧薪1尝胆嚎哭深渊carry全场</div><img src="img/r2.jpg" /></a>
            </li>
            <li>
                <a href="#" ><div class="sl_title">怪不得我物理那么差</div><img src="img/r3.jpg" /></a>
            </li>
            <li>
                <a href="#" ><div class="sl_title">科普安全用药</div><img src="img/r4.jpg" /></a>
            </li>
            <li>
                <a href="#" ><div class="sl_title">等了你500年，因为，我记得！</div><img src="img/r1.jpg" /></a>
            </li>
        </ul>
        <div class='btn leftBtn'>&lt;</div>
        <div class='btn rightBtn'>&gt;</div>
        
        <div class='sliderIndex'>
            <span class='active'></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <a href="#" class="wp_more">更多</a>
    </div>
    
    <script src='js/demo.js'></script>
    <script>
        var timer = null;
        var sliderPage11 = document.getElementsByClassName('sliderPage11')[0];
        var moveWidth = sliderPage11.children[0].offsetWidth;
        var num = sliderPage11.children.length - 1;
        var leftBtn = document.getElementsByClassName('leftBtn')[0];
        var rightBtn = document.getElementsByClassName('rightBtn')[0];
        var oSpanArray = document.getElementsByClassName('sliderIndex')[0].getElementsByTagName('span');
        var lock = true;
        var index = 0;

        leftBtn.onclick = function () {
            autoMove('right->left');
        }

        rightBtn.onclick = function () {
            autoMove('left->right');
        }


        for (var i = 0; i < oSpanArray.length; i++) {
            (function (myIndex) {
                oSpanArray[i].onclick = function () {
                    lock = false;
                    clearTimeout(timer);
                    index = myIndex;
                    startMove(sliderPage11, {
                        left: -index * moveWidth
                    }, function () {
                        lock = true;
                        timer = setTimeout(autoMove, 1500);
                        changeIndex(index);
                    })
                }
            })(i)
        }


        // direction
        //默认轮播方向/right按钮  'left->right' / undefined
        //点击left按钮  'right->left' 
        function autoMove(direction) {
            // 
            if (lock) {
                lock = false;

                clearTimeout(timer);
                if (!direction || direction == 'left->right') {
                    index++;
                    startMove(sliderPage11, {
                        left: sliderPage11.offsetLeft - moveWidth
                    }, function () {
                        if (sliderPage11.offsetLeft == -num * moveWidth) {
                            index = 0;
                            sliderPage11.style.left = '0px';
                        }
                        timer = setTimeout(autoMove, 1500);
                        lock = true;
                        changeIndex(index);
                    });
                } else if (direction == 'right->left') {
                    if (sliderPage11.offsetLeft == 0) {
                        sliderPage11.style.left = -num * moveWidth + 'px';
                        index = num;
                    }
                    index--;
                    startMove(sliderPage11, {
                        left: sliderPage11.offsetLeft + moveWidth
                    }, function () {
                        timer = setTimeout(autoMove, 1500);
                        lock = true;
                        changeIndex(index);
                    })
                }
            }
        }

        function changeIndex(_index) {
            for (var i = 0; i < oSpanArray.length; i++) {
                oSpanArray[i].className = '';
            }
            oSpanArray[_index].className = 'active';
        }

        timer = setTimeout(autoMove, 1500);



        // HTMLDivElement.prototype.createTurnPage = function (['./cat1.jpg', './cat2.jpg', './cat3.jpg']) {

        // }
    </script>
	<!--呜哇，这个轮播图做的好辛苦，终于做的差不多了 19.3.5-->
	<!--轮播图右侧开始-->
	<div class="rc_right">
        <ul>
          <li>
            <a href="#">
              <img src="img/suoluetu/s1.jpg" alt="#">
              <div class="info">
                <p class="title">新作【sakaki】鬼泣五</p>
                <p class="author">up主：sakaki1224</p>
                <p class="play">播放：48243</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="img/suoluetu/s2.jpg" alt="#">
              <div class="info">
                <p class="title">新作【sakaki】鬼泣五</p>
                <p class="author">up主：丧尸の桑</p>
                <p class="play">播放：48243</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="img/suoluetu/s3.jpg" alt="#">
              <div class="info">
                <p class="title">新作【sakaki】鬼泣五</p>
                <p class="author">up主：丧尸の桑</p>
                <p class="play">播放：48243</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="img/suoluetu/s4.jpg" alt="#">
              <div class="info">
                <p class="title">新作【sakaki】鬼泣五</p>
                <p class="author">up主：丧尸の桑</p>
                <p class="play">播放：48243</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="img/suoluetu/s5.jpg" alt="#">
              <div class="info">
                <p class="title">新作【sakaki】鬼泣五</p>
                <p class="author">up主：丧尸の桑</p>
                <p class="play">播放：48243</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="img/suoluetu/s6.jpg" alt="#">
              <div class="info">
                <p class="title">新作【sakaki】鬼泣五</p>
                <p class="author">up主：丧尸の桑</p>
                <p class="play">播放：48243</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="img/suoluetu/s7.jpg" alt="#">
              <div class="info">
                <p class="title">新作【sakaki】鬼泣五 </p>
                <p class="author">up主：丧尸の桑</p>
                <p class="play">播放：48243</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="img/suoluetu/s8.jpg" alt="#">
              <div class="info">
                <p class="title">新作【sakaki】鬼泣五</p>
                <p class="author">up主：丧尸の桑</p>
                <p class="play">播放：48243</p>
              </div>
            </a>
          </li>
        </ul>
        <a href="#" class="btn btn-prev">昨日</a>
        <a href="#" class="btn btn-next">一周</a>
      </div>
      
      <!--动画-->
      <div class="time_cycle">
      <div class="mainCont clearfix" id="animation" js-move="true">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <i class="icon icon-animation"></i>
            <h2>动画</h2>
            <div class="tab-title">
              <a href="#" class="cur">有新动态</a>
              <a href="#">最新投稿</a>
            </div>
            <div class="more-wrap">
              <a href="#" class="dynamic"><i></i>392条新动态</a>
              <a href="#" class="more">更多<i></i></a>
            </div>
          </div>
          <ul class="pic-list__wrapper clearfix tab-cont__item tab-cont__cur">
          	
          	
          	
          	<?php
	while($row_v = mysql_fetch_array($result_v)){
					?>
					
						
            <li class="item">
            	<!--<script language="javascript">//将提交按钮功能转移，将a标签作为submit提交视频信息的方案，不过没用上。。。
              	function turn() {
              		subform.submit();
              	}
              	</script>-->
            	<!--<form id="subform" method="post" action="video.php">
            	<?php echo "<input type='text' name='video_id' value=$row_v[0] />"; ?>
            	<input type="submit" value="提交" />      onClick="javascript:turn()"-->
            	<?php $cd_video_id=$row_v[0];
            		 ?><!--声明变量，存入v_id值-->
              <a href="<?php echo "video.php?c=".$cd_video_id ?>"  class="img-link"><!--将v_id值传入video.php-->
              	
              	
              	<?php 
                echo "<img src='$row_v[2]' class='pic_img_style' alt='封面加载失败'>";
                	?>
                <span class="mask"></span>
                <?php
                echo "<span class='time'>$row_v[5]</span>";
                ?>
              </a>
              <!--</form>-->
              
              
              <div class="img-info">
              	<?php
                echo "<a href='#' onClick='javascript:turn()' >$row_v[1]</a>";
                ?>
                <div class="btm">
                	<?php
                  echo "<div class='user'><i></i>$row_v[4]</div>";
                  ?>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
              
              
              
            </li>
            
            <?php
            } ?>
            
            
            
            
          </ul>
          <ul class="pic-list__wrapper clearfix tab-cont__item">
            <li class="item">
              <a href="#" class="img-link">
                <img src="img/main_pic.jpg" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">这里是最新投稿哦~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="img/main_pic.jpg" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">这里是最新投稿哦~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="img/main_pic.jpg" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">这里是最新投稿哦~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="img/main_pic.jpg" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">这里是最新投稿哦~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="img/main_pic.jpg" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">这里是最新投稿哦~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="img/main_pic.jpg" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">这里是最新投稿哦~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="img/main_pic.jpg" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">这里是最新投稿哦~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="img/main_pic.jpg" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">这里是最新投稿哦~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="img/main_pic.jpg" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">这里是最新投稿哦~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
            <li class="item">
              <a href="#" class="img-link">
                <img src="img/main_pic.jpg" alt="#">
                <span class="mask"></span>
                <span class="time">3:39</span>
              </a>
              <div class="img-info">
                <a href="#">这里是最新投稿哦~</a>
                <div class="btm">
                  <div class="user"><i></i>铃椛</div>
                  <div class="online"><i></i>6732</div>
                </div>
              </div>
            </li>
          </ul>

          </div>

        <div class="main-side fr" js-tab="true">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>排行</h3>
            </div>
            <div class="tab-title">
              <a href="#" class="cur">全部</a>
              <a href="#">原创</a>
            </div>
            <div >
              <select class="side-select">
              	<option>三日</option>
              	<option>一周</option>
              	<option>一月</option>
              	</select>
              <i></i>
            </div>
          </div>
          <div class="main-side__cont">
            <div class="tab-cont">
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="img/main-rank__img1.jpg" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="img/main-rank__img1.jpg" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
            </div>
            <a href="#" class="more">查看更多<i></i></a>
          </div>
        </div>
      </div>
      </div><!--暂时圈住div-->
       
		
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
		
  
		
		
	<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
	<script src="js/script.js"></script>	
	</body>
</html>
