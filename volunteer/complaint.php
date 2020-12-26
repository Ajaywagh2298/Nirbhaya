<?php 
	include "header.php";
	include "../connection.php";
?>
        
        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                           <form name="form1" action="" method="POST"> 
								<div class="card-body">
									<div class="col-lg-12">
										<div class="card">
											<div class="card-header"><strong>Complaint Box</strong></div>
											<div class="card-body card-block">
											<div class="form-group"><label for="company" class=" form-control-label">Email</label><input type="email" placeholder="Enter Your Mail" class="form-control" name="email" required=""></div>
											<div class="form-group"><label for="vat" class=" form-control-label">Message</label><input type="text" placeholder="Your Query" class="form-control" name="message" required=""></div>
											
											<div class="form-group"><input type="submit" name="submit1" value="Done" class="btn btn-success"></div>						
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
	mysqli_query($link,"insert into complaint values(NULL,'$_POST[email]','$_POST[message]')") or die(mysqli_error($link));
?>
	<script type="text/javascript">
		alert("Thank You For Contact Us!!!");
		window.location.href=window.location.href;
	</script>
	<?php
}
		 
?>		 



<?php
	include "footer.php";
?>