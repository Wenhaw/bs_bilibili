<?php
header('content_type:text/html;charset=utf-8');
include_once('conn.php');

mysql_query("DELETE FROM up_video WHERE v_id = '$_POST[v_id]'");
echo "<script>alert('视频删除成功！');location='a_edit.php'</script>";
?>