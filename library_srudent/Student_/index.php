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
							<li><a href="student_login.php">LOGIN</a></li>
							<!-- <li><a href="registration.php">SIGN-UP</a></li> -->
							<li><a href="feedback2.php">FEEDBACK</a></li>
						</ul>
					</nav>
					<?php
				}

				?>


			</header>
			<!-- start slider photo -->

			<div class="row">
				<!-- <div class="col-12"> -->

					<div id="demo" class="carousel slide" data-ride="carousel">

						<!-- Indicators -->
						<ul class="carousel-indicators">
							<li data-target="#demo" data-slide-to="0" class="active"></li>
							<li data-target="#demo" data-slide-to="1"></li>
							<li data-target="#demo" data-slide-to="2"></li>
						</ul>

						<!-- The slideshow -->
						<div class="carousel-inner" id="inner">
							<div class="carousel-item active">
								<img src="images/l1.jpg" alt="Los Angeles">
							</div>
							<div class="carousel-item">
								<img src="images/l3.jpg" alt="Chicago">
							</div>
							<div class="carousel-item">
								<img src="images/l2.jpg" alt="New York">
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="carousel-control-prev" href="#demo" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#demo" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>
					</div>
					<!-- </div>	 -->
				</div>	

				<!-- end slider photo -->

			</div>

			<!-- ----------latest book------------- -->


			<div class="container">
				<!-- about section -->

				<div class="row" id="rela">
					<!-- <div class="col-1"></div> -->
					<div class="col-5">
						<img src="images/l5.jpg" width="100%" height="530" alt="" style="padding-top: 130px">
					</div>
					<div class="col-5 pt-5">
						<h3>ABOUT JH E-LIBRARY</h3>

						<p id="line"></p>
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam tempore aperiam incidunt at beatae accusamus, excepturi nihil a, nam voluptatibus, quidem provident laboriosam corrupti corporis delectus reiciendis obcaecati sunt iste, architecto earum temporibus exercitationem quod illum facere porro. Molestias aperiam fugit consectetur similique sapiente natus eligendi inventore sed commodi deleniti iste veniam sit tenetur, dicta! Beatae nisi distinctio ipsum animi est vitae temporibus voluptatum voluptate nihil sequi deleniti culpa corporis excepturi sapiente, modi quaerat quidem ratione natus eius sint eaque provident a autem? Deleniti officiis dignissimos veritatis vel, fuga aperiam debitis neque, error, blanditiis cum perspiciatis consectetur culpa eligendi labore a facere sequi libero ipsam excepturi nisi delectus iusto, itaque? Iure nostrum veritatis itaque, aspernatur quia cum sit. Beatae rerum, ea mollitia nihil minima ut! Dolores eveniet assumenda nulla, voluptate, omnis iusto  sunt alias corporis sint! Cum, voluptate nam, inventore modi aliquid explicabo amet, in alias placeat minus fuga ipsum, eveniet.	

						</p>
						<button class="btn btn-info btn1">Read More</button>

					</div>
					<!-- <div class="col-1"></div> -->
				</div>
				<!--  end about section -->
			</div>
			<div class="row py-2">
				<div class="col-1"></div>
				<div class="col-10">
					<h1>LATEST BOOK</h1>
					<P id="line" ></P>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur ipsum recusandae nostrum odit, doloremque, inventore doloribus vitae libero harum et necessitatibus mollitia distinctio? Deserunt, blanditiis eaque eos reprehenderit est, quaerat iste? A magni ut provident praesentium, assumenda mollitia. Sapiente odio aperiam suscipit asperiores. Minima, in unde, officiis amet accusamus aut.</p>
				</div>
			</div>

			<div class="container">
				<div class="row py-5">
					<div class="col-3">
						<div class="card">
							<card class="body">
								<div>
									<img style="height:350px;" class="card-img-top" src="book/c1.jpg" alt="">
								</div>
								<a href="">
									<div class="overlay1">
										<div class="text1"> <b>C# PROGRAMMING LANGUAGE</b></div>
									</div>
								</a>
							</card>
						</div>
					</div>
					<div class="col-3">

						<div class="card" >
							<card class="body">
								<div>
									<img style="height:350px;" class="card-img-top" src="book/ruby.png" alt="">
								</div>
								<a href="">
									<div class="overlay2">
										<div class="text2"><b>RUBY ON RAILS</b></div>
									</div>
								</a>
							</card>
						</div>
					</div>
					<div class="col-3">

						<div class="card">
							<card class="body">
								<div class="card-img-top">
									<img style="height:350px;" class="card-img-top" src="book/vue.jpg" alt="">
								</div>
								<a href="">
									<div class="overlay3">
										<div class="text3"> <b>VUE JS APPLICATION</b></div>
									</div>
								</a>
							</card>
						</div>

					</div>

					<div class="col-3">
						<div class="card">
							<card class="body">
								<div >
									<img  style="height:350px;" class="card-img-top" class="card-img-top" src="book/php.jpg" alt="">
								</div>
								<a href="">
									<div class="overlay4">
										<div class="text4"> <b>PHP AND MYSQL</b></div>
									</div>
								</a>
							</card>
						</div>
					</div>

				</div>
			</div>
			<!-- ----------latest book------------- -->
			<!--------img hover section------------>
			<div class="row py-2">
				<div class="col-1"></div>
				<div class="col-10">
					<h1>PROGRAMMING BOOK</h1>
					<P id="line" ></P>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur ipsum recusandae nostrum odit, doloremque, inventore doloribus vitae libero harum et necessitatibus mollitia distinctio? Deserunt, blanditiis eaque eos reprehenderit est, quaerat iste? A magni ut provident praesentium, assumenda mollitia. Sapiente odio aperiam suscipit asperiores. Minima, in unde, officiis amet accusamus aut.</p>
				</div>
			</div>

			<div class="container py-5">
				<div class="row">
					<div class="col-3 my-3" id="hovercard1">
						<div class="card">
							<div class="body">
								<div class="lastcard1">
								<!-- <i class="fas fa-tv"></i>
								<p></p>
								<h5>Software <br> Development</h5>
								<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, corrupti consequuntur porro dolorem! Harum, consequuntur!</p> -->
								<a href=""><img src="book/Bootstrap4.jpg" alt="book"></a>
								
							</div>

						</div>
					</div>
					<?php
					if (isset($_SESSION['login_user'])) {

						?>
						<a href="book/Learning Bootstrap 4.pdf" target="_blank"> <button class="btn btn-outline-info btn1 my-4">Download</button></a>


						<a href="book/Learning Bootstrap 4.pdf" target="_blank"> <button class="btn btn-info btn2 my-4" >Read Book</button></a>
						<?php
					}
					else
					{
						 ?>
						<a href="student_login.php"><button class="btn btn-outline-info btn1 my-4">Download</button> </a>
						<a href="student_login.php"><button class="btn btn-info btn2 my-4" >Read Book</button></a>

						<?php
					}
					?>
					
				</div>

				<div class="col-3 my-3" id="hovercard2">
					<div class="card">
						<div class="body">
							<div class="lastcard2">
								<!-- <i class="fas fa-database"></i>
								<p></p>
								<h5>Software <br> Development</h5>
								<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, corrupti consequuntur porro dolorem! Harum, consequuntur!</p> -->
								<a href=""><img src="book/C programming.jpg" alt="book"></a>
							</div>
						</div>
					</div>
					<?php
					if (isset($_SESSION['login_user'])) {

						?>
						<a href="book/Learning Bootstrap 4.pdf" target="_blank"> <button class="btn btn-outline-info btn1 my-4">Download</button></a>


						<a href="book/Learning Bootstrap 4.pdf" target="_blank"> <button class="btn btn-info btn2 my-4" >Read Book</button></a>
						<?php
					}
					else
					{
						 ?>
						<a href="student_login.php"><button class="btn btn-outline-info btn1 my-4">Download</button> </a>
						<a href="student_login.php"><button class="btn btn-info btn2 my-4" >Read Book</button></a>

						<?php
					}
					?>
					
				</div>

				<div class="col-3 my-3" id="hovercard3">
					<div class="card">
						<div class="body">
							<div class="lastcard3">
								<a href=""><img src="book/JavaScript.jpg" alt="book"></a>
							</div>
						</div>
					</div>
					<?php
					if (isset($_SESSION['login_user'])) {

						?>
						<a href="book/Learning Bootstrap 4.pdf" target="_blank"> <button class="btn btn-outline-info btn1 my-4">Download</button></a>


						<a href="book/Learning Bootstrap 4.pdf" target="_blank"> <button class="btn btn-info btn2 my-4" >Read Book</button></a>
						<?php
					}
					else
					{
						 ?>
						<a href="student_login.php"><button class="btn btn-outline-info btn1 my-4">Download</button> </a>
						<a href="student_login.php"><button class="btn btn-info btn2 my-4" >Read Book</button></a>

						<?php
					}
					?>
				</div>


				<div class="col-3 my-3" id="hovercard4">
					<div class="card">
						<div class="body">
							<div class="lastcard4">
								<a href=""><img src="book/Java.jpg" alt="book"></a>
							</div>
						</div>
					</div>
					<?php
					if (isset($_SESSION['login_user'])) {

						?>
						<a href="book/Learning Bootstrap 4.pdf" target="_blank"> <button class="btn btn-outline-info btn1 my-4">Download</button></a>


						<a href="book/Learning Bootstrap 4.pdf" target="_blank"> <button class="btn btn-info btn2 my-4" >Read Book</button></a>
						<?php
					}
					else
					{
						 ?>
						<a href="student_login.php"><button class="btn btn-outline-info btn1 my-4">Download</button> </a>
						<a href="student_login.php"><button class="btn btn-info btn2 my-4" >Read Book</button></a>

						<?php
					}
					?>
				</div>


			</div>
			<!-- -------------book section 2---------------- -->

			<div class="row">
				<div class="col-3 my-3" id="hovercard1">
					<div class="card">
						<div class="body">
							<div class="lastcard1">
								<!-- <i class="fas fa-tv"></i>
								<p></p>
								<h5>Software <br> Development</h5>
								<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, corrupti consequuntur porro dolorem! Harum, consequuntur!</p> -->
								<a href=""><img src="book/CNC Programming.jpg" alt="book"></a>
								
							</div>

						</div>
					</div>
					<?php
					if (isset($_SESSION['login_user'])) {

						?>
						<a href="book/Learning Bootstrap 4.pdf" target="_blank"> <button class="btn btn-outline-info btn1 my-4">Download</button></a>


						<a href="book/Learning Bootstrap 4.pdf" target="_blank"> <button class="btn btn-info btn2 my-4" >Read Book</button></a>
						<?php
					}
					else
					{
						 ?>
						<a href="student_login.php"><button class="btn btn-outline-info btn1 my-4">Download</button> </a>
						<a href="student_login.php"><button class="btn btn-info btn2 my-4" >Read Book</button></a>

						<?php
					}
					?>
				</div>

				<div class="col-3 my-3" id="hovercard2">
					<div class="card">
						<div class="body">
							<div class="lastcard2">
								<!-- <i class="fas fa-database"></i>
								<p></p>
								<h5>Software <br> Development</h5>
								<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, corrupti consequuntur porro dolorem! Harum, consequuntur!</p> -->
								<a href=""><img src="book/Python.jpg" alt="book"></a>
							</div>
						</div>
					</div>
					<?php
					if (isset($_SESSION['login_user'])) {

						?>
						<a href="book/Learning Bootstrap 4.pdf" target="_blank"> <button class="btn btn-outline-info btn1 my-4">Download</button></a>


						<a href="book/Learning Bootstrap 4.pdf" target="_blank"> <button class="btn btn-info btn2 my-4" >Read Book</button></a>
						<?php
					}
					else
					{
						 ?>
						<a href="student_login.php"><button class="btn btn-outline-info btn1 my-4">Download</button> </a>
						<a href="student_login.php"><button class="btn btn-info btn2 my-4" >Read Book</button></a>

						<?php
					}
					?>

				</div>

				<div class="col-3 my-3" id="hovercard3">
					<div class="card">
						<div class="body">
							<div class="lastcard3">
								<a href=""><img src="book/JavaScript.jpg" alt="book"></a>
							</div>
						</div>
					</div>
					<?php
					if (isset($_SESSION['login_user'])) {

						?>
						<a href="book/Learning Bootstrap 4.pdf" target="_blank"> <button class="btn btn-outline-info btn1 my-4">Download</button></a>


						<a href="book/Learning Bootstrap 4.pdf" target="_blank"> <button class="btn btn-info btn2 my-4" >Read Book</button></a>
						<?php
					}
					else
					{
						 ?>
						<a href="student_login.php"><button class="btn btn-outline-info btn1 my-4">Download</button> </a>
						<a href="student_login.php"><button class="btn btn-info btn2 my-4" >Read Book</button></a>

						<?php
					}
					?>
				</div>


				<div class="col-3 my-3" id="hovercard4">
					<div class="card">
						<div class="body">
							<div class="lastcard4">
								<a href=""><img src="book/Java.jpg" alt="book"></a>
							</div>
						</div>
					</div>
					<?php
					if (isset($_SESSION['login_user'])) {

						?>
						<a href="book/Learning Bootstrap 4.pdf" target="_blank"> <button class="btn btn-outline-info btn1 my-4">Download</button></a>


						<a href="book/Learning Bootstrap 4.pdf" target="_blank"> <button class="btn btn-info btn2 my-4" >Read Book</button></a>
						<?php
					}
					else
					{
						 ?>
						<a href="student_login.php"><button class="btn btn-outline-info btn1 my-4">Download</button> </a>
						<a href="student_login.php"><button class="btn btn-info btn2 my-4" >Read Book</button></a>

						<?php
					}
					?>
				</div>


			</div>
		</div>


		<!-------- end img hover section------------>



		<?php  

		include "footer.php";
		?>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
	</html>