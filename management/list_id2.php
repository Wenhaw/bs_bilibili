<?php
header('content-type:text/html;charset=utf-8');
include_once('conn.php');

$tel=$_GET['c'];
echo $tel;
	$sql = "select * from Identity_information where tel = '$tel' "; //读取v_id行内容
	$result = mysql_query($sql);
	$num = mysql_num_rows($result);
	$row = mysql_fetch_array($result);
	
	mysql_query("DELETE FROM Identity_information WHERE tel = '$tel'");
	
 
	echo "<script>alert('账户删除成功！');location='list_i.php'</script>"; 
?>