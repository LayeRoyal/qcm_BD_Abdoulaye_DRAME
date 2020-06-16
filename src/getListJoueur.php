<?php
require_once "dbLogin.php";
    global $connexion;
    $sql ="SELECT `user`.`prenom`,`user`.`nom`, `score`.`score` FROM `user`, `score` WHERE `score`.`id` = `user`.`id`
    ";
    $request = $connexion->query($sql);
    $result = $request->fetchAll(2);
    echo json_encode($result);

?>