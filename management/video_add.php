<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css"/>
		<!--引入reset.css清除浏览器默认样式-->
		<link rel="stylesheet" href="../css/reset.css" />
		<title></title>
		<script src="js/jquery.js"></script>
		<script src="js/jquery.idTabs.min.js"></script>
		<script src="editor/kindeditor.js"></script>
		<script type="text/javascript">
    KE.show({
        id : 'content7',
        cssPath : './index.css'
    });
  </script>
	</head>
	<body>
		<div class="place">
			<span>位置：</span>
			<ul class="placeul">
				<li>
					<a href="#">视频添加</a>
				</li>
			</ul>
		</div>
		<div class="formbody">
			<div id="usual1" class="usual">
				<div class="itab">
					<ul>
						<li>
							<a href="#tab1" class="selected">发布视频</a>
						</li>
						<li>
							<a href="#tab2" >自定义</a>
						</li>
					</ul>
				</div>
				<div id="tab1" class="tabson">
					<form class="rgt_form" method="post" id="vd_upload" name="vd_upload" action="video_add2.php" enctype="multipart/form-data">
				<ul>
					<li><input type="text" name="v_name" class="input_vname" placeholder="请输入视频名称" /></li>
					<li>
						<div class="up_vd_pic">
						<span>请上传视频封面（仅.jpg）</span>
						<input type="file" name="up_vd_pic" id="up_vd_pic" value="" />
						</div>
						<div class="up_vd">
						<span>请上传视频（仅.mp4）</span>
						<input type="file" name="up_vd" id="up_vd" value="" />
						</div>
					</li>
					<div style="clear: both;"></div>
					<li>
						<input type="submit" name="up_sbm" class="rgt_sbm" value="添加"/>
					</li>
				</ul>
			</form>
					<!--<div class="formtext">
						欢迎使用产品发布功能
					</div>
					<ul class="forminfo">
						<li>
							<label>商品名称<b>*</b></label>
							<input type="text" class="dfinput" 
							style="width: 418px;"/>
						</li>
						<li>
							<label>商品价格<b>*</b></label>
							<input type="text" class="dfinput" 
							style="width: 318px;"/>
						</li>
						<li>
							<label>商品图片<b>*</b></label>
							<input type="file" 
							style="width: 318px;"/>
						</li>
						<li>
							<label>商品说明<b>*</b></label>
							<textarea id="content7" 
							style="width: 700px; height: 250px;
							visibility: hidden;">
								
							</textarea>
						</li>
					</ul>-->
				</div>
				<div id="tab2" class="tabson">
					电子商务1501 魏文昊
				</div>
			</div>
			  	  	<script type="text/javascript"> 
      $("#usual1 ul").idTabs(); 
    </script>
		</div>
	</body>
</html>
