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
        <img src="images/IMG_3584.png" class="BG">
        <h1 class="center">Sef van Halbeek</h1>
        <h1 class="center">PORTFOLIO</h1>
        <h3 class="center">2021</h3>
      </div>
    </div>
    <section>
      <div class="container">
          <div class="box">  
                <div class="overlay">                       
                   <img src="IMG_3577.png" alt="Avatar" class="image">
                </div>
                <div class="text">
                    <h1>01</h1>
                    <h2>Int.</h2> 
                </div>
                <h3 class="text2">Interactive Media</h3>    
            </div>
          <div class="box">  
                <div class="overlay">                       
                   <img src="IMG_3577.png" alt="Avatar" class="image">
                </div>
                <div class="text">
                    <h1>02</h1>
                    <h2>Dev.</h2> 
                </div>
                <h3 class="text2">Development</h3>
          </div>
          <div class="box">  
                <div class="overlay">                       
                   <img src="IMG_3577.png" alt="Avatar" class="image">
                </div>
                <div class="text">
                    <h1>03</h1>
                    <h2>Des.</h2> 
                </div>
                <h3 class="text2">Design</h3>
          </div>
          <div class="box">  
                <div class="overlay">                       
                   <img src="IMG_3577.png" alt="Avatar" class="image">
                </div>
                <div class="text">
                    <h1>04</h1>
                    <h2>Res.</h2> 
                </div>
                <h3 class="text2">Research</h3>
          </div>
          <div class="box">  
                <div class="overlay">                       
                   <img src="IMG_3577.png" alt="Avatar" class="image">
                </div>
                <div class="text">
                    <h1>05</h1>
                    <h2>Com.</h2> 
                </div>
                <h3 class="text2">Communication</h3>
          </div>
          <div class="box">  
                <div class="overlay">                       
                   <img src="IMG_3577.png" alt="Avatar" class="image">
                </div>
                <div class="text">
                    <h1>06</h1>
                    <h2>Pro.</h2> 
                </div>
                <h3 class="text2">Professional Identity</h3>
          </div>
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