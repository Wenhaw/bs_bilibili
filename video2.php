<?php
	header('content-type:text/html;charset=utf-8');
include_once('conn.php');

	session_start();
	$tel=$_SESSION["tel"]; //连接登录用户
			
	$sql = "select * from identity_information where tel = '$tel' "; //读取tel行内容
		$result = mysql_query($sql);
		$num = mysql_num_rows($result);
		$row = mysql_fetch_array($result);
						

ini_set('date.timezone','Asia/Shanghai');
$t=time();
$d_time=date("Y-m-d G:i:s",$t);//提取时间  




if($row[0])
{
	if($_POST[content]){
		mysql_query("insert into comment (c_content, c_username, c_time, c_tel, c_head, v_id) values('$_POST[content]','$row[0]','$d_time','$row[3]','$row[4]','$_POST[jhsj]')");
		echo "<script>alert('评论发布成功！');location='video.php?c=$_POST[jhsj]'</script>";
	  }
	  else
	  echo "<script>alert('请输入评论内容！');location='video.php?c=$_POST[jhsj]'</script>";
	}
	else
	echo "<script>alert('请登录后再评论！');location='login.php'</script>";
?>