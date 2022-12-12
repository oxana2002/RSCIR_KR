<?php 
session_start();
	if(empty($_SESSION['user_info'])){
		echo "<script type='text/javascript'>alert('Пожалуйста, войдите в систему, прежде чем продолжить!');</script>";
	}
$conn = mysqli_connect("localhost","root","oxsana2002","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$trains=$_POST['trains'];
$sql = "SELECT t_no FROM trains WHERE t_name = '$trains'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$email=$_SESSION['user_info'];
$query="UPDATE passengers SET t_no='$row[t_no]' WHERE email='$email';";
	if(mysqli_query($conn, $query))
{  
	$message = "Билет забронирован успешно";
}
	else {
		$message="Не кдалось забронировать билет";
	}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book a ticket</title>
	<LINK REL="STYLESHEET" HREF="vhod1.CSS">
	<!-- <style type="text/css">
		#booktkt	{
			margin:auto;
			margin-top: 50px;
			width: 40%;
			height: 60%;
			padding: auto;
			padding-top: 50px;
			padding-left: 50px;
			background-color: rgba(0,0,0,0.3);
			border-radius: 25px;
		}
		html { 
		  background: url(img/bg7.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		#journeytext	{
			color: white;
			font-size: 28px;
			font-family:"Comic Sans MS", cursive, sans-serif;
		}
		#trains	{
			margin-left: 90px;
			font-size: 15px;
		}
		#submit	{
			margin-left: 150px;
			margin-bottom: 40px;
			margin-top: 30px
		}
	</style> -->
	<script type="text/javascript">
		function validate()	{
			var trains=document.getElementById("trains");
			if(trains.selectedIndex==0)
			{
				alert("Пожалуйста выберите дату");
				trains.focus();
				return false;		
			}
		}
	</script>
</head>
<body>
	<?php
		include ('header.php');
	?>
	<div class="zadnik">
	<div id="booktkt">
	<h1 class="zagolov" id="journeytext">ВЫБЕРИТЕ ДАТУ ПОЕЗДКИ</h1><br/><br/>
	<form method="post" name="journeyform" onsubmit="return validate()">
		<select class="dat" id="trains" name="trains" required>
			<option selected disabled>ДАТА ПОЕЗДКИ</option>
			<option value="rajdhani" >1 дек - 15 дек</option>
			<option value="duronto" >16 дек - 30 дек</option>
			<option value="geetanjali">1 марта - 15 марта</option>
			<option value="garibrath" >16 марта - 30 марта</option>
			<option value="mysoreexp" >1 апр - 15 апр</option>
		</select>
		<br/><br/>
		<input class="otprav" type="submit" name="submit" id="submit"  value="ОТПРАВИТЬ" class="button" />
	</form>
	</div>
	</div>
	</body>
	</html>