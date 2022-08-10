

<!--写入数据库-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
header('content-type:text/html;charset=utf-8');
include_once('conn.php');

				
				if (($_FILES["up_vd_pic"]["type"] == "image/gif")
|| ($_FILES["up_vd_pic"]["type"] == "image/jpeg")
|| ($_FILES["up_vd_pic"]["type"] == "image/pjpeg")
|| ($_FILES["up_vd_pic"]["type"] == "image/png"))
  {
  if ($_FILES["up_vd_pic"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["up_vd_pic"]["error"] . "<br />";
    }
  else
    {
    echo "文件名: " . $_FILES["up_vd_pic"]["name"] . "<br />";
    echo "文件类型: " . $_FILES["up_vd_pic"]["type"] . "<br />";
    echo "文件大小: " . ($_FILES["up_vd_pic"]["size"] / 1024) . " Kb<br />";
    echo "文件暂存地址: " . $_FILES["up_vd_pic"]["tmp_name"] . "<br />";

    if (file_exists("../pic/" . $_FILES["up_vd_pic"]["name"]))
      {
      echo $_FILES["up_vd_pic"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["up_vd_pic"]["tmp_name"],
      "../pic/" . $_FILES["up_vd_pic"]["name"]);
      echo "文件存储路径: " . "../pic/" . $_FILES["up_vd_pic"]["name"]."<br><br>";
      }
    }
  }
else
  {
  	global $wrong1;
  	$wrong1="3";
  echo "Invalid file";
  }
  
  if (($_FILES["up_vd"]["type"] == "video/mp4")
  ||($_FILES["up_vd"]["type"] == "video/3gpp")
  ||($_FILES["up_vd"]["type"] == "video/x-ms-asf")
  ||($_FILES["up_vd"]["type"] == "video/isivideo")
  ||($_FILES["up_vd"]["type"] == "video/quicktime")
  ||($_FILES["up_vd"]["type"] == "video/mpeg"))
  {
  if ($_FILES["up_vd"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["up_vd"]["error"] . "<br />";
    }
  else
    {
    echo "文件名: " . $_FILES["up_vd"]["name"] . "<br />";
    echo "文件类型: " . $_FILES["up_vd"]["type"] . "<br />";
    echo "文件大小: " . ($_FILES["up_vd"]["size"] / 1024) . " Kb<br />";
    echo "文件暂存地址: " . $_FILES["up_vd"]["tmp_name"] . "<br />";

    if (file_exists("../video/" . $_FILES["up_vd"]["name"]))
      {
      echo $_FILES["up_vd"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["up_vd"]["tmp_name"],
      "../video/" . $_FILES["up_vd"]["name"]);
      echo "文件存储路径: " . "../video/" . $_FILES["up_vd"]["name"] ."<br><br>";
      }
    }
  }
else
  {
  	global $wrong2;
  	$wrong2="3";
  echo "无效文件";
  }
				
				
				
				

						

ini_set('date.timezone','Asia/Shanghai');
$t=time();
$d_time=date("Y-m-d G:i:s",$t);//提取时间 

  $pic_path= "pic/" . $_FILES["up_vd_pic"]["name"];//获取pic地址
  $vd_path= "video/" . $_FILES["up_vd"]["name"];//获取视频地址
	
	if($wrong1==3 || $wrong2==3)
	echo "视频或封面上传失败，无法插入数据！" ;
	else{
		if($_POST['v_name']){
	$sql="select * from up_video where v_name='$_POST[v_name]'";
	mysql_query($sql);
	$num=mysql_affected_rows();
	if($num>0)
	  echo "<script>alert('此视频名称已存在，请重新选择！');location='up_video.php';</script>";
	  else
	  {	
	  $i="insert into up_video (v_name, v_pic, v_path, v_uploader, v_time) values('$_POST[v_name]','$pic_path','$vd_path','管理员','$d_time')";
	  mysql_query($i);
	  $num=mysql_affected_rows();
	  if($num>0){
	    echo "视频《".$_POST[v_name]."》上传成功！请到<a href='../index.php'>主页</a>查看";
	   }
	  else
	    echo "视频上传失败！";
	   }
	  }
	  else 
	  echo "<script>alert('请输入作品名称!');location='video_add.php';</script>";
	   }
	 
?>
</body>
</html>