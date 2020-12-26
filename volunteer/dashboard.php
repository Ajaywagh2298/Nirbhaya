<?php
include "header.php";
include "../connection.php";
	
	


?>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Request a Safe ride here</h1>
                    </div>
                </div>
            </div>
            
        </div>
 
<!-- Body -->
        <div class="content mt-3">
            <div class="animated fadeIn">
                                             <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-header">Request Ride</div>
                                                        <div class="card-body card-block">
                                                            <form action="map.php" id="form" method="post" class="">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                                                        <input type="text" id="from" name="Name" placeholder="Current location" class="form-control" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                                                        <input type="text" id="dest" name="destination" placeholder="Destination" class="form-control" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-mobile"></i></div>
                                                                        <input type="tel" id="mobile" name="mobile" placeholder="Mobile Number" class="form-control" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions form-group"><button id="btn" type="submit" name="submit" class="btn btn-success btn-sm">Request</button></div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
            </div>
        </div>
 		 <!-- Right Panel end-->

		 
		 <?php
if(isset($_POST["submit"]))
{
	mysqli_query($link,"insert into req values(NULL,'$_POST[name]','$_POST[destination]','$_POST[mobile]')") or die(mysqli_error($link));
?>
	<script type="text/javascript">
		alert("Requested Ride successfully!");
		window.location="map.php";
	</script>
	<?php
}
		 
?>		 
		 
<?php
include "footer.php";
?>