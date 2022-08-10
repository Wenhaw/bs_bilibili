<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
		<link rel="stylesheet" href="css/style.css"/>
		<title></title>
		<?php 
			header('content-type:text/html;charset=utf-8');
			ini_set('date.timezone','Asia/Shanghai');
			include_once('conn.php');
			

			$sql_v = "select * from a_video "  ;//读取v_id行内容
						$result_v = mysql_query($sql_v);
						$num_v = mysql_num_rows($result_v);
						$row_v = mysql_fetch_array($result_v);
						
			$sql_n="SELECT COUNT(*) AS count FROM a_video"; //读取当前待审核视频总量
			$result_n=mysql_fetch_array(mysql_query($sql_n)); 
			$count=$result_n['count']; 

						
			
						
						
			
			?>
	</head>
	<body>
		
		<div class="place">
			<span>位置：</span>
			<ul class="placeul">
				<li>
					<a href="#">视频审核</a>
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
					
					<?php	
						if($count==1){    //如果视频总量=1（测试视频），则输出“无待审核视频”
							echo "<tr>
								<td>
									当前无待审核视频
								</td>
								</tr>";
						}
	while($row_v = mysql_fetch_array($result_v)){
					?>
					<tr>
						
						<td>
							<a href="<?php echo "../a_video.php?c=".$row_v[0] ?>"> <?php echo $row_v[0]; ?> </a>
						</td>
						<td>
							<?php echo $row_v[1]; ?>
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
							<a href="<?php echo "list_vt.php?c=".$row_v[0] ?>">通过</a>
							<a href="<?php echo "list_vj.php?c=".$row_v[0] ?>" style="margin-left: 20px;">拒绝</a>
						</td>
					</tr>
					
					<?php
            } ?>
				</tbody>
			</table>
		</div>
	</body>
</html>
