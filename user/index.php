<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="../home.css">
		<link rel="stylesheet" href="user.css">
	</head>
	<body>
		<?php include "../include/header.html" ?>
        <?php include "../include/navbar.html" ?>
        <div class="maindiv">
            <div class="home1">           
				<div class="logbox"> 
					<h1>Login</h1>
					<form action="authenticate.php" method="post">
						<label for="username">
							<i class="fas fa-user"></i>
						</label>
						<input type="text" name="username" placeholder="Username" id="username" required>
						<label for="password">
							<i class="fas fa-lock"></i>
						</label>
						<input type="password" name="password" placeholder="Password" id="password" required>
						<input type="submit" value="Login">
					</form>
				</div>
				<div class="regbox"> 
					<h1>Register</h1>
					<form action="register.php" method="post" autocomplete="off">
						<label for="username">
							<i class="fas fa-user"></i>
						</label>
						<input type="text" name="username" placeholder="Username" id="username" required>
						<label for="password">
							<i class="fas fa-lock"></i>
						</label>
						<input type="password" name="password" placeholder="Password" id="password" required>
						<label for="email">
							<i class="fas fa-envelope"></i>
						</label>

						<input type="email" name="email" placeholder="Email" id="email" required>
						<input placeholder="Re-Enter Password" required>
					</form>
				</div>
				<div class="center">
					<input type="submit" value="Register">
				</div>
			</div>
    	</div>
    	<?php include "../include/sidenav.html" ?>
    	<?php include "../include/altdiv.html" ?>
	</body>
</html>


