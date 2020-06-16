<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="../asset/javascript/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Admin</title>
</head>
<body>
  <div class="container-fluid d-flex cont">
      <nav class="navbar navbar-dark ">
        <img class="navbar-brand rounded-circle logo"  src="../asset/Images/logo.png" alt="logo">
      </nav>
      <h1 class="band">Bienvenu sur la plateform d'edition du Quizz</h1>
      <input class="logout" type="button" value="Deconnexion">
    </div>
        <div class="adminback">
          <div class="container-fluid d-flex pt-2 ">
            <div class="col-3 p-0 mt-4 menu ">
                <div class="d-block ">
                <h4 class="text-center mt-4 text-white ">Abdoulaye DRAME</h4>
                <img src="../asset/Images/backg.png" alt="avatar" class="rounded-circle avatarAdmin">
                </div>
                <div class="tab mt-2 pt-4">
                <ul class="font-weight-bold">
                    <li id="dashboard" class="active">Dashboard</li>
                    <li id="listQ" class="">Liste Question</li>
                    <li id="creerQ" class="">Creer Question</li>
                    <li id="listJ" class="">Liste Joueur</li>
                    <li id="creerA" class="">Creer Admin</li>

                </ul>
                </div>
            </div>
            <div class="include bg-white" id="include">
              <form method="post" enctype="multipart/form-data">
              </form>
             </div>
          </div>
        </div>

   </div>
   <script src="../asset/javascript/adminScript.js"></script>
</div>
</body>
</html>