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
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
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
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                   
                    
                    <li>
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Request</a>
                    </li>
					<li>
                        <a href="volenteer.php"> <i class="menu-icon fa fa-address-card"></i>Volunteer</a>
                    </li>
					
					<li>
                        <a href="pmap.php"> <i class="menu-icon fa fa-map"></i>Map </a>
                    </li>
					<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-map"></i>Near By</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-heart-o"></i><a href="hospital.php">Hospital</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="police.php">Police Station</a></li>
                            <li><i class="fa fa-bars"></i><a href="garages.php">Garages</a></li>
                            </ul>
                    </li>
					<li>
                        <a href="important.php"> <i class="menu-icon fa fa-address-card"></i>Emergency Nos</a>
                    </li>
					<li>
                        <a href="complaint.php"> <i class="menu-icon fa fa-archive"></i>Complaint </a>
                    </li>
                    <li>
                        <a href="contact.php"> <i class="menu-icon fa fa-edit"></i>About Us </a>
                    </li>
                    <li>
                        <a href="../login.php"> <i class="menu-icon fa fa-close"></i>Logout </a>
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
					 <a class="nav-link" href=""><i class="fa fa-bell" alt="notification" style="font-size:28px"></i><span class="count actions">.</span></a>
                     
                       
					</div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/user.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="profile.php"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;My Profile</a>
                           
                            <a class="nav-link" href="../login.php"><i class="fa fa-power-off"></i>&nbsp;&nbsp;&nbsp;Logout</a>
                        </div>
                    </div>
                    
					<form action="send.php" method="post">
						<div class="language-select dropdown" id="language-select">
							<div class="emergency">
							<input type="submit" style="background-color:red; padding-right:10px; float:right; margin-left:50px;" name="ok" class="btn btn-primary" value="Emergency">
							</div>
						</div>
					</form>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
		
		 <!-- Upper Division -->   

	   