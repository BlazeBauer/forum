<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="user.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<?php include "../include/header.html" ?>
        <?php include "../include/navbar.html" ?>

		<div class="maindiv">
            <div class="home1"> 
				<h2>Home Page</h2>
				<p>Welcome back, <?=$_SESSION['name']?>!</p>
            </div>
        </div>

		<?php include "../include/sidenav.html" ?>
        <?php include "../include/altdiv.html" ?>
	</body>
</html>