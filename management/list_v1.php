<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css"/>
		<title></title>
		<script src="layer/layer.js"></script>
		<script src="js/jquery-3.4.0.js"></script>
		<?php 
			header('content-type:text/html;charset=utf-8');
			ini_set('date.timezone','Asia/Shanghai');
			include_once('conn.php');
			

			$sql_v = "select * from up_video "  ;//读取v_id行内容
						$result_v = mysql_query($sql_v);
						$num_v = mysql_num_rows($result_v);
						$row_v = mysql_fetch_array($result_v);
						
			
						
						
			
			?>
	</head>
	<body>

		<div class="place">
			<span>位置：</span>
			<ul class="placeul">
				<li>
					<a href="#">视频列表</a>
				</li>
			</ul>
		</div>
		<div class="rightinfo">
			<div class="tools">
				<ul>
					<li>
						<span>
							视频名称
							<input type="text" class="dfinput"  />
							<input type="button" value="搜索" class="btn" onclick="alert('对不起，此功能暂不可用')"/>
						</span>
					</li>
				</ul>
			</div>
			<table class="tablelist">
				<thead>
					<tr>
					
					<th>
						编号
					</th>
					<th>
						视频名称
					</th>
					<th>
						作者名称
					</th>
					<th>
						作者手机
					</th>
					<th>
						投稿时间
					</th>
					<th>
						操作
					</th>
					</tr>
				</thead>
				<tbody>
				
				<form method="post" action="list_v1x.php">
					<tr>
						
						<td>
							<a href="<?php echo "../video.php?c=".$row_v[0] ?>"> <?php echo $row_v[0]; ?> </a>
						</td>
						<td>
							<input type="text" name="update" style="border: 1px solid #00B5E5; border-radius: 2px; height:15px; width: 200px;" value="<?php echo $row_v[1]; ?>" />
						</td>
						<td>
							<?php echo $row_v[4]; ?>
						</td>
						<td>
							<?php echo $row_v[6]; ?>
						</td>
						<td>
							<?php echo $row_v[5]; ?>
						</td>
						<td>
							<?php echo "<input type='text' name='v_id' value=$row_v[0] style='display: none;' />"; ?>
							<input type="submit" style="background-color: #FFFFFF;color: #00A1D6; cursor: pointer;" value="修改" />
							<a href="<?php echo "list_v1d.php?c=".$row_v[0] ?>" style="margin-left: 20px;color: #00A1D6;">删除</a>
						</td>
					</tr>
					</form>
					<?php
	while($row_v = mysql_fetch_array($result_v)){
					?>
					<form method="post" action="list_v1x.php">
					<tr>
						
						<td>
							<a href="<?php echo "../video.php?c=".$row_v[0] ?>"> <?php echo $row_v[0]; ?> </a>
						</td>
						<td>
							<input type="text" name="update" style="border: 1px solid #00B5E5; border-radius: 2px; height:15px; width: 200px;" value="<?php echo $row_v[1]; ?>" />
						</td>
						<td>
							<?php echo $row_v[4]; ?>
						</td>
						<td>
							<?php echo $row_v[6]; ?>
						</td>
						<td>
							<?php echo $row_v[5]; ?>
						</td>
						<td>
							<?php echo "<input type='text' name='v_id' value=$row_v[0] style='display: none;' />"; ?>
							<input type="submit" style="background-color: #FFFFFF;color: #00A1D6; cursor: pointer;" value="修改" />
							<a href="<?php echo "list_v1d.php?c=".$row_v[0] ?>" style="margin-left: 20px;color: #00A1D6;">删除</a>
						</td>
					</tr>
					</form>
					
					<?php
            } ?>
				</tbody>
			</table>
		</div>
	</body>
</html>
