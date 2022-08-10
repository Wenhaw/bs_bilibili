<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css"/>
		<title></title>
		<?php 
			header('content-type:text/html;charset=utf-8');
			ini_set('date.timezone','Asia/Shanghai');
			include_once('conn.php');
			
			$sql = "select * from identity_information "; //读信息表内容
						$result = mysql_query($sql);
						$num = mysql_num_rows($result);
						$row = mysql_fetch_array($result);
						
			?>
	</head>
	<body>
		<div class="place">
			<span>位置：</span>
			<ul class="placeul">
				<li>
					<a href="#">账户列表</a>
				</li>
			</ul>
		</div>
		<div class="rightinfo">
			<div class="tools">
				<ul>
					<li>
						<span style="position: relative; left: 10px;" >
							添加用户:
							<form method="post" action="list_ia.php" enctype="multipart/form-data">
							<input type="text" class="dfinput" style="width: 200px;" name="username" placeholder="请输入用户名"/>
							<input type="password" class="dfinput" style="width: 200px;" name="password" placeholder="请输入密码"/>
							<input type="text" class="dfinput" style="width: 200px;" name="adress" placeholder="请输入地址"/>
							<input type="tel" class="dfinput" style="width: 200px;" name="tel" placeholder="请输入手机"/>
							<input type="file" class="dfinput" style="width: 200px;" name="head"/>
							<input type="submit" value="添加" class="btn" />
							</form>
						</span>
					</li>
				</ul>
			</div>
			<table class="tablelist">
				<thead>
					<tr>
					<th>
						用户名称
					</th>
					<th>
						用户手机
					</th>
					<th>
						用户地址
					</th>
					<th>
						用户投稿数
					</th>
					<th>
						操作
					</th>
					</tr>
				</thead>
				
				<tbody>
				<?php 
					$sql_n="SELECT COUNT(*) AS count FROM up_video WHERE v_tel='$row[3]'"; //读取当前视频总量
					$result_n=mysql_fetch_array(mysql_query($sql_n)); 
					$count=$result_n['count']; 
					?>
					<form method="post" action="list_ix.php">
					<tr>
						<td>
							<input type="text" name="ed_username" style="border: 1px solid #00B5E5; border-radius: 2px; height:15px; width: 200px;" value="<?php echo $row[0];?>" />
						</td>
						<td>
							<input type="tel" name="ed_tel" style="border: 1px solid #00B5E5; border-radius: 2px; height:15px; width: 200px;" value="<?php echo $row[3];?>" />
						</td>
						<td>
							<input type="text" name="ed_adress" style="border: 1px solid #00B5E5; border-radius: 2px; height:15px; width: 200px;" value="<?php echo $row[2];?>" />
						</td>
						<td>
							<?php echo $count;?>
						</td>
						<td>
							<?php echo "<input type='text' name='tel' value=$row[3] style='display: none;' />"; ?>
							<input type="submit" style="background-color: #FFFFFF;color: #00A1D6; cursor: pointer;" value="修改" />
							<a href="<?php echo "list_id1.php?c=".$row[3] ?>" style="margin-left: 20px;color: #00A1D6;">删除</a>
						</td>
					</tr>
					</form>
					
				</tbody>
				<?php 
					while($row = mysql_fetch_array($result)){
						$sql_n="SELECT COUNT(*) AS count FROM up_video WHERE v_tel='$row[3]'"; //读取当前视频总量
						$result_n=mysql_fetch_array(mysql_query($sql_n)); 
						$count=$result_n['count']; 
					?>
				<tbody>
					<form method="post" action="list_ix.php">
					<tr>
						<td>
							<input type="text" name="ed_username" style="border: 1px solid #00B5E5; border-radius: 2px; height:15px; width: 200px;" value="<?php echo $row[0];?>" />
						</td>
						<td>
							<input type="tel" name="ed_tel" style="border: 1px solid #00B5E5; border-radius: 2px; height:15px; width: 200px;" value="<?php echo $row[3];?>" />
						</td>
						<td>
							<input type="text" name="ed_adress" style="border: 1px solid #00B5E5; border-radius: 2px; height:15px; width: 200px;" value="<?php echo $row[2];?>" />
						</td>
						<td>
							<?php echo $count;?>
						</td>
						<td>
							<?php echo "<input type='text' name='tel' value=$row[3] style='display: none;' />"; ?>
							<input type="submit" style="background-color: #FFFFFF;color: #00A1D6; cursor: pointer;" value="修改" />
							<a href="<?php echo "list_id1.php?c=".$row[3] ?>" style="margin-left: 20px;color: #00A1D6;">删除</a>
						</td>
					</tr>
					</form>
				</tbody>
				<?php
            } ?>
			</table>
		</div>
	</body>
</html>
