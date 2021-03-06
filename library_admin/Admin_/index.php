<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		JH E-LIBRARY
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<style>
		nav
		{
			float: right;
			padding-right: 30px;
			padding-top: 10px;

		}

		nav li 
		{
			display: inline-block;
			line-height: 80px;
		}
		.wrapper nav ul li a{
			padding-right: 20px;
			/*font-weight: bold;*/
			text-decoration: none;
			color: black;


		}
	</style>

</head>


<body>


	<!-- start main div -->
	<div class="container-fluid" >
		<!-- top mini menu -->
		<div class="row" id="mini">
			<div class="col-2 bg-info">
				<p><i class="fas fa-phone-alt"></i>  01629546029</p>
			</div>
			<div class="col-10 bg-info">
				<p><i class="fas fa-envelope"></i>  nayemuddin058@gmail.com</p>
			</div>
		</div>
	</div>
	<!-- end top mini menu -->
	<div class="wrapper">
		<header>
			<div class="logo">
				<a href="index.php" style="text-decoration: none;"><img src="images/book_logo.png">
					<h1 id="jh">JH E-LIBRARY</h1></a>
				</div>

				<?php
				if(isset($_SESSION['login_user']))
				{
					?>
					<nav>
						<ul>
							<li><a href="index.php">HOME</a></li>
							<li><a href="books.php">BOOKS</a></li>
							<li><a href="logout.php">LOGOUT</a></li>
							<li><a href="feedback2.php">FEEDBACK</a></li>
						</ul>
					</nav>
					<?php
				}
				else
				{
					?>
					<nav>
						<ul>
							<li><a href="index.php">HOME</a></li>
							<li><a href="books.php">BOOKS</a></li>
							<li><a href="admin_login.php">LOGIN</a></li>
							<!-- <li><a href="registration.php">SIGN-UP</a></li> -->
							<li><a href="feedback2.php">FEEDBACK</a></li>
						</ul>
					</nav>
					<?php
				}
				
				?>

				
			</header>
			<section>
				<div class="sec_img">
					<br><br><br>
					<div class="box">
						<br><br><br><br>
						<h1 style="text-align: center; font-size: 35px;">Welcom to library</h1><br><br>
						<h1 style="text-align: center;font-size: 25px;">Opens at: 09:00am </h1><br>
						<h1 style="text-align: center;font-size: 25px;">Closes at: 5:00pm </h1><br>
					</div>
				</div>
			</section>
			

		</div>
		<?php  

		include "footer.php";
		?>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
	</html>