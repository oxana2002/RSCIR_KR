<?php 
session_start();
$conn = mysqli_connect("localhost","root","oxsana2002","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Не удалось подключиться: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$pnr=$_POST['pnr'];
$sql = "SELECT t_status FROM tickets WHERE PNR= '$pnr'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
	if($row==NULL)	echo "<script type='text/javascript'>alert('PNR не найден');</script>";
	else echo "<script type='text/javascript'>alert('Ваш статус таков ' +'$row[t_status]');</script>";	
}
if (isset($_POST['cancel']))
{
$pnr=$_POST['pnr'];
$sql = "DELETE FROM tickets WHERE PNR=$pnr;";
if(mysqli_query($conn, $sql))
	echo "<script type='text/javascript'>alert('Ваш билет был аннулирован');</script>";
	else echo "<script type='text/javascript'>alert('Отмена не удалась');</script>";	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PNR Статус</title>
	<LINK REL="STYLESHEET" HREF="vhod1.CSS">

	<!-- <style type="text/css">
		#pnr	{
			font-size: 20px;
			background-color: white;
			width: 500px;
			height: 300px;
			margin: auto;
			border-radius: 25px;
			border: 2px solid blue; 
			margin: auto;
  			position: absolute;
  			left: 0; 
  			right: 0;
  			padding-top: 40px;
  			padding-bottom:20px;
  			margin-top: 130px;
 
		}
		html { 
		  background: url(img/bg7.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		#pnrtext	{
			padding-top: 20px;
		}
	</style> -->
</head>
<body>
<?php
include("header.php"); ?>
	<div class="zadnik">
	<div class="pnr" id="pnr">ПРОВЕРЬТЕ СТАТУС PNR:<br/><br/>
	<form method="post" name="pnrstatus" action="pnrstatus.php">
	<div id="pnrtext"><input class="epnr" type="text" name="pnr" size="30" maxlength="10" placeholder="Введите PNR"></div>
	<br/><br/>
	<input class="submit" type="submit" name="submit" value="ПРОВЕРИТЬ" class="button" id="submit"><br/><br/>
	<?php  
		if(isset($_SESSION['user_info'])){
			echo '<form action="pnrstatus.php" method="post"><input type="submit" class="otmen" value="ОТМЕНИТЬ БРОНЬ" name="cancel" id="cancel"/></form>';
        }
		else
			echo '<A class="login" HREF="register.php">войти в систему</A>';
		?>
	</form>
	</div>
	</div>
</body>
</html>