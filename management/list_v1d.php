<script>
var a = window.confirm("确定要删除吗？");
if(a==true)
{
	window.location = '<?php echo 'list_v1d2.php?c='.$_GET['c'] ?>' ;
	}

else{
window.location = 'list_v1.php' ;
}
</script>
