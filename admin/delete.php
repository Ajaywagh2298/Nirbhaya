<?php
	include "../connection.php";
	$id=$_GET["id"];
	mysqli_query($link,"delete from volunteer where id=$id");
?>
<script type="text/javascript">
		window.location="volunteer.php";
</script>