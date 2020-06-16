<?php
require_once "dbLogin.php";
    global $connexion;
    
    $limit = $_POST['limit'];
    $offset = $_POST['offset'];
    $cpt=$limit+$offset;
    $sql1 ="SELECT question.id_question, question.question, question.type FROM question LIMIT {$limit} OFFSET {$offset} ";
$sql2 ="SELECT * FROM reponse where id_reponse>={$offset} AND id_reponse<={$cpt}";

    $result= requete( $connexion,$sql1);
    $result2= requete( $connexion,$sql2);
$nbr=0;
foreach ($result as $key => $value) {
   foreach($result2 as $key2 => $value2){
    if($result[$key]['id_question']==$value2['id_reponse'])
    {
        $result[$key]['reponse'][$nbr]['rep']=$value2['reponses'];
        $result[$key]['reponse'][$nbr]['statut']=$value2['statut'];
        $nbr++;
    }
   }
}
echo json_encode($result);

?>