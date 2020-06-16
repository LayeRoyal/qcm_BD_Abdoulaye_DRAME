<?php

session_start();
include_once 'src/dbLogin.php';
global $conexion;
$sql='SELECT * From user;';
try{
    $user= $connexion->query($sql);
    $user= $user -> fetchAll(2);
}
catch(Exeption $e){
   echo 'connexion non etabli '.$e->getMessage();
}


if( isset($_POST['connexion']))
{
    if(empty($_POST['login']) || empty($_POST['pass']))
    {
        $error= 'Veuillez remplir tous les champs SVP!';
    }
    else
    {  
        $login=$_POST['login'];
        $pass=$_POST['pass'];
       
      
       //verifions s'il est deja inscrit
       $checklogin=false;
       for($i=0;$i<count($user);$i++)
       {
           if($user[$i]['login']==$login)
           { 
               $checklogin=true;
               $indice=$i;
               break;
           }
       }

       if($checklogin)
       {   
           //verifions le mot de pass admin
           if(($user[$indice]["password"])==$pass)
           {
                //si c admin
             if($user[$indice]['profil']=='admin')
             {
               //valeur session login
               $_SESSION['loginAdmin']=$login;
               header('location: src/admin.php');

             }
             else      // si c joueur
             {
                  //valeur session login
                  $_SESSION['loginPlayer']=$login;
                  header('location: src/play.php'); 
        
             }
           }
           else
           {   
               $error= 'Mot de pass incorrect!';
           }
               
               
       }
       else
       {
           $error= 'Login inexistant!';
       }
           
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Connexion</title>

</head>
<body>
<div class="container-fluid d-flex cont">
      <nav class="navbar navbar-dark ">
        <img class="navbar-brand rounded-circle logo"  src="asset/Images/logo.png" alt="logo">
      </nav>
      <h1>Bienvenu dans la plateforme de Quizz</h1>
</div>
    <section class="container-fluid mid ">
  <section class="row justify-content-center ">
  <section class="col-12 col-sm-6 col-md-3">
  <form method="post" class="form-container">
  <div class="form-group">
    <h2 class="text-center">LOGIN</h2>
  </div>
  <div class="form-group">
    <h3>Login</h3>
    <div class="d-flex">
    <input type="text" class="form-control col-10 champ" id="exampleInputPassword1" name="login"  value="<?php if(isset($_POST['login'])){echo $_POST['login'];} ?>">
    <img src="asset/Images/Icones/iclogin.png" class="icon" alt="pass"/>  
    </div> 
  </div>
  <div class="form-group">
    <h3 >Password</h3>
    <div class=" d-flex">
    <input type="password" class="form-control col-10 champ" id="exampleInputPassword1" name="pass">
    <img src="asset/Images/Icones/icpassword.png" class="icon" alt="pass"/>  
    </div>
    </div>
    <div class="mt-4">
  <button type="submit" class="btn sub" name="connexion">Connexion</button>
  <a class="dep my-2" href="src/user.php"><h4>S'inscrire</h4></a>
    </div>
    <div class="text-center mt-5">
<?php
if(isset($error))
{
  echo "<h5 class=' text-danger'>$error</h5>";
}
?>
</div>
</form>
  </section>
  </section>
</section>  
</form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>



