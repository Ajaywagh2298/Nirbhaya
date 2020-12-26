<?php 
	include "header.php";
	include  "../connection.php";

	$id=$_GET["id"];
	$res=mysqli_query($link,"select * from volunteer where id=$id");
	while($row=mysqli_fetch_array($res))
	{
		$name=$row["name"];
		$mobile=$row["mobile"];
		$address=$row["address"];
	}
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1> Voluteer Details</h1>
                    </div>
                </div>
            </div>
           
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                           <form name="form1" action="" method="post"> 
								<div class="card-body">
									<div class="col-lg-6">
										<div class="card">
											<div class="card-header"><strong>Volunteer Edit</strong></div>
											<div class="card-body card-block">
											<div class="form-group"><label for="company" class=" form-control-label">Name</label><input type="text" placeholder="Edit Name" class="form-control" name="name" value="<?php echo $name ?>"></div>
											<div class="form-group"><label for="vat" class=" form-control-label">Mobile</label><input type="text" placeholder="Mobile" class="form-control" name="mobile" value="<?php echo $mobile ?>"></div>
											<div class="form-group"><label for="vat" class=" form-control-label">Address</label><input type="text" placeholder="Address" class="form-control" name="address" value="<?php echo $address ?>"></div>
											<div class="form-group"><input type="submit" name="submit1" value="Update Exam" class="btn btn-success"></div>						
											</div>
										</div>
									</div>
									 
								</div>
							</form>
                        </div> 
                    </div>
                                               
                </div>
            </div>
         </div>

<?php
if(isset($_POST["submit1"]))
{
	mysqli_query($link,"update volunteer set name='$_POST[name]',mobile='$_POST[mobile]',address='$_POST[address]' where id=$id") or die(mysqli_error($link));
?>
	<script type="text/javascript">
	alert("Updated successfully!");
		window.location="volunteer.php";
	</script>
	<?php
}
		 
?>		 

 <?php
		include "footer.php"
   ?>