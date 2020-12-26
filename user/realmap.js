<form id="form">
    <label for="name">What is your destination?</label>
    <br />
    <input id="dest" type="text" />
    <button id="btn" type="submit" value="Submit">Submit</button>
</form>

<div id="map" class="gmap_unix card-body">
    <iframe id="myiframe" name="myiframe" allowfullscreen="" class="maps" frameborder="1" height="800px" width="100%" ></iframe>
</div>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script language="javascript">
    $(function() {
        $("#btn").on("click", function(e) {
            e.preventDefault();
			var dest = document.getElementById("dest").value;
			
			$("#form").hide();
            var url = 'https://www.google.com/maps/embed/v1/directions?origin=current+location&destination=' + dest + '&key=AIzaSyC-5CY9mOCeg5Y3IhPqi_Yd0-DZtWrJl-E';
			
            document.getElementById("myiframe").setAttribute("src", url);

			$("#form").show();
            $("#map").show();
        });
	    $(document).ready(function(){
			$("#map").hide();
		});
    });
</script>

// JavaScript Document