<?php
header('content-type:text/html;charset=utf-8');
include_once('conn.php');

$c_id=$_GET['c'];

	mysql_query("DELETE FROM comment WHERE c_id = '$c_id'");  
	echo "<script>alert('评论删除成功！');location='list_c.php'</script>"; 
?>