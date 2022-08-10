<?php
	header('content-type:text/html;charset=utf-8');
include_once('conn.php');
	
$i="insert into test values('$_POST[a]','$_POST[b]','$_POST[c]')";

mysql_query($i);
$num=mysql_affected_rows();


$sql_c = "SELECT * FROM test ORDER BY id " ; //评论数据读取
			$result_c = mysql_query($sql_c);
			$row_c = mysql_fetch_array($result_c);
			$num_c = mysql_num_rows($result_c);
			
			while($row_c = mysql_fetch_array($result_c)){
	  	echo $row_c[0];
	  }
			
			

?>