<!DOCTYPE html>
<html>
            <head>
                <title>Vitrine - Accueil</title>
                <link href="./vitrine.css" rel="stylesheet">
                    <meta charset="utf-8"/>
            </head>
 
           <?php $current_page= "Acceuil"?>
            <?php include "./navigation.php";?>
           
            <body>
            <?php 
            $page= "accueil";
            include "header.php";?>
                <h2>ACCUEIL</h2>
                <p>Le numérique, nouvelle ère de l’humanité, source d’innovation et de performance ? Pour mieux comprendre cette révolution, venez apprendre les rudiments du code et découvrir les bases de la programmation des sites internet. Destiné aux étudiants, ce code camp vous initiera en un mois aux principaux langages de programmation
                    Web (HTML-CSS et PHP), vous dévoilera le fonctionnement d’outils comme Google ou Paypal et vous éclaira sur la sécurité des sites internet.</p>
               
                <div class="photo">
                    <img class="photo" src="Unknown.jpeg" style="width: 500px;height: 300px;">
                    <img class="photo" src="Unknown-1.jpeg" style="width: 500px;height: 300px;">
                </div>
                <?php include './footer.php';?> 
            </body>
           
</html>