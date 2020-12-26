<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nirbhaya</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

<link rel="icon" href="icon/face-girl-long-hair-icon-girl-icon-png-512_512.png" type="image/icon type">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

 <script>
        function getdistrict( val ) {
            $.ajax( {
                type: "POST",
                url: "get_district.php",
                data: 'state_id=' + val,
                success: function ( data ) {
                    $( "#district-list" ).html( data );
                }
            } );
        }

        function selectCountry( val ) {
            $( "#search-box" ).val( val );
            $( "#suggesstion-box" ).hide();
        }
    </script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="assets/js/photo.js"></script>
</head>

</head>

<body>
    
<!-- left Panel-->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="dashboard.php"><img src="images/c.jpg" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="icon/icon2.ico" style="margin-right:20px;" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                   
                    <li>
                        <a href="register.php"> <i class="menu-icon fa fa-life-saver"></i>User Registration</a>
                    </li>
                    <li>
                        <a href="login.php"> <i class="menu-icon fa fa-user-secret"></i>Login</a>
                    </li>
					<li>
                        <a href="admin/login.php"> <i class="menu-icon fa fa-address-card"></i>Admin Login</a>
                    </li>
					<li>
                        <a href="volunteer2.php"><i class="menu-icon fa fa-asterisk"></i>Volunteer Registration</a>
                    </li>
					                    
                </ul>
            </div>
        </nav>
    </aside>
    
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                          
					
					</div>
                </div>


            </div>

        </header><!-- /header -->
        <!-- Header-->
		
		 <!-- Upper Division -->   

	   