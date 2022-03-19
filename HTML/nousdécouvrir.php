<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/nousdécouvrir.css" />
    <title>Nousdecouvrir</title>
</head>

<body>
    <div id="wrap">
        <ul class="navbar">
            
            <li>
                <a style="height: 49px;" href="../HTML/Acceuil.php">
                    <img src="../IMAGE/logoEDF.png" width="87" alt="edfmap.cm" title="Acceuil"/>
                </a>
            </li>
            <li id="map">
                <a style="height: 49px;" href="../HTML/map_eolien.php">
                    <img src="../IMAGE/carteFrancewhite.png" width="39" alt="carteFrance.cm" title="Notre Carte"/>
                </a>
            </li>
            <li id="connexion">
                <?php
                        session_start();
                        if(!isset($_SESSION["username"])){
                            echo '<a style="height: 49px;" href="../HTML/deconnexion.php">CONNEXION</a>';
                        }
                        else {
                            echo '<a style="height: 49px;" href="../HTML/connexion.php">DECONNEXION</a>';
                        }
                    ?>
            </li>
            <li id="decouvrir">
                <a style="height: 49px;" href="../HTML/nousdécouvrir.php">NOUS DÉCOUVRIR</a>
            </li>
        </ul>
    </div>

    <div >
        <h1 class="titre"> Nous sommes</h1>
        <h2 class="text"> Nous sommes une équipe de deux jeunes ingénieurs étudiants, spécialisés dans les énergies et l'environnement. Ce site web est le résultat d'un projet pour notre cours de web pour l'énergie. Nous avons choisis de réaliser un site permettant grâce à une carte intéractive de découvrir les différents sites de production d'électricté de EDF en France.
        </h2>
        <br>
        <br>
        <h3 class="lien"> Pour en savoir plus rendez-vous sur : <br><a href="https://www.edf-renouvelables.com/"> EDF France</a> </h3>
    </div>
    
    <footer class="page-footer">
        <footer class="page-footer">
            <div class="footgauche">
                <p class="nous">Qui sommes nous ? <br> <a href="../HTML/nousdécouvrir.php" style="color : #ffffff" style="text-decoration:none">Nous découvrir </a></p>
            </div>
            <div class="footcenter">
                <img src="../IMAGE/logoEDFwhite.png" alt="logoblanc.cm" title="logoblanc" height="40px" width="90px"/>
            </div>
            <div class="footdroit">
                <p class="contact">Nous contacter : EDFMaps@gmail.com <br> © 2022 EDF Maps CREGUT LAGRANGE </p>
            </div>
    </footer>
</body>
