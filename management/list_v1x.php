<?php
header('content_type:text/html;charset=utf-8');
include_once('conn.php');
echo $_POST['v_id'];

mysql_query("UPDATE up_video SET v_name = '$_POST[update]'
WHERE v_id = '$_POST[v_id]'");
echo "<script>alert('视频名称修改成功！');location='list_v1.php'</script>";
?>