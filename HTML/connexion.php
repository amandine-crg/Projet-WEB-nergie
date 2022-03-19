<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet"> 

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/connexion.css" />
    <title>Connexion</title>
</head>

<body> 
  
  <?php
  require('basedonnée.php');
  session_start();
  if (isset($_POST['username'])){
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    $_SESSION['username'] = $username;
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
      $query = "SELECT * FROM `connexion` WHERE username='$username' 
    and password='".hash('sha256', $password)."'";
    
    $result = mysqli_query($conn,$query) or die(mysql_error());
    
    if (mysqli_num_rows($result) == 1) {
      $user = mysqli_fetch_assoc($result);
      header('location: ../HTML/map_eau.php');
    }else{
      $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
  }
  ?>  



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
            <a style="height: 49px;" href="../HTML/connexion.php">CONNEXION</a>
        </li>
        <li id="decouvrir">
            <a style="height: 49px;" href="../HTML/nousdécouvrir.php">NOUS DÉCOUVRIR</a>
        </li>

    </ul>
  </div>

  <div class="container">
    
    <form id="box" action="" method="post" >
      <p>Bienvenue</p>
      <input type="text" name="username" placeholder="Identifiant client EDF"><br>
      <input type="password" name="password" placeholder="Mot de passe"><br>
      <input type="submit" name="submit" value="Se connecter"><br>
      <a href="#">Mot de passe oublié ?</a>

      <?php if (! empty($message)) { ?>
        <p class="errorMessage"><?php echo $message; ?></p>
      <?php } ?>

    </form>

    <div class="drops">
      <div class="drop drop-1"></div>
      <div class="drop drop-2"></div>
      <div class="drop drop-3"></div>
      <div class="drop drop-4"></div>
      <div class="drop drop-5"></div>
    </div>

  </div>
</body>
