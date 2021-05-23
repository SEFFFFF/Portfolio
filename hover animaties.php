<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="temp dev.css">
    <link rel="stylesheet" href="header.css">
    <title>Document</title>
</head>
<body>
<?php 
    include 'include/header.php'
?>
<div class="top animated fade-down delay-200">
    <div class="topbox">
        <a href="projects.php" class="back-btn">Back</a>
    </div>
    <div class="topbox">
        <h1>Hover animaties</h1>
        <p>In het 1ste semester heb ik een beetje geoefend met de hover functie in CSS maar niet veel. Daarom wilde ik dit combineren met transitions en transforms waar ik kennis mee heb gemaakt in de tekst animatie POC.</p>
        <a href="https://github.com/SEFFFFF/Hover-effects" class="back-btn2">Github</a>
    </div>
</div>
<div class="container">
    <div class="row animated fade-down delay-200">
        <div class="box">
            <img src="images/overlay.png" alt="menu">
            <img src="images/menu.gif" alt="menu">
        </div>
        <div class="box">
            <h2>Menu effecten</h2>
            <p>Met het nieuwe ontwerp van mijn portfolio wist ik ook hoe ik het menu kon animeren om deze interessant te maken. Ik wilde dat als je op een leerdoel hovert er een afbeelding zichtbaar wordt.</p>
            <p>Door de tekst animatie opdracht was dit best gemakkelijk. Ik heb nog wat geexperimenteerd met welke animatie het beste werkt. Zo heb ik eerst geprobeerd om deze omhoog te laten komen maar dit vond ik zelf nogal irritant. Dus ik heb dit veranderd naar een fade in en fade out. Dit is een stuk rustiger en fijner.</p>
            <p>Ik was heel blij met het resultaat en het was ook precies wat ik me voorgesteld had. Later zou ik dit ook combineren met deel 2 van deze POC en de element fade on scroll animatie om het zo tot leven te brengen.</p>
        </div>
    </div>
    <div class="row animated fade-down delay-200">
        <div class="box">
            <img src="images/float .png" alt="buttons">
            <img src="images/buttons.gif" alt="buttons">
        </div>
        <div class="box">
            <h2>Button effecten</h2>
            <p>Voor het 2e deel van deze POC heb ik een hover functie gemaakt voor een knop. Als je op de knop hovert veranderd deze van kleur en verplaatst een beetje omhoog.</p>
            <p>Op stackoverflow las ik dat de transform eigenschap niet op iedere browser werkte en je bepaalde webkits moest aanroepen dus dat heb ik hier ook gedaan.</p>
            <p>Ook hier was ik erg tevreden over en ik vind dat dit een subtiel maar leuk effect is wat niet irritant is maar het wel een extra detail geeft.</p>
        </div>
    </div>
    <div class="row animated fade-down delay-200">
        <div class="box">
            <h2>Wat heb ik geleerd?</h2>
            <p>Ook hier was ik erg tevreden over en ik vind dat dit een subtiel maar leuk effect is wat niet irritant is maar het wel een extra detail geeft.</p>
        </div>
        <div class="box">
            <h2>Wat kon beter?</h2>
            <p>Ook hier was ik erg tevreden over en ik vind dat dit een subtiel maar leuk effect is wat niet irritant is maar het wel een extra detail geeft.</p>
        </div>
    </div>
</div>
<div class="next-box animated fade-down delay-200">
    <a href="brand guide rosa.php" class="next">Volgende project</a>
</div>
<script src="script.js"></script>    
</body>
</html>