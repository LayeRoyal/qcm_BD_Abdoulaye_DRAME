<?php
require_once "dbLogin.php";
global $connexion;

/* Getting file name */
$filename = $_FILES['file']['name'];

/* Location */
$destination="../asset/uploads/".$filename;
$uploadOk = 1;
$imageFileType = pathinfo($destination,PATHINFO_EXTENSION);

/* Valid Extensions */
$valid_extensions = array("jpg","jpeg","png");
/* Check file extension */
if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
   $uploadOk = 0;
}

if($uploadOk == 0){
   echo 0;
}else{
   /* Upload file */
   $location = "../asset/uploads/".$_POST['login'].".".$imageFileType;

   $move=move_uploaded_file($_FILES['file']['tmp_name'],$location);
  if(!$move){
      echo 'image';

}
}
      
    //verifions si le login exist deja
    $checklogin=false;
    $sql ="SELECT user.login FROM user;";
    $req = $connexion->query($sql);
    $result = $req->fetchAll(2);
    foreach ($result as $key => $value) {
    if($value['login']==$_POST['login'])
    {
        $checklogin=true;  
    break;
    }
}


if($_POST['pass']!=$_POST['confpass']){
echo 'pass';
}
elseif($checklogin){
echo 'login';
}
else{

    $data=[
        'login' => $_POST['login'],
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'pass' => $_POST['pass'],
        'profil' => 'admin',
        'avatar' => $location
    ];
//$_FILES["file"]["name"]
$sql ="INSERT INTO `user` (`id`, `login`, `nom`, `prenom`, `password`, `profil`, `avatar`, `statut`)
 VALUES (NULL, :login, :nom,  :prenom ,  :pass, :profil, :avatar , '1');";
$req= $connexion->prepare($sql);
$result=$req->execute($data);

echo 'success';
}
?>