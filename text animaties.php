<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="temp dev.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
        <h1>Tekst animaties</h1>
        <p>Om mijn portfolio site mooi en interactief te maken wilde ik tekst animaties toevoegen in de vorm van fade ins en een coole typewriter animatie tutorial die ik had gevonden.</p>
    </div>
</div>
<div class="row2 animated fade-down delay-200">
    <div class="topbox">
        <a href="https://github.com/SEFFFFF/Text-animations" class="back-btn2">Github</a>
    </div>
    <div class="topbox2">
        <a href="https://github.com/SEFFFFF/Text-animations" class="back-btn2">Demo</a>
    </div>
</div>
<div class="container">
    <div class="row animated fade-down delay-200">
        <div class="box">
            <img src="images/type js.png" alt="typewriter">
            <img src="images/typewriter.gif" alt="typewriter">
        </div>
        <div class="box">
            <h2>Typewriter animatie</h2>
            <p>Voor deze animatie heb ik een coole <a href="https://www.youtube.com/watch?v=PuOGBacTYAY&t=534s" class="tutorial">tutorial</a> gevonden. Het uitvoeren hiervan was door de goede uitleg gemakkelijk en ik kon ook volgen wat er uitgelegd werd en hoe het werkt.</p>
            <p>Eerst wordt er een array aangemaakt met alle mogelijkheden. Een functie controlleert of er al tekst staat zo niet gaat dan een loop af die de characters uit de array in de span toevoegen.</p>
            <p>Als deze functie compleet is er een korte delay van 2 secondes waarna de functie erase uitgevoerd wordt. Deze functie werkt hetzelfde als de type functie alleen verwijderd deze de characters.</p>
            <p>Tijdens het uitvoeren van beide functies word de class typing toegevoegd aan de span waardoor de break stopt met knipperen om het zo een realistisch type effect te geven.</p>
            <p>Foto gemaakt door Sebastian Sabal-Bruce</p>
        </div>
    </div>
    <div class="row animated fade-down delay-200">
        <div class="box">
            <img src="images/scroll js-css.png" alt="fade on scroll">
            <img src="images/fade in.gif" alt="fade on scroll">
        </div>
        <div class="box">
            <h2>Fade on scroll animaties</h2>
            <p>Ook wilde ik nog een fade on scroll animatie maken. Deze wilde ik zonder tutorials doen maar dat bleek toch niet heel gemakkelijk te zijn. Ik wist dat ik hier een CSS transform effect moest gebruiken alleen wist ik niet precies hoe ik ervoor kon zorgen dat de fadein functie uitgevoerd word als er tot een bepaald punt gescrolled word.</p>
            <p>Op internet was hier gelukkig genoeg over te vinden en al snel kwam ik bij stackoverflow uit op een antwoord die zei dat je de element.getBoundingClientRect().top - window.innerHeight moet gebruiken. Deze kijkt hoever de bovenkant van de pagina in je browser is en geeft hier een getal aan. Dit getal word min een percentage van het beeld gedaan en dan gebruikt in een if else statement gezet als deze onder een bepaalde waarde komt wordt de class visible toegevoegd aan de element die je wilt.</p>
            <p>Deze class veranderd de opacity van de element en afhankelijk van waar deze inspringt het element transformt.</p>
            <p>Ik ben erg blij met het resultaat maar de code kan nog beter denk ik omdat deze in combinatie met andere effecten issues geeft.</p>
        </div>
    </div>
    <div class="row animated fade-down delay-200">
        <div class="box">
            <h2>Wat heb ik geleerd?</h2>
            <p>Ik heb met deze oefening geleerd over JS. Zo weet ik nu hoe ik effecten kan laten gebeuren op scroll en hoe ik een array kan gebruiken om elementen te laten verschijnen of weghalen. Ook heb ik nog wat geoefent met positioneren, dit vind ik nog altijd wat lastig maar het gaat me steeds beter af.</p>
        </div>
        <div class="box">
            <h2>Wat kon beter?</h2>
            <p>De code van de fade on scroll animatie kan nog wat beter zoals gezegd heeft deze soms issues met verdwijnen uit beeld als je naar boven scrollt.</p>
        </div>
    </div>
</div>
<div class="next-box animated fade-down delay-200">
    <a href="rosa pocs.php" class="next">Volgende project</a>
</div>
<script src="script.js"></script>    
</body>
</html>