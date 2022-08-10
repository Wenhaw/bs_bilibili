<?php
header('content_type:text/html;charset=utf-8');
include_once('conn.php');
echo $_POST['v_id'];

if($_POST[ed_vname]){
mysql_query("UPDATE up_video SET v_name = '$_POST[ed_vname]'
WHERE v_id = '$_POST[v_id]'");
echo "<script>alert('视频名称修改成功！');location='a_edit.php'</script>";
}
else
echo "<script>alert('视频名称为空！');location='a_edit.php'</script>";
?>