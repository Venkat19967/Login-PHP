<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin Panel</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
      <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text">
                    ADMIN PANEL
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="dailydataprocessing.php">
                        <p>Daily Data Processing</p>
                    </a>
                </li>
                <li>
                    <a href="monthlydataprocessing.php">
                        <p>Monthly Data processing</p>
                    </a>
                </li>
                <li>
                    <a href="newstoresetup.php">
                        <p>New Store Setup</p>
                    </a>
                </li>
                <li>
                    <a href="invoicegeneration.php">
                        <p>Invoice generation</p>
                    </a>
                </li>
                 <li>
                    <a href="managebarcodes.php">
                        <p>Manage Barcodes</p>
                    </a>
                </li>
                <li class="active">
                    <a href="maps.php">
                        <p>Maps</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>




    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Maps</a>
                </div>
            </div>
        </nav>

		<div class="content">
            <div class="container-fluid">
                <div class="card card-map">
					<div class="header">
                        <h4 class="title">Google Maps</h4>

                    </div>
					<div class="map">
						<!-- <div id="map"></div> -->  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d972.0351723967966!2d77.74772622916906!3d12.962847906356759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae0df7792faead%3A0x7345ffb520e1ccab!2s62%2C+SH+35%2C+Brooke+Bond+First+Cross%2C+Narayanappa+Garden%2C+Whitefield%2C+Bengaluru%2C+Karnataka+560066!5e0!3m2!1sen!2sin!4v1497331268112" width="1200" height="624" frameborder="0" style="border:0" ></iframe>
					</div>
				</div>
			</div>
		</div>

		<footer class="footer">
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

    <!-- <script>
        $().ready(function(){
            demo.initGoogleMaps();
        });
    </script> -->

   <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d972.0351723967966!2d77.74772622916906!3d12.962847906356759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae0df7792faead%3A0x7345ffb520e1ccab!2s62%2C+SH+35%2C+Brooke+Bond+First+Cross%2C+Narayanappa+Garden%2C+Whitefield%2C+Bengaluru%2C+Karnataka+560066!5e0!3m2!1sen!2sin!4v1497331268112" width="1200" height="600" frameborder="0" style="border:0" ></iframe> -->


</html>
