<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Acceuil.css" />
    <title>Acceuil</title>
</head>

<body>
    <?php $totalCategorie = mysqli_query($con, "SELECT * FROM connexion"); 
    if($totalCat = mysqli_fetch_assoc($totalCategorie)){
                    $totalCategorie= $totalCat['nom'];?>
    <div id="wrap">
        <ul class="navbar">
            <?php echo $totalCategorie ?>
            <li>
                <a style="height: 49px;" href="../HTML/Acceuil.html">
                    <img src="../IMAGE/logoEDF.png" width="87" alt="edfmap.cm" title="Acceuil"/>
                </a>
            </li>
            <li id="map">
                <a style="height: 49px;" href="../HTML/map_eolien.html">
                    <img src="../IMAGE/carteFrancewhite.png" width="39" alt="carteFrance.cm" title="Notre Carte"/>
                </a>
            </li>
            <li id="connexion">
                <a style="height: 49px;" href="../HTML/connexion.html">CONNEXION</a>
            </li>
            <li id="decouvrir">
                <a style="height: 49px;" href="../HTML/nousdécouvrir.html">NOUS DÉCOUVRIR</a>
            </li>
        </ul>
    </div>
    
    <div class="acceuil">
        <div class="description">
            <h1 class= 'titre'>  EDF MAPS </h1>
            <p>
                Vous permet de découvrir les sites Français de production de votre électricité
            </p>
            <img src="../IMAGE/logoEolienne.png" alt="eolienne.cm" title="eolienne" height="90px" width="70px"/>
            <img src="../IMAGE/logoNucleaire.png" alt="nucleaire.cm" title="nucleaire" height="ç0px" width="70px"/>
            <img src="../IMAGE/logoPanneau.png" alt="solaire.cm" title="solaire" height="70px" width="80px"/>
            <img src="../IMAGE/eau.png" alt="eau.cm" title="eau" height="90px" width="70px"/>
        </div>
    </div>

    <footer class="page-footer">
        <footer class="page-footer">
            <div class="footgauche">
                <p class="nous">Qui sommes nous ? <br> <a href="../HTML/nousdécouvrir.html">Nous découvrir</a></p>
            </div>
            <div class="footcenter">
                <img src="../IMAGE/logoEDFwhite.png" alt="logoblanc.cm" title="logoblanc" height="40px" width="90px"/>
            </div>
            <div class="footdroit">
                <p class="contact">Nous contacter : EDFMaps@gmail.com <br> © 2022 EDF Maps CREGUT LAGRANGE </p>
            </div>
    </footer>

</body>