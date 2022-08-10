<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
header('content_type:text/html;charset=utf-8');
include_once('conn.php');
if($_POST['tel']){
    $sql = "select * from identity_information where tel = '$_POST[tel]' and password = '$_POST[password]'";
    $result = mysql_query($sql);
	$num = mysql_num_rows($result);//或者：$num=mysql_affected_row();
	if($num>0){
	 $row = mysql_fetch_array($result);	//将数据以索引方式储存在数组中
	 echo "<p align='center'>".$row[0].",你好！"."<br/>";
	 echo "<p align='center'>"."请确认电话为：".$row[3]."<br/><br/>";
	 echo "<a href='index.php'>点此返回主页</a>";
	 
	 session_start();
	 $_SESSION["tel"]=$row[3];
	}
/*if($_POST['_un']){
    $sql = "select * from db_user where username = '$_POST[_un]' and password = '$_POST[_pw]'";
    $result = mysql_query($sql);
	$num = mysql_num_rows($result);//或者：$num=mysql_affected_row();
	if($num>0){
	 $row = mysql_fetch_array($result);	//将数据以索引方式储存在数组中
	 echo "<p align='center'>".$row[0].",你好！"."<br/>";
	 echo "<p align='center'>"."请确认电话为：".$row[3]."<br/><br/>";
	 echo "<a href='edit1.php'>用户编辑</a>";
	}*/
	else
	  echo "<script>alert('手机号码或密码错误！请重新登录！');location='login.php'</script>";
	}
else
  echo "输入为空！";
?>
</body>
</html>