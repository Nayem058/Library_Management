<?php
include "connection.php";
include "navbar.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Message Page For | Admin </title>
	<style>
		.left_box
		{
			height:600px; 
			width: 500px;
			float: left;
			margin-top: -20px;
			background-color: #8ecdd2;
		}
		.left_box input
		{
			height: 50px;
			width: 150px;
			background-color: #537890;
			padding: 10px;
			margin: 10px;
			border-radius: 10px;
			/*border: none;*/
		}
		.left_box2
		{
			height: 600px;
			width: 300px;
			background-color: #537890;
			border-radius: 20px;
			float: right;
			margin-right: 30px;

		}
		.list
		{
			height: 500px;
			width: 300px;
			background-color: #537890;
			color: white;
			float: right;
			overflow-y: scroll;
			overflow-x: hidden;
			padding: 10px;
		}
		.right_box
		{
			height: 600px;
			width: 848px;
			background-color: #8ecdd2;
			/*margin-left: 350px;*/
			margin-top: -20px;
			float: right;
			padding: 10px;
		}
		.right_box2
		{
			height: 600px;
			width: 660px;			
			background-color: #537890;			
			border-radius: 20px;
			color: white;
			margin-top: -10px;
			padding: 20px;



		}
		tr:hover
		{
			background-color: #1e3f54;
			cursor: pointer;
		}

		.form-control
		{
			height: 47px;
			width: 78%;
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
			width: 500px;
			padding: 13px 10px;
			background-color: #999;
			color: white;
			border-radius: 10px;
			
		}
		.admin .chatbox
		{
			height: 50px;
			width: 500px;
			padding: 13px 10px;
			background-color: #31708f;
			color: white;
			border-radius: 10px;
			order: -1;
			
		}
	</style>
</head>
<body style="width: 1348px; height: 595px;">

	<?php
	$sql2=mysqli_query($db,"SELECT student.pic,message.username FROM student INNER JOIN message ON student.username=message.username GROUP BY username ORDER BY status; ");
	?>
	<!---------------left box----------------->
	<div class="left_box">
		<div class="left_box2">
			<div style="color: #fff;">
				<form action="" method="post" enctype="multipart/form-data">
					<input type="text" name="username" id="uname" >
					<button type="submit" name="submit" class="btn btn-default">SHOW</button>
				</form>
			</div>
			<div class="list">
				<?php
				echo "<table id='table' class='table'>";
				while ($res1=mysqli_fetch_assoc($sql2)) 
				{
					

					echo "<tr>";

					echo "<td width=65>"; echo "<img class='img-circle' profile_img' height=60 width=60 
					src='images/".$res1['pic']."'>"; echo "</td>";


					echo "<td style='padding-top:30px;'>"; echo $res1['username']; 
					echo "</td>";

					echo "</tr>";

				}
				echo "</table>";
				?>
			</div>
		</div>
	</div>

	<!---------------right box----------------->
	<div class="right_box">
		<div class="right_box2">			


			<?php

			/*-------------------if pressed submit----------------------*/
			if (isset($_POST['submit'])) 
			{
				$res=mysqli_query($db,"SELECT * FROM message where username='$_POST[username]' ;");

				mysqli_query($db,"UPDATE message SET status='yes' where sender='student' and username=
				'$_POST[username]' ;");

				if ($_POST['username'] != '') 
				{
					$_SESSION['username']=$_POST['username'];
				}

				?>

				<div style="height: 70px; width: 100%; text-align: center; color: white;">
					<h3 style="margin-top: -5px; padding: 10px; ">
						<?php echo $_SESSION['username']; ?>
					</h3>
				</div>
				<!-- ----------------show this message-------------- -->
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
									<img style="height: 40px; width:40px; border-radius:50%; " src="images/p.jpg" alt="">&nbsp
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
					}
					?>
				</div>


				<div style="height: 50px; padding-top: 10px;">
					<form action="" method="post">
						<input type="text" name="message" class="form-control" placeholder="Write Message...." required="" style="float: left;">&nbsp &nbsp
						<button class="btn btn-info btn-lg" type="submit" name="submit1"><span class="glyphicon glyphicon-send"></span> &nbsp Send</button>
					</form>
				</div>		
				<?php
			}
			/*-------------------if not pressed submit----------------------*/
			else
			{
				if ($_SESSION['username']=='') 
				{
					?>

					<img style="margin: 100px 80px; border-radius: 50%" src="images/m.gif"alt="aimated">

					<?php
				}
				else
				{
					if (isset($_POST['submit1'])) 
					{
						mysqli_query($db,"INSERT into `library`.`message` VALUES ('','$_SESSION[username]', '$_POST[message]','no','admin');");

						$res=mysqli_query($db,"SELECT * FROM message where username='$_SESSION[username]' ;");
					}
					else
					{
						$res=mysqli_query($db,"SELECT * FROM message where username='$_SESSION[username]' ;");

					}			

					?>
					<div style="height: 70px; width: 100%; text-align: center; color: white;">
						<h3 style="margin-top: -5px; padding: 10px; ">
							<?php echo $_SESSION['username']; ?>
						</h3>
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
						else
						{

							?>


							<!-- -------------admin side----------- -->
							<br><div class="chat admin">
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
					}
					?>
				</div>
				<div style="height: 50px; padding-top: 10px;">
					<form action="" method="post">
						<input type="text" name="message" class="form-control" placeholder="Write Message...." required="" style="float: left;">&nbsp &nbsp
						<button class="btn btn-info btn-lg" type="submit" name="submit1"><span class="glyphicon glyphicon-send"></span> &nbsp Send</button>
					</form>
				</div>	


					<?php

				}
			}

			?>
			
		</div>
	</div>	
	<script>
		var table = document.getElementById('table'),eIndex;
		for(var i=0; i< table.rows.length; i++)
		{
			table.rows[i].onclick =function()
			{
				rIndex = this.rowIndex;
				document.getElementById("uname").value = this.cells[1].innerHTML;
			}
		}
	</script>
</body>
</html>