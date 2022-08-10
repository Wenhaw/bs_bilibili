<!DOCTYPE html>
<html>
	<head>
		<meta meta  http-equiv="Content-Type" content="text/html; charset="utf-8" />
		<title>系统登录</title>
		<link rel="stylesheet" href="css/style.css"/>
		
		<script src="js/jquery.js">
			
		</script>
		<script language="javascript">
	$(function(){
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
	$(window).resize(function(){  
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    })  
});  
</script> 

		<script src="js/cloud.js">
			
		</script>
	</head>
	<body style="background-color: #1c77ac;
	background-image: url(img/images/light.png);">
		<div id="mainBody">
			<div id="cloud1" class="cloud">
				
			</div>
			<div id="cloud2" class="cloud">
				
			</div>
		</div>
		<div class="logintop">
			<span>欢迎登录后台管理</span>
			<ul>
			<li><a href="../index.php">回首页</a></li>
			<li style="color: #afc5d2;">帮助</li>
			<li style="color: #afc5d2;">关于</li>
			</ul>
		</div>
		
		<!--中部-->
		<div class="loginbody">
			<span class="systemlogo"></span>
			<div class="loginbox">
				<form method="post" action="login2.php">
				<ul>
					<li>
						<input type="text" id="txt1" 
						class="loginuser" name="a_tel"
						onclick="javascript:this.value=''"/>
					</li>
					<li>
						<input type="password" id="txt2" 
						class="loginpwd" name="a_password"
						onclick="javascript:this.value=''"/>
					</li>
					<li>
						<input type="submit" value="登录" 
						class="loginbtn"
						onclick="check()"/>
					</li>
				</ul>
				</form>
			</div>
		</div>
		<div class="loginbm">
			2019@BILIBILI所有
		</div>
	</body>
</html>
