<?php
session_start();
require("config.php");
////code

if (!isset($_SESSION['auser'])) {
	header("location:index.php");
}
$con = mysqli_connect("localhost","root","","Real_Estate");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

// Fetch the number of users
$queryUsers = "SELECT COUNT(uid) AS totalUsers FROM user";
$resultUsers = mysqli_query($con, $queryUsers);
$dataUsers = mysqli_fetch_assoc($resultUsers);
$totalUsers = $dataUsers['totalUsers'];

// Fetch the number of properties
$queryProperties = "SELECT COUNT(pid) AS totalProperties FROM property";
$resultProperties = mysqli_query($con, $queryProperties);
$dataProperties = mysqli_fetch_assoc($resultProperties);
$totalProperties = $dataProperties['totalProperties'];

// Fetch the number of properties
$queryRent = "SELECT COUNT(rid) AS requestRent FROM request";
$resultRent = mysqli_query($con, $queryRent);
$dataRent = mysqli_fetch_assoc($resultRent);
$requestRent = $dataRent['requestRent'];

// Fetch the number of agents
$queryAgents = "SELECT COUNT(uid) AS totalAgents FROM user 	WHERE utype = 'agent'";
$resultAgents = mysqli_query($con, $queryAgents);
$dataAgents = mysqli_fetch_assoc($resultAgents);
$totalAgents = $dataAgents['totalAgents'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Admin Dashboard</title>

	<!-- icon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feathericon.min.css">

	<link rel="stylesheet" href="assets/plugins/morris/morris.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- [if lt IE 9]> -->
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<!-- <![endif] -->
</head>

<body>
	
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



	<!-- Header -->
	<?php include("header.php"); ?>
	<!-- /Header -->

	<!-- Page Wrapper -->
	<div class="page-wrapper">

		<div class="content container-fluid">

			<!-- Page Header -->
			<div class="page-header">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="page-title">Welcome Admin!</h3>
						<p></p>
						<ul class="breadcrumb">
							<li class="breadcrumb-item active">Dashboard</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Page Header -->

			<div class="row">
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card">
						<div class="card-body">
							<div class="dash-widget-header">
								<span class="dash-widget-icon bg-primary">
									<i class="fe fe-users"></i>
								</span>

							</div>
							<div class="dash-widget-info">

								<h3><?php echo $totalUsers; ?></h3>

								<h6 class="text-muted">Users</h6>
								<div class="progress progress-sm">
									<div class="progress-bar bg-primary w-50"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card">
						<div class="card-body">
							<div class="dash-widget-header">
								<span class="dash-widget-icon bg-primary">
									<i class="fe fe-users"></i>
								</span>

							</div>
							<div class="dash-widget-info">

								<h3><?php echo $requestRent; ?></h3>

								<h6 class="text-muted">Requests To Rent</h6>
								<div class="progress progress-sm">
									<div class="progress-bar bg-primary w-50"></div>
								</div>	
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card">
						<div class="card-body">
							<div class="dash-widget-header">
								<span class="dash-widget-icon bg-danger">
									<i class="fe fe-users"></i>
								</span>

							</div>
							<div class="dash-widget-info">

								<h3><?php echo $totalAgents; ?></h3>

								<h6 class="text-muted">Agents</h6>
								<div class="progress progress-sm">
									<div class="progress-bar bg-danger w-50"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card">
						<div class="card-body">
							<div class="dash-widget-header">
								<span class="dash-widget-icon bg-danger">
									<i class="fe fe-users"></i>
								</span>

							</div>
							<div class="dash-widget-info">

								<h3><?php echo $totalProperties; ?></h3>

								<h6 class="text-muted">Properties</h6>
								<div class="progress progress-sm">
									<div class="progress-bar bg-danger w-50"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 col-lg-6">

					<!-- Sales Chart -->
					<div class="card card-chart">
						<div class="card-header">
							<h4 class="card-title">Sales Overview</h4>
						</div>
						<div class="card-body">
							<div id="morrisArea"></div>
						</div>
					</div>
					<!-- /Sales Chart -->

				</div>
				<div class="col-md-12 col-lg-6">

					<!-- Invoice Chart -->
					<div class="card card-chart">
						<div class="card-header">
							<h4 class="card-title">Property Status</h4>
						</div>
						<div class="card-body">
							<div id="morrisLine"></div>
						</div>
					</div>
					<!-- /Invoice Chart -->

				</div>
			</div>
		</div>
	</div>
	<!-- /Page Wrapper -->


	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<script src="assets/plugins/raphael/raphael.min.js"></script>
	<script src="assets/plugins/morris/morris.min.js"></script>
	<script src="assets/js/chart.morris.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

</body>

</html>