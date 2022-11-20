<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="user.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php include "../include/header.html" ?>
        <?php include "../include/navbar.html" ?>

		<div class="dash1">
            <div class="dash2">
				<div class="dashnav1">
					<ul>
					    <li><a href="home.php">Dashboard</a></li>
					    <li><a href="editacc.php">Edit Acc</a></li>
					    <li class="dropdown">
					      <a href="javascript:void(0)" class="dropbtn">Account</a>
					      <div class="dropdown-content">
					        <a href="/forum/user/dashboard.html">Dashboard</a>
					        <a href="#">Create</a>
					        <a href="#">Setting</a>
					      </div>
					    </li>
					</ul>
				</div>
				<div class="dashnav2">
					<p><?=$_SESSION['name']?></p>
					<p>Profile Pic</p>
				</div>
				<div class="dashmain">
					<h2>Home Page</h2>
					<p>Welcome back, <?=$_SESSION['name']?>!</p>
				</div>
			</div>
    	</div>

		<?php include "../include/sidenav.html" ?>
        <?php include "../include/altdiv.html" ?>
	</body>
</html>