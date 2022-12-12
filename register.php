<?php
session_start();
$conn = mysqli_connect("localhost","root","oxsana2002","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$mob=$_POST['mob'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$pw=$_POST['pw'];
$cpw=$_POST['cpw'];
$sql = "INSERT INTO passengers (p_fname, p_lname, p_age, p_contact, p_gender, email, password) VALUES ('$fname', '$lname', '$age', '$mob', '$gender', '$email', '$pw');";
	if(mysqli_query($conn, $sql))
{  
	$message = "Вы успешно зарегистрировались!";
}
else
{  
	$message = "Could not insert record"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<HTML>
<HEAD>
<TITLE>Register on Indian Railways</TITLE>
<!-- <LINK REL="STYLESHEET" HREF="styl_1.CSS"> -->
<link rel="stylesheet" href="stile.css" type="text/css"></link>
<style type="text/css">
	/* @import url(styl_1.css);
*	{
	color: #222;
}
#register_form	{
	background-color: white;
	width: 40%;
	margin: auto;
	border-radius: 25px;
	border: 2px solid blue; 
	margin-top: 25px;
}
#nav	{
	color: white;
}
#logintext	{
	margin-top: 10px;
}
#login	{
	margin-top: 10px;
	margin-bottom: 20px;
} */
</style>
<SCRIPT src="validation.js"></SCRIPT>
</HEAD>
<!-- <BODY  background="img/wallpaper.jpg" link="white" alink="white" vlink="white" width="1024" height="768"> -->
<?php include("header.php") ?>
<div id="register_form" align="center" height="200" width="200">
<FORM name="register" method="post" action="register.php" onsubmit="return validate()">
<TABLE border="0">
	<div class="zadnik">
<div class="velcome"><br/>ДОБРО ПОЖАЛОВАТЬ!</div>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<TR class="left">
<TD><div class='name'>Имя:</div></TD>
<div class="col-3">
<TD><INPUT class="iname" name="fname" type="TEXT" placeholder="Enter your first name" id="fname"></TD>
   <span class="focus-bg"></span>
        </div>
</TR>
<TR class="left">
<TD><div class='reg'>Фамилия:</div></TD>
<TD><INPUT class="ifamil" type="TEXT" name="lname" placeholder="Enter your last name" id="lname"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><div class="reg">Возраст:</div></TD>
<TD><INPUT class="iage" type="TEXT" name="age" placeholder="Enter age" id="age"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><div class="reg">Телефон:</div></TD>
<TD><INPUT  class="itelef" type="TEXT" name="mob" placeholder="Enter your mobile number" id="mob"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TR class="left">
<TD><div class="reg">Пол:</div></TD>
<TD>&nbsp;&nbsp;
<span class="muz">МУЖСКОЙ</span>
<INPUT class="mpol" type="radio" name="gender" value="Male" id="gender">  
	<span class="jen">ЖЕНСКИЙ</span>
	<input class="jpol" type="radio" name="gender" value="Female" id="gender"> 
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><div class="reg">ПОЧТА:</div></TD>
<TD><INPUT name="email" type="TEXT" id="email" placeholder="Enter your E-Mail ID" ></TD>
</label>
  </div>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><div class="reg">ПАРОЛЬ:</div></TD>
<TD><INPUT class="iparol" type="PASSWORD" name="pw" id="pw"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><div class="reg">ПОДТВЕРДИТЬ ПАРОЛЬ:</div></TD>
<TD><INPUT class="ipodpar" type="PASSWORD" name="cpw" id="cpw"></TD>
</TR><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
</TABLE>
<P><INPUT TYPE="Submit" class="zareg" value="ЗАРЕГИСТРИРОВАТЬСЯ" name="submit" id="submit" class="button" onclick="if(!this.form.tc.checked){alert('You must agree to the terms first.');return false}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<INPUT TYPE="Reset" class="res" value="" id="reset" class="button"></P></FORM><br/>
<!-- <HR width="450" style="border-color: blue;display: block;" noshade> -->
<FORM action="login.php">
<P align="CENTER" id="logintext"><FONT size="6" color="white" face="Arial">
<!-- Already have an account with us?<BR/></FONT></FONT> -->
<INPUT TYPE="submit" class="akk" value="ЕСТЬ АККАУНТ" id="login" class="button">
</P>
</FORM></div> 

	</div>
</BODY>
</HTML>