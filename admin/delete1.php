<?php
	include "../connection.php";
	$id=$_GET["id"];
	mysqli_query($link,"delete from register where id=$id");
?>
<script type="text/javascript">
		window.location="user.php";
</script>