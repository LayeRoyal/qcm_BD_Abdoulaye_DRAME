<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="../asset/javascript/jquery.js"></script>
    <title>Joueur</title>
</head>
<body>
  <form method="post" enctype="multipart/form-data">
  <div class="container-fluid d-flex cont">
      <nav class="navbar navbar-dark ">
        <img class="navbar-brand rounded-circle logo"  src="../asset/Images/logo.png" alt="logo">
      </nav>
      <h1>S'INSCRIRE POUR JOUER</h1>
    </div>
        <div class="mid">
          <div class="backmid d-flex ">
             <div class="left d-block col-8 align-items-center justify-content-center py-2 ">
                 <div class="insc">
                    <h2><u>S'INSCRIRE</u></h2>
                 </div>
                 <div class="data  d-block">
                    <h5> Prénom </h5>
                    <input name="prenom"  id="fname" type="text" value="<?php if(isset($_POST['prenom'])){echo $_POST['prenom'];} ?>" />
                    <span id="fnameError">field required</span>
                    <h5> Nom </h5>
                    <input name="nom" id="lname" type="text" value="<?php if(isset($_POST['nom'])){echo $_POST['nom'];} ?>" />
                    <span id="lnameError">field required</span>
                    <h5> Login </h5>
                    <input name="login" id="login" type="text" value="<?php if(isset($_POST['login'])){echo $_POST['login'];} ?>" />
                    <span id="loginError">field required</span>
                    <h5> Password </h5>
                    <input name="pass" id="pass" type="password" value="<?php if(isset($_POST['pass'])){echo $_POST['pass'];} ?>"/>
                    <span id="passError">field required</span>
                    <h5> Confirmer Password </h5>
                    <input name="confpass" id="confpass" type="password" value="<?php if(isset($_POST['confpass'])){echo $_POST['confpass'];} ?>"/>
                    <span id="confPassError">field required</span><br>
                    <button name="create" class="conex">Créer compte</button>
                    </div>
                </div>
             <div class="right col-4 d-block">
                 <img class="img" id="avatar" src="../asset/Images/backg.png"  alt="default"/>
                 <div class="avatar">
                    <h3>Avatar</h3>
                    <input type="file" name="file" id="file" accept="image/*">
                    <label for="file">Choisir un fichier</label>
                </div>
                <div class="seconecter">
                    <h4>J'ai déjà un compte!   <a href="../index.php"><u>Se connecter</u></a></h4>
                </div>
             </div>
          </div>
        </div>

   </div>
</form>
<script src="../asset/javascript/inscrireScript.js"></script>
</div>
</body>
</html>
<!-- Backend code -->
<div class="userText">
 <?php
  include("fonction.php");
  inscription('joueur');
  ?>
  </div