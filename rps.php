<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="temp dev.css">
    <link rel="stylesheet" href="header.css">
    <link rel='icon' href='images/favicon.png' type='image/x-icon' >
    <title>Rock Paper Scissors</title>
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
        <p>Om te oefenen met Javascript en om nog wat extra portfolio materiaal te verzamelen heb ik een rock paper scissors spel gemaakt die je score bijhoud.</p>
        <a href="https://github.com/SEFFFFF/rps.git" class="back-btn2">Github</a>
    </div>
</div>
<div class="container">
    <div class="row animated fade-down delay-200">
        <div class="box">
            <img src="images/dataselect.png" alt="menu">
            <img src="images/test1.gif" alt="menu">
        </div>
        <div class="box">
            <h2>Data selection</h2>
            <p>Het opzetten van de HTML en CSS was zo gefikst maar het maken van het spel duurde wel wat langer. Eerst moest ik kijken hoe ik de buttons een waarde kon geven. Een post op stackoverflow (die ik niet meer kan vinden) wees op het gebruik van "data-select" in html om het zo een waarde te geven. Dit was erg handig want nu hoefde ik deze alleen te vergelijken met elkaar.</p>
        </div>
    </div>
    <div class="row animated fade-down delay-200">
        <div class="box">
            <img src="images/comprandom.png" alt="menu">
        </div>
        <div class="box">
            <h2>Computer selection</h2>
            <p>Nu ik de knoppen een waarde kon geven en ook wat de tegenwaarde hiervan was moest ik uitzoeken hoe de computer een tegenzet kan doen door een random getal tussen de 0 en 2 te pakken uit een array die alle mogelijkheden bevat. W3schools wist me daar goed bij te helpen en zo heb ik het kunnen maken dat als je op een knop duwt de computer ook meteen een random getal selecteerd.</p>
            <p>Hiermee heb ik ook meteen de isWinner functie geschreven. Deze kijkt of de 'beats' naam in de computer selectie staat en geeft dit door aan een andere functie.</p>
        </div>
    </div>
    <div class="row animated fade-down delay-200">
        <div class="box">
            <img src="images/winner.png" alt="menu">
            <img src="images/test4.gif" alt="menu">
        </div>
        <div class="box">
            <h2>Vergelijking en resultaat</h2>
            <p>Met alle onderdelen in plaats hoefde ik alleen nog de vergelijking functie te schrijven. Dit was even puzzelen maar hier kwam ik gelukkig snel uit. Het resultaat van isWinner wordt gebruikt om te kijken wie de winner is. Als iemand gewonnen heeft word de variable yourWinner of computerWinner gebruikt.</p>
            <p>Deze variables worden gebruikt door de incrementScore functie. Met een simpele if/else statement word gekeken wie gewonnen heeft en aanhankelijk daarvan word de score met 1 punt omhoog gedaan.</p>
        </div>
    </div>
    <div class="row animated fade-down delay-200">
        <div class="box">
            <h2>Wat heb ik geleerd?</h2>
            <p>Deze opdracht heeft mij geleerd hoe ik random getallen kan generen en deze ook met elkaar kan vergelijken.</p>
        </div>
        <div class="box">
            <h2>Wat kon beter?</h2>
            <p>Ik had de POC nog kunnen uitbreiden door bijvoorbeeld een lijst toe te voegen die precies iedere zet bijhoud.</p>
        </div>
    </div>
</div>
<div class="next-box animated fade-down delay-200">
    <a href="brand guide rosa.php" class="next">Volgende project</a>
</div>
<script src="script.js"></script>    
</body>
</html>