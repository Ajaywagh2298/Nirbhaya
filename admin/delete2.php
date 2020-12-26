<?php
	include "../connection.php";
	$id=$_GET["id"];
	mysqli_query($link,"delete from important where id=$id");
?>
<script type="text/javascript">
		window.location="important.php";
</script>