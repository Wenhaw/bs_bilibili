<?php
header('content_type:text/html;charset=utf-8');
include_once('conn.php');
echo $_POST['c_id'];

mysql_query("UPDATE comment SET c_content = '$_POST[update]'
WHERE c_id = '$_POST[c_id]'");
echo "<script>alert('评论修改成功！');location='list_c.php'</script>";
?>