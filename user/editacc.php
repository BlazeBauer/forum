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
					    <li><a href="#news">News</a></li>
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
					<div class="win_edit">
						<div class="win_head">
							<p>	Edit Account</p>
						</div>
						<div class="win_edit_con">
  				  			<a href="profiles.php">View all profiles</a>
  				  			<form action="form.php" method="post" enctype="multipart/form-data">
  				      		  <h2 class="text-center mb-3 mt-3">Update profile</h2>
  				      		  <?php if (!empty($msg)): ?>
  				      		    <div class="alert <?php echo $msg_class ?>" role="alert">
  				      		      <?php echo $msg; ?>
  				      		    </div>
  				      		  <?php endif; ?>
  				      		  <img src="../images/avatar.jpg" onClick="triggerClick()" id="profileDisplay">
  				      		  <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control">
  				      		  <label>Profile Image</label>

  				      		  <div class="form-group">
  				      		    <label>Bio</label>
  				      		    <textarea name="bio" class="form-control"></textarea>
  				      		  </div>
  				      		  <div class="form-group">
  				      		    <button type="submit" name="save_profile" class="btn btn-primary btn-block">Save User</button>
  				      		  </div>
							</form>
						</div>
					</div>
					<div class="win_profile">
						<div class="win_head">
							<p>	<?=$_SESSION['name']?>'s Profile </p>
						</div>
						<div class="win_profile_con">
						</div>
					</div>
				</div>
			</div>
    	</div>

		<?php include "../include/sidenav.html" ?>
        <?php include "../include/altdiv.html" ?>
		
		<script>
        var down = document.getElementById("GFG");
        var el = document.querySelector('.button');
         
        el.addEventListener('click', function () {
            var el2 = document.querySelector('.outer');
            el2.style.display = "none";
        });
    </script>
	</body>
</html>