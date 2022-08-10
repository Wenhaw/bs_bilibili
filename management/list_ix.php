<?php
header('content_type:text/html;charset=utf-8');
include_once('conn.php');
echo $_POST['tel'];

$sql="select * from Identity_information where tel='$_POST[ed_tel]'";
	mysql_query($sql);
	$num=mysql_affected_rows();
	if($num>0 && $_POST[ed_tel]!=$_POST[tel])
	  echo "<script>alert('此手机号已被注册，请更换手机号！');location='list_i.php';</script>";
	  else
	  {
	  		/*****数据库信息更新*****/
	  		
	  		
	  		
	  		
	  
if($_POST[ed_tel]){
	$sqlup="update Identity_information set tel='$_POST[ed_tel]' where tel='$_POST[tel]'";
	echo "<p align='center'>电话修改成功！";
		mysql_query($sqlup);
	$sql="select * from Identity_information where tel='$_POST[tel]'";
	$re=mysql_query($sql);
	$arr=mysql_fetch_array($re);
	}
if($_POST[ed_username]){
	$sqlup="update Identity_information set username='$_POST[ed_username]' where tel='$_POST[tel]'";
	echo "<p align='center'>昵称修改成功！";
		mysql_query($sqlup);
	$sql="select * from Identity_information where tel='$_POST[tel]'";
	$re=mysql_query($sql);
	$arr=mysql_fetch_array($re);
	}
if($_POST[ed_adress]){
	$sqlup="update Identity_information set adress='$_POST[ed_adress]' where tel='$_POST[tel]'";
	echo "<p align='center'>地址修改成功！";
		mysql_query($sqlup);
	$sql="select * from Identity_information where tel='$_POST[tel]'";
	$re=mysql_query($sql);
	$arr=mysql_fetch_array($re);
	}
	
//if($_FILES[ed_head] != $_SESSION[head]){
//	
//	
//	
//	
//	 
//	if (($_FILES["ed_head"]["type"] == "image/gif")
//|| ($_FILES["ed_head"]["type"] == "image/jpeg")
//|| ($_FILES["ed_head"]["type"] == "image/pjpeg")
//|| ($_FILES["ed_head"]["type"] == "image/png"))
//{
//if ($_FILES["ed_head"]["error"] > 0)
//  {
//  echo "Return Code: " . $_FILES["ed_head"]["error"] . "<br />";
//  }
//else
//  {
//  echo "文件名: " . $_FILES["ed_head"]["name"] . "<br />";
//  echo "文件类型: " . $_FILES["ed_head"]["type"] . "<br />";
//  echo "文件大小: " . ($_FILES["ed_head"]["size"] / 1024) . " Kb<br />";
//  echo "文件暂存地址: " . $_FILES["ed_head"]["tmp_name"] . "<br />";
//
//  if (file_exists("img/head/" . $_FILES["ed_head"]["name"]))
//    {
//    echo $_FILES["ed_head"]["name"] . " already exists. ";
//    }
//  else
//    {
//    move_uploaded_file($_FILES["ed_head"]["tmp_name"],
//    "img/head/" . $_FILES["ed_head"]["name"]);
//    echo "文件存储路径: " . "img/head/" . $_FILES["ed_head"]["name"]."<br><br>";
//    }
//  }
//}
//	
//	
//	
//	
//	
//	
//	$sqlup="update Identity_information set head= '$head_path' where tel='$_SESSION[tel]'";
//	echo "<p align='center'>头像修改成功！";
//		mysql_query($sqlup);
//	$sql="select * from Identity_information where tel='$_SESSION[tel]'";
//	$re=mysql_query($sql);
//	$arr=mysql_fetch_array($re);
//	}
	  echo "<a href='index.php'>点此返回主页</a>";
	  //数据库信息更新完成
	  
	  }
?>