<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="m1.css" type="text/css"></link>
<script src="jquery.js"></script>
        <script>
            $(document).ready(function(){
              $("#Logout").hide();
            };
            $(document).ready(function(){
                $("#user").hover(function(){
                    $("#Logout").toggle("slow");
                });
            });
        </script>
</head>
<body link="white" alink="white" vlink="white">

          <img class="log" src="img/log.png" height='57px'>
          <div class="men">  <a href="index.php">ГЛАВНАЯ</a></div>
          <div class="men1">  <a href="pnrstatus.php">СТАТУС PNR</a></div>
          <div class="men2">  <a href="booktkt.php">ЗАБРОНИРОВАТЬ</a></div>
          <div class="men3">  <?php  
				
				?></div>
		            </ul>
            
</body>
</html>
