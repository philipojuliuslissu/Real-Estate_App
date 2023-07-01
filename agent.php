<?php
session_start();
require("config.php");
////code

if (!isset($_SESSION['auser'])) {
    header("location:index.php");
}
$con = mysqli_connect("localhost", "root", "", "Real_Estate");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// Fetch agents
$queryAgents = "SELECT * FROM user 	WHERE utype = 'agent'";
$resultAgents = mysqli_query($con, $queryAgents);
$dataAgents = mysqli_fetch_assoc($resultAgents);
$Agents = $dataAgents['totalAgents'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Real Estae Application</title>

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
    <div class="page-wrapper">

        <div class="content container-fluid">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-danger">
                                <i class="fe fe-users"></i>
                            </span>

                        </div>
                        <div class="dash-widget-info">

                            <h3>
                                <?php echo $Agents; ?>
                            </h3>

                            <h6 class="text-muted">Agents</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-danger w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>