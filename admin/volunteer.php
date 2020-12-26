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
									
									 <div class="col-lg-6" width="100%">
											
												<div class="card-header" width="100%">
													<strong class="card-title" width="100%">Volunteer Details</strong>
												</div>
												
													<table class="table table-bordered" border="2px">
														<thead>
															<tr>
																<th width="30" scope="col">Sr</th>
																<th width="39" scope="col">Name</th>
                                                                <th width="38" scope="col">Email</th>
																<th width="46" scope="col">Mobile</th>
																<th width="54" scope="col">Address</th>
                                                                <th width="54" scope="col">State</th>
                                                                <th width="54" scope="col">District</th>
                                                                <th width="54" scope="col">City</th>
                                                                <th width="59" scope="col">ID Proof</th>
                                                                <th width="39" scope="col">Photo</th>
																<th width="40" scope="col">Edit</th>
																<th width="72" scope="col">Delete</th>
															</tr>
														</thead>
														<tbody>
														<?php
														$count=0;
														$res=mysqli_query($link,"select * from volunteer");
														 while($row=mysqli_fetch_array($res))
														 {
															$count=$count+1; 
														?>
															<tr>
																<th scope="row"><?php echo $count; ?></th>
																<td><?php echo $row["name"]; ?></td>
                                                                <td><?php echo $row["email"]; ?></td>
																<td><?php echo $row["mobile"]; ?></td>
																<td><?php echo $row["address"]; ?></td>
                                                                <td><?php echo $row["state"]; ?></td>
                                                                <td><?php echo $row["district"]; ?></td>
                                                                <td><?php echo $row["city"]; ?></td>
                                                                <td><?php echo $row["proof"]; ?></td>
                                                                <td><img src="<?php  echo $row["vphoto"]; ?>" alt="PHOTO" class="img-thumbnail" width="220px"></td>
																<td><a href="edit.php?id=<?php echo $row["id"]; ?>"> Edit </a></td>
																<td><a href="delete.php?id=<?php echo $row["id"]; ?>"> Delete </a></td>
															</tr> 
															<?php
														 }
														?>
															
															
														</tbody>
													</table>
												
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
		include "footer.php"
   ?>