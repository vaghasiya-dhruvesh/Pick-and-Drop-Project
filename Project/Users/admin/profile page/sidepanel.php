<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="dashadmin.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<style>
		.side-bar {
	width: 250px;
    /* border: 2px solid red; */
	background: #000000;
	min-height: 320vh;
	transition: 500ms width;
    display: inline;
    position: absolute;
}
	</style>
</head>
<body>
<nav class="side-bar">
			<div class="user-p">
				<img src="alex.jpg">
				<h4>Dhruvesh</h4>
			</div>
			<ul>
				<li>
					<a href="dashboard.php">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="managecustomer.php">
					<i class='fas fa-users' style='font-size:24px'></i>
						<span>Customers</span>
					</a>
				</li>
				<li>
					<a href="manageowner.php">
					<i class="fa fa-handshake-o fa-sm" aria-hidden="true"></i>
						<span>Vehicle owner</span>
					</a>
				</li>
				<li>
					<a href="managevehicle.php">
					<i class='fas fa-car' style='font-size:24px'></i>
						<span>Vehicle</span>
					</a>
				</li>
				
				<li>
					<a href="logout.php">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>