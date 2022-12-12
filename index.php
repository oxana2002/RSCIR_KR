<HTML>
<HEAD>
<TITLE>Тур</TITLE>
<style type="text/css">
@import url(stile.css);


/* html { 
  background: url(img/bg7.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
} */

</style>
</HEAD>
<BODY>
<?php 
session_start();
include("header.php"); ?>
<div id="main">
	<div id="logo">
    <kvadr>
<A HREF="index.php">
<!-- <IMG SRC="img/logo.png" alt="ГЛАВНАЯ" id="logo" width="150" height="150"></IMG> -->
</A></div>
<h1 align="center">ПУТЕШЕСТВУЙ ПО РОССИИ ВМЕСТЕ С НАМИ</h1><br/><br/><br/>
<!-- <h2 align="center">Have a safe journey with us</h2> -->
<br/><br/><br/>
<div class="blurr">
<!-- <div class="day">14</div> -->
<img class="blur" src="img/data.png" height='168.48px'> 

</div>


<!-- <div>

</div> -->
<?php
if(isset($_SESSION['user_info']))
  echo '<h3 align="center"><a href="booktkt.php">БРОНИРОВАТЬ</a></h3>';
else
  echo '<h3><a href="register.php">РЕГИСТРАЦИЯ</a></h3>';
?>
<a href="register.php"><div class="knop"></div></a>
<div class="scrolling-wrapper">
                <img class="foto" src="img/foto1.png" height='168.48px'> 
                <img class="foto" src="img/foto2.png" height='168.48px'> 
                <img class="foto" src="img/foto3.png" height='168.48px'> 
                <img class="foto" src="img/foto4.png" height='168.48px'> 
                <img class="foto" src="img/foto5.png" height='168.48px'>    
                </div>   
</kvadr>
</BODY>
</HTML>