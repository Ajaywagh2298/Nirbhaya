<?php 
	include "header.php";
	include "../connection.php";
?>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Nearest Police Station</h1>
                    </div>
                </div>
            </div>
           
        </div>
<div class="card">
                            <div class="card-header">
                                <h4>Map</h4>
                            </div>
                            <div class="gmap_unix card-body">
                                                     <iframe allowfullscreen="" class="maps" width="100%" height="600px" frameborder="0" id="map-layer" name="map-layer" src="https://www.google.com/maps/embed/v1/search?q=GPS+current+location+police+station&key=AIzaSyC-5CY9mOCeg5Y3IhPqi_Yd0-DZtWrJl-E&zoom=15">
</iframe>
          
</iframe>
                            </div>
                        </div>

<?php
	include "footer.php";
?>