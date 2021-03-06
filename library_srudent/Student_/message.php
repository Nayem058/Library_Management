<?php
include "connection.php";
include "navbar.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Message Page</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
	<style>
		body
		{
			height: 650px;
			background-size: 1350px 650px;
			background-image: url("images/lb6.jpg");
			background-repeat: no-repeat;

		}
		.box
		{
			height: 588px;
			width: 500px;
			background-color: black;
			opacity: .9;
			color: white;
			margin: -20px auto;
			padding: 10px;
		}
		.form-control
		{
			height: 47px;
			width: 76%;
		}
		.msg
		{
			height: 430px;
			overflow-y: scroll;
		}
		.chat
		{
			display: flex;
			flex-flow: row wrap;

		}
		.user .chatbox
		{
			height: 50px;
			width: 400px;
			padding: 13px 10px;
			background-color: #999;
			color: white;
			border-radius: 10px;
			order: -1;
		}
		.admin .chatbox
		{
			height: 50px;
			width: 400px;
			padding: 13px 10px;
			background-color: #31708f;
			color: white;
			border-radius: 10px;
			
		}

	</style>
</head>
<body>
	<?php

	if (isset($_POST['submit'])) 
	{
		mysqli_query($db,"INSERT into `library`.`message` VALUES ('','$_SESSION[login_user]', '$_POST[message]','no','student');");

		$res=mysqli_query($db,"SELECT * FROM message WHERE username='$_SESSION[login_user]';");
	}
	else
	{
		$res=mysqli_query($db,"SELECT * FROM message WHERE username='$_SESSION[login_user]';");
	}
	
	mysqli_query($db,"UPDATE message SET status='yes' where username='$_SESSION[login_user]' and sender='admin' ;")

	?>


	<div class="box">
		<div style="height: 70px; width: 100%; background-color: #38fd8c; text-align: center; padding-top: 3px; margin-top: -8px;">
			<h3 style="color: black;  ">Admin</h3>			
		</div>

		<div class="msg">
			

			<?php
			while ($row=mysqli_fetch_assoc($res)) 
			{
				if ($row['sender']=='student') 
				{	
					

					?>
					<!-- -------------student side----------- -->
					<br><div class="chat user">
						<div style=" float: left; padding-top: 5px;">&nbsp
							<?php
							echo "<img class='img-circle profile_img' height=40 width=40 src='images/".$_SESSION['pic']."'>";
							?>
							&nbsp
						</div>
						<div style="float: left; " class="chatbox">
							<?php
							echo $row['message'];
							?>
							
						</div>
					</div>
					
					<?php
				}
				else
				{

					?>


					<!-- -------------admin side----------- -->
					<br><div class="chat admin">
						<div style=" float: left; padding-top: 5px;">&nbsp
							<img style="height: 40px; width:40px; border-radius:50%; " src="images/p.jpg" alt="">
							&nbsp
						</div>
						<div style="float: left; " class="chatbox">
							<?php
							echo $row['message'];
							?>
						</div>
					</div>

					<?php
				}
			}
			?>
		</div>

		<div style="height: 100px; padding-top: 10px;">
			<form action="" method="post">
				<input type="text" name="message" class="form-control" placeholder="Write Message...." required="" style="float: left;">&nbsp
				<button class="btn btn-info btn-lg" type="submit" name="submit"><span class="glyphicon glyphicon-send"></span>&nbsp Send</button>
			</form>
		</div>
	</div>
	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>