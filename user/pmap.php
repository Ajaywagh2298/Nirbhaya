<!----><?php
include "header.php";
?>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Your Are Here (User Location)</h1>
                    </div>
                </div>
            </div>
            
        </div>

<!--<iframe allowfullscreen=""  class="maps"  frameborder="1" height="400px" width="100%"  name="map-layer" src="https://www.google.com/maps/embed/v1/directions?
origin=current+location
&destination=current+location
&key=AIzaSyC-5CY9mOCeg5Y3IhPqi_Yd0-DZtWrJl-E">
</iframe>-->
<iframe
  width="100%"
  height="450px"
  frameborder="1" style="border:0"
  src="https://www.google.com/maps/embed/v1/search?key=AIzaSyC-5CY9mOCeg5Y3IhPqi_Yd0-DZtWrJl-E
    &q=GPS+current+location&zoom=16" allowfullscreen>
</iframe>
                   
<?php
include "footer.php";
?>
				   