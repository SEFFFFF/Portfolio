<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Document</title>
</head>
<body>
    <?php 
    include 'include/header.php'
    ?>
    <div class="header-bg">
      <div class="home">
        <img src="IMG_3584.png" class="BG">
        <h1 class="center">Sef van Halbeek</h1>
        <h1 class="center">PORTFOLIO</h1>
        <h3 class="center">2021</h3>
      </div>
    </div>
    <section>
      <div class="Leerdoelen">

      </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>$(document).ready(function(){
        $(window).scroll(function(){
            $('.header-bg').css("opacity", 1- $(window).scrollTop() / 700)
        })
    })</script> 
</body>
</html>