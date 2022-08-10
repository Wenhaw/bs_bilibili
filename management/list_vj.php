<?php
	header('content-type:text/html;charset=utf-8');
include_once('conn.php');

    
	$v_id=$_GET['c'];
	$sql_av = "select * from a_video where a_v_id = '$v_id' "; //读取v_id行内容
	$result_av = mysql_query($sql_av);
	$num_av = mysql_num_rows($result_av);
	$row_av = mysql_fetch_array($result_av);
	$pic_path= "../" . $row_av[2];
	$vd_path= "../" . $row_av[3];//获取视频地址
	unlink($pic_path);
	unlink($vd_path);
	
	mysql_query("DELETE FROM a_video WHERE a_v_id = '$v_id'");  
	echo "<script>alert('视频删除成功！');location='list_v.php'</script>"; 
?>