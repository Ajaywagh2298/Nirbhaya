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


<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Request Ride</div>
                <div class="card-body card-block">
                    <form action="" id="form" name="form" method="post" class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-map-marker"></i>
                                </div>
                                <input type="text" id="start" name="Name" placeholder="Current location" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-map-marker"></i>
                                </div>
                                <input type="text" id="dest" name="destination" placeholder="Destination" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-mobile"></i>
                                </div>
                                <input type="tel" id="mobile" name="mobile" placeholder="Mobile Number" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-actions form-group"><button id="btn" type="submit" name="submit1" class="btn btn-success btn-sm">Request</button>
                        </div>
                    </form>
                    <?php
                    if ( isset( $_POST[ "submit1" ] ) ) {
                        mysqli_query( $link, "insert into req values(NULL,'$_POST[Name]','$_POST[destination]','$_POST[mobile]')" )or die( mysqli_error( $link ) );
                    }
                    else
                        
                    {
                        ?>
                    <script>
                    alert("request not send");</script>
                    <?php
                    }

                    ?>
                </div>

                <div class="card-body card-block">
                    <div id="map" class="card-body card-block">
                        <iframe id="myiframe" name="myiframe" allowfullscreen="" class="maps" frameborder="2" height="400px" width="100%"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!--    Right Panel end-->

    </div>
</div>




<?php
include "footer.php";
?>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script language="javascript" >
           
                        $( function () {
                            $( "#btn" ).on( "click", function ( e ) {
                                e.preventDefault();
                                var start = document.getElementById( "start" ).value;
                                var dest = document.getElementById( "dest" ).value;

                                $( "#form" ).show();
                                var url = 'https://www.google.com/maps/embed/v1/directions?origin=' + start + '&destination=' + dest + '&key=AIzaSyC-5CY9mOCeg5Y3IhPqi_Yd0-DZtWrJl-E&waypoints=10&mode=driving';

                                document.getElementById( "myiframe" ).setAttribute( "src", url );

                                $( "#form" ).show();
                                $( "#map" ).show();
                            } );
                            $( document ).ready( function () {
                                $( "#map" ).hide();
                            } );
                        } );
</script>