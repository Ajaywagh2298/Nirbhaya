<?php 
	include "header.php";
	include  "../connection.php";
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Important No.</h1>
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
											<div class="card-header"><strong>Add Numbers</strong></div>
											<div class="card-body card-block">
											<div class="form-group"><label for="company" class=" form-control-label">Description</label><input type="text" placeholder="Enter Description" class="form-control" name="name" required=""></div>
											<div class="form-group"><label for="vat" class=" form-control-label">Number</label><input type="text" placeholder="Enter No." class="form-control" name="no" required=""></div>	
											<div class="form-group"><input type="submit" name="submit1" value="Done" class="btn btn-success"></div>						
											</div>
										</div>
									</div>
									 <div class="col-lg-6">
											<div class="card">
												<div class="card-header">
													<strong class="card-title">Volunteer Details</strong>
												</div>
												<div class="card-body">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th scope="col">Sr</th>
																<th scope="col">Description</th>
																<th scope="col">Number</th>
																<th scope="col">Edit</th>
																<th scope="col">Delete</th>
															</tr>
														</thead>
														<tbody>
														<?php
														$count=0;
														$res=mysqli_query($link,"select * from important");
														 while($row=mysqli_fetch_array($res))
														 {
															$count=$count+1; 
														?>
															<tr>
																<th scope="row"><?php echo $count; ?></th>
																<td><?php echo $row["name"]; ?></td>
																<td><?php echo $row["no"]; ?></td>
																<td><a href="edit2.php?id=<?php echo $row["id"]; ?>"> Edit </a></td>
																<td><a href="delete2.php?id=<?php echo $row["id"]; ?>"> Delete </a></td>
															</tr> 
															<?php
														 }
														?>
															
															
														</tbody>
													</table>
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
	mysqli_query($link,"insert into important values(NULL,'$_POST[name]','$_POST[no]')") or die(mysqli_error($link));
?>
	<script type="text/javascript">
		alert("Number added successfully!");
		window.location.href=window.location.href;
	</script>
	<?php
}
		 
?>		 

 <?php
		include "footer.php"
   ?>