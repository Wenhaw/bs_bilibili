<?php
header('content-type:text/html;charset=utf-8');
include_once('conn.php');

	$v_id=$_GET['c'];
	$sql_av = "select * from a_video where a_v_id = '$v_id' "; //读取v_id行内容
						$result_av = mysql_query($sql_av);
						$num_av = mysql_num_rows($result_av);
						$row_av = mysql_fetch_array($result_av);
						
	 $i="insert into up_video (v_id, v_name, v_pic, v_path, v_uploader, v_time ,v_tel) values('$row_av[0]','$row_av[1]','$row_av[2]','$row_av[3]','$row_av[4]','$row_av[5]','$row_av[6]')";
	  mysql_query($i);
	  $num=mysql_affected_rows();
	  if($num>0){
	    echo "<script>alert('视频审核成功！');location='list_v.php'</script>";
	    mysql_query("DELETE FROM a_video WHERE a_v_id = '$v_id'");
	   }
	  else
	    echo "视频上传失败！";
	   
?>