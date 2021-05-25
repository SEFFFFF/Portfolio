<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="temp dev.css">
    <link rel="stylesheet" href="header.css">
    <link rel='icon' href='images/favicon.png' type='image/x-icon' >
    <title>Portfolio website</title>
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
        <h1>Portfolio website</h1>
        <p>Na dat ik het prototype af had ging ik dit realiseren in html/css/js. Tot nu toe is dit mijn meest ambitieuze website ooit geweest en ben ik ook heel trots op hoe het gelukt is.</p>
        <a href="https://github.com/SEFFFFF/Portfolio" class="back-btn2">Github</a>
    </div>
</div>

<div class="container">
    <div class="row animated fade-down delay-200">
        <div class="box">
            <img src="images/html port.png" alt="html">
        </div>
        <div class="box">
            <h2>Structuur</h2>
            <p>In semester 1 heb ik flexbox geleerd daarom heb ik deze keer ook flexbox gebruikt. Dit maakte het makkelijk en snel voor mij om snel content op de juist plek te krijgen. Ook heeft Joep me geleerd hoe ik PHP kan gebruiken om mijn header te 'includen'. Hierdoor hoef ik deze maar 1 keer te maken en kan ik deze constant opnieuw gebruiken.</p>
            <p>Ook heb ik mezelf tijd bespaard door voor de projecten een template op te stellen. Deze kon ik makkelijk aanpassen en uitbreiden. Het zorgde er wel voor dat ik meer CSS bestanden moest gebruiken om de styling goed te krijgen overal.</p>
        </div>
    </div>
    <div class="row animated fade-down delay-200">
        <div class="box">
            <img src="images/css-js port.png" alt="css-js">
        </div>
        <div class="box">
            <h2>Styling</h2>
            <p>Dit semester heb ik een hoop geleerd over animaties met CSS en Javascript. Dit heb ik ook weer in mijn site verwerkt om het zo interactief, interessant en speels te maken.</p>
            <p>Vorig semester kreeg ik de feedback om mijn code efficienter te maken door classes slimmer te gebruiken en dat heb ik deze keer ook veel meer gedaan. Zo heb ik in vergelijking een hoop minder code dan ik eerst zou hebben.</p>
        </div>
    </div>
    <div class="row animated fade-down delay-200">
        <div class="box">
            <img src="images/animaties port.gif" alt="animaties">
        </div>
        <div class="box">
            <h2>Animaties</h2>
            <p>Zoals ik al zei heb ik een hoop geleerd over animaties. Zo heb ik een aantal POCs gemaakt voor deze site en deze ook succesvol geimplimenteerd. Hierbij maak ik gebruik van CSS animaties en een beetje Javascript. De CSS gebruik ik o.a. voor de hover states van knoppen en projecten en de animatie bij leerdoelen. Ook gebruik ik Javascript voor de fade in animaties en een library voor het scroll effect op de home page.</p>
        </div>
    </div>
    <div class="row animated fade-down delay-200">
        <div class="box">
            <h2>Wat heb ik geleerd?</h2>
            <p>Ik heb een hoop geleerd met het bouwen van deze site zoals het efficienter gebruik van classes, gebruik van templates, gebruik van Javascript voor animaties en click functionaliteiten, gebruik van PHP om dingen te includen en dit is natuurlijk een hoop nieuwe ervaring voor mij omdat het development gedeelte nog heel nieuw en soms ook lastig is voor me.</p>
        </div>
        <div class="box">
            <h2>Wat kon beter?</h2>
            <p>Volgende keer ga ik niet zo lang uitstellen als ik nu heb gedaan. Ik heb niet echt stres gehad om deze site af te krijgen maar ik heb me wel verkeken op hoeveel werk dit is. Daarom wil ik volgende keer eerder beginnen met programmeren.</p>
        </div>
    </div>
</div>
<div class="next-box animated fade-down delay-200">
    <a href="text animaties.php" class="next">Volgende project</a>
</div>
<script src="script.js"></script>    
</body>
</html>