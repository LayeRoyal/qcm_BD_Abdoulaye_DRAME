<script src="../asset/javascript/inscrireScript.js"></script>
<form id="createAdmin" method="post">
    <div class="bg-white d-block">
          <div class="pt-1 p-4 bg-primary text-center text">
              <h3>CREER UN ADMIN</h3>
          </div>
          <div class="backq">
                 <div class="col-8 m-2 d-block">
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
                    <button id="create"  type="button" class="conex">Créer compte</button>
                    
                </div>
                <div class=" right col-4 d-block">
                    <img class="img avat" id="avatar" src="../asset/Images/backg.png"  alt="default"/>
                    <div class="avatar">
                    <h4>Avatar</h4>
                    <input type="file" name="file" id="file" accept="image/*">
                    <label for="file">Choisir un fichier</label>
                     <div class="qmessage text-center" id="resultA"></div>
                </div>
         </div>
    </div>
</form>
<script src="../asset/javascript/inscrireAdmin.js"></script>

 
<?php

?> 

