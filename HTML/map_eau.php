<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: connexion.php");
    exit(); 
  }
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/map.css" />
    <title>Map</title>
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
                <a style="height: 49px;" href="../HTML/map_eau.php">
                    <img src="../IMAGE/carteFrancewhite.png" width="39" alt="carteFrance.cm" title="Notre Carte"/>
                </a>
            </li>
            <li id="connexion">
                <a style="height: 49px;" href="../HTML/deconnexion.php">DECONNEXION</a>
            </li>
            <li id="decouvrir">
                <a style="height: 49px;" href="../HTML/nousdécouvrir.php">NOUS DÉCOUVRIR</a>
            </li>
        </ul>
    </div>

    <div id="carteinteractive">
        <iframe width="40%" height="600px" frameborder="3" allowfullscreen src="//umap.openstreetmap.fr/fr/map/liste-des-site-de-production-hydroelectrique-en-fr_143756?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=expanded&onLoadPanel=undefined&captionBar=false&fullscreenControl=true&locateControl=true"></iframe>
    </div>

    <div id="selector_box">
        <ul>
            <li style="list-style-image: url('http://localhost/Projet-WEB-nergie/IMAGE/eoliennes.png')" >
                <a href="../HTML/map_eolien.php" style="color: #87ceeb;" >Eolien</a>
            </li>
            <li style="list-style-image: url('http://localhost/Projet-WEB-nergie/IMAGE/panneau.png')">
                <a href="../HTML/map_solaire.php" style="color: #edeeed;" >Photovoltaïque</a>
            </li>
            <li style="list-style-image: url('http://localhost/Projet-WEB-nergie/IMAGE/goutte.png')">
                <a href="../HTML/map_eau.php" style="color: #00008b;" >Hydrolique</a>
            </li>
            <li style="list-style-image: url('http://localhost/Projet-WEB-nergie/IMAGE/centrale.png')">
                <a href="../HTML/map_nucléaire.php" style="color: #34ce34;" >Nucléaire</a>
            </li>
        </ul>
    </div>
    
</body>