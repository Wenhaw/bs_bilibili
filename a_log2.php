<?php 
			header('content_type:text/html;charset=utf-8');
include_once('conn.php');
if($_POST['a_tel']){
    $sql = "select * from administrator where a_tel = '$_POST[a_tel]' and a_password = '$_POST[a_password]'";
    $result = mysql_query($sql);
	$num = mysql_num_rows($result);//或者：$num=mysql_affected_row();
	if($num>0){
	 $row = mysql_fetch_array($result);	//将数据以索引方式储存在数组中
	 session_start();
	 $_SESSION["tel"]=$row[3];
	 echo "<script>alert('欢迎您，管理员! 请进行视频管理');location='a_edit.php'</script>";
	}
	else
	  echo "<script>alert('用户名或密码错误！请重新登录！');location='a_log.php'</script>";
	}
else
  echo "输入为空！";
			?>