<?php 
	include "header.php";
	include "../connection.php";
    
?>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Reuest Location</h1>
                    </div>
                </div>
            </div>
            
        </div>

<iframe allowfullscreen=""  class="maps"  frameborder="1" height="400px" width="100%"  name="map-layer" src="https://www.google.com/maps/embed/v1/directions?
origin=current+location
&destination=nashik road railway station
&key=AIzaSyC-5CY9mOCeg5Y3IhPqi_Yd0-DZtWrJl-E">
</iframe>

 


<?php
	include "footer.php";
?>