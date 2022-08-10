<script>
var a = window.confirm("确定要删除吗？");
if(a==true)
{
	window.location = '<?php echo 'list_c3.php?c='.$_GET['c'] ?>' ;
	}

else{
window.location = 'list_c.php' ;
}
</script>
