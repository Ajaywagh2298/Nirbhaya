<?php 
	include "header.php";
	include  "../connection.php";
    
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Volunteer Page</h1>
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
											<div class="card-header"><strong>Volunteer Registration</strong></div>
											<div class="card-body card-block">
											<div class="form-group"><label for="company" class=" form-control-label">Full Name</label><input type="text" placeholder="First Middle Last" class="form-control" name="name" required=""></div>
                                            <div class="form-group"><label for="vat" class=" form-control-label">Email Address</label><input type="text" placeholder="email" class="form-control" name="email" required=""></div>
											<div class="form-group"><label for="vat" class=" form-control-label">Mobile</label><input type="text" placeholder="Mobile No" class="form-control" name="mobile" required=""></div>
											<div class="form-group"><label for="vat" class=" form-control-label">Address</label><input type="text" placeholder="Address" class="form-control" name="address" required=""></div>
                                            <div class="form-group"><label for="vat" class=" form-control-label">Username</label><input type="text" placeholder="username" class="form-control" name="username" required=""></div>
                                            
                                            <div class="form-group"><label for="vat" class=" form-control-label">Password</label><input type="password" placeholder="password" class="form-control" name="password" required=""></div>
                                              <div class="form-group"><label class=" form-control-label">State:</label>
                                            <select onChange="getdistrict(this.value);" name="state" id="state" class="form-control">
                                        <option value="">Select</option>
                                        <?php $query =mysqli_query($link,"SELECT * FROM state");
while($row=mysqli_fetch_array($query))
{ ?>
                                        <option value="<?php echo $row['StCode'];?>" name="state">
                                            <?php echo $row['StateName'];?> 
                                        </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                            
                                        </div>
                                        
                                        <div class="form-group"><label class=" form-control-label">District:</label>
                                         <select name="district" id="district-list" class="form-control">
                                        <option value="">Select</option>
                                         </select>   
                                        </div>
                                             
											<div class="form-group"><label for="vat" class=" form-control-label">City</label><input type="text" placeholder="Enter City" class="form-control" name="city" required=""></div>
                                                   
                                                   
                                            <div class="form-group"><label for="vat" class=" form-control-label">ID Proof</label><br><input type="file"  name="proof" required="" accept=".pdf,.txt,.docx"></div>
                                            <div class="form-group"><label for="vat" class=" form-control-label">Volunteer Photo</label><br><input type="file" name="vphoto" required="" accept=".jpeg,.jpg,.png"></div>    
											<div class="form-group"><input type="submit" name="submit1" value="Done" class="btn btn-success"></div>						
											</div>
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
	mysqli_query($link,"insert into volunteer values(NULL,'$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[address]','$_POST[username]','$_POST[password]','$_POST[state]','$_POST[district]','$_POST[city]','$_POST[proof]','$_POST[vphoto]')") or die(mysqli_error($link));
?>
	<script type="text/javascript">
		alert("volunteer added successfully!");
		window.location.href=window.location.href;
	</script>
	<?php
}
		 
?>		 

 <?php
		include "footer.php"
   ?>