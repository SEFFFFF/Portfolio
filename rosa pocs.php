<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="temp dev.css">
    <link rel="stylesheet" href="header.css">
    <link rel='icon' href='images/favicon.png' type='image/x-icon' >
    <title>Rosa POCs</title>
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
        <h1>Rosa POCs</h1>
        <p>Om de website van Rosa wat interactiviteit en flair te geven wilde we wat animaties implementeren. Ik heb het daarvoor op me genomen om een parallex scroll fade en vynil animatie te maken. Deze laatste is dat een vynil uit een hoes slide als je er op hovert.</p>
    </div>
</div>
<div class="row2 animated fade-down delay-200">
    <div class="topbox">
        <a href="https://github.com/SEFFFFF/Text-animations" class="back-btn2">Github</a>
    </div>
    <div class="topbox2">
        <a href="http://leelarosa.jdkdesigns.nl/" class="back-btn2">Demo</a>
    </div>
</div>
<div class="container">
    <div class="row animated fade-down delay-200">
        <div class="box">
            <img src="images/scroll lib.png" alt="fade on scroll">
            <img src="images/rosa pocs.gif" alt="fade on scroll" class="gif">
        </div>
        <div class="box">
            <h2>Fade on scroll</h2>
            <p>Als eerste hadden we inspiratie opgedaan voor onze website. Hierin vonden we het effect op de website van <a href="http://tommisch.com/" class="tutorial">Tom Misch</a> heel mooi. Als je van de landing page naar beneden scrollt de achtergrond blijft staan en de pagina eronder eroverheen glijd terwijl de achtergrond wegvaagt.</p>
            <p>Ik wilde dit eerst proberen om zelf te maken maar na overleg met groepsgenoten en advies van Joep om hier een library voor te gebruiken omdat dit nog te moeilijk was voor mij volgens hem ben ik opzoek gegaan naar libraries die me hierbij konden helpen.</p>
            <p>Het was even zoeken maar uiteindelijk had ik een goede Jquerry library met uitleg gevonden die het gewenste effect had. Het implementeren van deze library was gemakkelijk omdat dit goed uitgelegd werd.</p>
            <p>Ik had nog opgezocht hoe een library werkt omdat dit niet helemaal duidelijk was voor mij maar dat bleek ook simpel te zijn. Het zijn basically een aantal functies die al geschreven zijn en die je uit een remote library kan aanroepen door Jquerry te gebruiken in dit geval.</p>
            <p>We waren allemaal erg tevreden over dit effect. Rosa vond het ook super vet en ze vond dat het de website wat aparts gaf.</p>
            <p>De rest van de site wat te zien is in deze gif is gemaakt door mijn groepsgenoot Joep de Kock.</p>
        </div>
    </div>
    <div class="row animated fade-down delay-200">
        <div class="box">
            <img src="images/album.png" alt="album animatie">
        </div>
        <div class="box">
            <h2>Album animatie</h2>
            <p>Als 2e animatie wilde ik een vynil maken die uit zijn hoes slide als je erover hovert. Dit was de eerste keer dat ik met transform gewerkt heb in CSS maar door de goede uitleg op W3schools was dit allemaal gemakkelijk al helemaal in dit geval omdat de hoes alleen naar links hoeft te gaan als je erover hovert.</p>
            <p>Wanneer je op de hoes hovert wordt de hover class aangeroepen. Deze veranderd de positie van de hoes door het een nieuwe transform waarde te geven. Dit wordt geanimeerd door de transition function, hierin geef je een tijd aan de animatie en wat voor soort animatie dit moet zijn en de rest gebeurt vanzelf.</p>
            <p>Ook hier waren Rosa en ons erg tevreden over.</p>
        </div>
    </div>
    <div class="row animated fade-down delay-200">
        <div class="box">
            <h2>Wat heb ik geleerd?</h2>
            <p>Ik heb met deze opdracht voor het eerst kennis gemaakt met libraries en het gebruik van transform en transitions in CSS. Ik vond dit best makkelijk om te doen en het gaf me veel motivatie om meer te proberen met animaties in CSS.</p>
        </div>
        <div class="box">
            <h2>Wat kon beter?</h2>
            <p>Ik vind het jammer dat ik niet zelf de code heb kunnen verzinnen voor het scroll effect maar als ik meer oefen met Javascript moet dit zeker lukken.</p>
        </div>
    </div>
</div>
<div class="next-box animated fade-down delay-200">
    <a href="hover animaties.php" class="next">Volgende project</a>
</div>
<script src="script.js"></script>    
</body>
</html>