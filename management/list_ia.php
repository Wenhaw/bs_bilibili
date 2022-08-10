<?php 
	if (($_FILES["head"]["type"] == "image/gif")
|| ($_FILES["head"]["type"] == "image/jpeg")
|| ($_FILES["head"]["type"] == "image/pjpeg")
|| ($_FILES["head"]["type"] == "image/png"))
  {
  if ($_FILES["head"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["head"]["error"] . "<br />";
    }
  else
    {
    echo "文件名: " . $_FILES["head"]["name"] . "<br />";
    echo "文件类型: " . $_FILES["head"]["type"] . "<br />";
    echo "文件大小: " . ($_FILES["head"]["size"] / 1024) . " Kb<br />";
    echo "文件暂存地址: " . $_FILES["head"]["tmp_name"] . "<br />";

    if (file_exists("../img/head/" . $_FILES["head"]["name"]))
      {
      echo $_FILES["head"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["head"]["tmp_name"],
      "../img/head/" . $_FILES["head"]["name"]);
      echo "文件存储路径: " . "../img/head/" . $_FILES["head"]["name"]."<br><br>";
      }
    }
  }
else
  {
  	global $wrong1;
  	$wrong1="3";
  echo "头像上传失败，可能是格式错误";
  }
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

  
  
<?php
header('content-type:text/html;charset=utf-8');
include_once('conn.php');

if($wrong1==3 )
echo "<script>alert('头像上传失败！');location='list_i.php'</script>";
else{
$head_path= "img/head/" . $_FILES["head"]["name"];//读取头像地址
if($_POST['tel']){
	$sql="select * from Identity_information where tel='$_POST[tel]'";
	mysql_query($sql);
	$num=mysql_affected_rows();
	if($num>0)
	  echo "<script>alert('此手机号已被注册，请更换手机号！');location='list_i.php';</script>";
	  else
	  {
	  $i="insert into Identity_information values('$_POST[username]','$_POST[password]','$_POST[adress]','$_POST[tel]','$head_path')";
	  mysql_query($i);
	  $num=mysql_affected_rows();
	  if($num>0)
	    echo "用户注册成功！";
	  else
	    echo "用户注册失败！";
	   }
	}
else
  echo "输入为空！";
}
?>
</body>
</html>