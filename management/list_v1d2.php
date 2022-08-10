<?php
header('content-type:text/html;charset=utf-8');
include_once('conn.php');

$v_id=$_GET['c'];
	$sql_v = "select * from up_video where v_id = '$v_id' "; //读取v_id行内容
	$result_v = mysql_query($sql_v);
	$num_v = mysql_num_rows($result_v);
	$row_v = mysql_fetch_array($result_v);
	$pic_path= "../" . $row_v[2];
	$vd_path= "../" . $row_v[3];//获取视频地址
	unlink($pic_path);
	unlink($vd_path);
	
	mysql_query("DELETE FROM up_video WHERE v_id = '$v_id'");
	mysql_query("DELETE FROM comment WHERE v_id = '$v_id'");  
	echo "<script>alert('视频删除成功！');location='list_v1.php'</script>"; 
?>