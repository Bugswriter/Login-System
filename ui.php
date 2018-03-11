<!doctype html>

<html>
	<head>
		<title>UI Design</title>
		<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
		<style>
			<?php  require_once('style.css');	?>
		</style>
	</head>
	<body>
		<div class="container main">
			<div class="block1">
				<div class="header">
					<div class="favicon">
						<label><a href="index.php"><span class="highlight">Bugs</span><i>writer</i></a></label>
					</div>
					<div class="nav">
						<div class="navlist"><a href="#">About</a></div>
						<div class="navlist"><a href="#">SignUp</a></div>
						<div class="navlist"><a href="#">Login</a></div>
						<div class="navlist"><a href="#">Contact</a></div>
					</div>
				</div>
				<div class="shareboxes">
					<div class="social"><i class="fab fa-twitter"></i></div>
					<div class="social"><i class="fab fa-facebook-f"></i></div>
					<div class="social"><i class="fab fa-google-plus-g"></i></div>
				</div>
				<div class="block2">
					<div class="text">
						<h1>Hi, I am <span class="highlight">Suraj</span><br/>Welcome to my Website</h1>
					</div>
					<div class="buttons">
						<button class="butt">Signup</button>
						<button class="butt">Login</button>
					</div>
				</div>
			</div>
		</div>
		<div class="container signup">
			<div class="signupheading">
				<h1>Make an account</h1>
			</div>	
			<div class="form">
				<form method="POST" action="index.php" autocomplete="off">
				<input type="text" name="username" placeholder="USERNAME"><br>
				<input type="text" name="first_name" placeholder="FIRST NAME"><br>
				<input type="text" name="last_name" placeholder="LAST NAME"><br>
				<input type="text" name="email" placeholder="EMAIL ADDRESS"><br>
				<input type="password" name="password" placeholder="PASSWORD"><br>
				<input type="radio" name="gender" value="M" checked> Male
		  		<input type="radio" name="gender" value="F"> Female<br>
		  		<input type="submit" name="signup_submit" value="Register me">
			</form>

			</div>
			<div class="signupxtra">
				
			</div>

		</div>
		<div class="container login">
			<div class="loginheading">
				<h1>Login In Your Account</h1>
			</div>	
			<div class="form">
				<form method="POST" action="index.php" autocomplete="off">
				<input type="text" name="username" placeholder="USERNAME"><br>
				<input type="password" name="password" placeholder="PASSWORD"><br>
				<input type="submit" name="login_submit" value="Log in">
			</form>
			</div>
			<div class="abouttext"></div>

		</div>
		<div class="container about">
			<div class="aboutheading">
				<h1>About</h1>
			</div>	
			<div class="myPicture">

			</div>
			<div class="abouttext">

			</div>
		</div>
		<div class="container contact">
			<div class="contact">
				<h1>Contact Me</h1>
			</div>	
			<div class="contactform">

			</div>
		</div>
	</body>
</html>