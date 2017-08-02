<?php
session_start();
if (isset($_SESSION['email'])) 
{
header("Location: profile.php");
}
?>
	
<!DOCTYPE HTML>
<html>
	<head>
		<title>Infinity | Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="images/icon.png">

		<!--SweetAlert-->

		<script src="dist/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

	</head>
	<body>
<?php

@$id=$_GET['id'];
if($id==1)
{
   echo '<script>swal("Oops...", "Username or Password Does not match", "error");</script>';
}
else if($id==2)
{
   echo '<script>swal("Oops...", "Error Try After Sometime", "error");</script>';
}
else if($id==3)
{
   echo '<script>swal("Oops...", "Username Already Exists", "error");</script>';
}
else if($id==4)
{
   echo '<script>swal("Oops...", "Username Already Exists", "error");</script>';
}
?>
		<!-- Header -->
			<header id="header">
				<div class="inner">
					<div class="content">
						<h1>Infinity</h1>
						<h2>Easy Safe and Secure Cloud Storage .</h2>
						<a href="#" onclick="location.href='signup.php'" class="button big alt"><span>Sign Up</span></a>	&nbsp;&nbsp;				
						<a href="#" onclick="location.href='login.php'" class="button big alt"><span>Log In</span></a>

					</div>
					<button type="submit" class="button hidden"><span>Let's Go</span></button>
				</div>
			</header>

		<!-- Main -->
			<div id="main">
				<div class="inner">
					<div class="columns">

						<!-- Column 1 (horizontal, vertical, horizontal, vertical) -->
							<div class="image fit">
								<a href="detail1.html"><img src="images/pic01.jpg" alt="" /></a>
							</div>
							<div class="image fit">
								<a href="detail1.html"><img src="images/pic02.jpg" alt="" /></a>
							</div>
							<div class="image fit">
								<a href="detail1.html"><img src="images/pic03.jpg" alt="" /></a>
							</div>
							<div class="image fit">
								<a href="detail1.html"><img src="images/pic04.jpg" alt="" /></a>
							</div>

						<!-- Column 2 (vertical, horizontal, vertical, horizontal) -->
							<div class="image fit">
								<a href="detail1.html"><img src="images/pic06.jpg" alt="" /></a>
							</div>
							<div class="image fit">
								<a href="detail1.html"><img src="images/pic05.jpg" alt="" /></a>
							</div>
							<div class="image fit">
								<a href="detail1.html"><img src="images/pic08.jpg" alt="" /></a>
							</div>
							<div class="image fit">
								<a href="detail1.html"><img src="images/pic07.jpg" alt="" /></a>
							</div>

						<!-- Column 3 (horizontal, vertical, horizontal, vertical) -->
							<div class="image fit">
								<a href="detail1.html"><img src="images/pic09.jpg" alt="" /></a>
							</div>
							<div class="image fit">
								<a href="detail1.html"><img src="images/pic12.jpg" alt="" /></a>
							</div>
							<div class="image fit">
								<a href="detail1.html"><img src="images/pic11.jpg" alt="" /></a>
							</div>
							<div class="image fit">
								<a href="detail1.html"><img src="images/pic10.jpg" alt="" /></a>
							</div>

						<!-- Column 4 (vertical, horizontal, vertical, horizontal) -->
							<div class="image fit">
								<a href="detail1.html"><img src="images/pic13.jpg" alt="" /></a>
							</div>
							<div class="image fit">
								<a href="detail1.html"><img src="images/pic14.jpg" alt="" /></a>
							</div>
							<div class="image fit">
								<a href="detail1.html"><img src="images/pic15.jpg" alt="" /></a>
							</div>
							<div class="image fit">
								<a href="detail1.html"><img src="images/pic16.jpg" alt="" /></a>
							</div>

					</div>
				</div>
			</div>

		<!-- Footer -->
			<footer id="footer">
				<a href="#" class="info fa fa-info-circle"><span>About</span></a>
				<div class="inner">
					<div class="content">
						<h3>Vestibulum hendrerit tortor id gravida</h3>
						<p>In tempor porttitor nisl non elementum. Nulla ipsum ipsum, feugiat vitae vehicula vitae, imperdiet sed risus. Fusce sed dictum neque, id auctor felis. Praesent luctus sagittis viverra. Nulla erat nibh, fermentum quis enim ac, ultrices euismod augue. Proin ligula nibh, pretium at enim eget, tempor feugiat nulla.</p>
					</div>
					<div class="copyright">
						<h3>Follow me</h3>
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						</ul>
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com/">Unsplash</a>.
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>