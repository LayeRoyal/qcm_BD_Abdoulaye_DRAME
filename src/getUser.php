<?php
require_once "dbLogin.php";
    global $connexion;
    $sql =" SELECT user.login FROM user;";
    $req = $connexion->query($sql);
    $result = $req->fetchAll(2);

    echo json_encode($result);

?>