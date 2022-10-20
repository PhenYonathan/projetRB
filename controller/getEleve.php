<?php

include '../model/FunctionsUtils.php';
include '../model/Eleve.php';

$cnx = FunctionsUtils::activeCnx();

$mail = $_POST['email'];
$password = $_POST['password'];

//$unEleve = array();
$rqt = $cnx->prepare("select nom, prenom, email, password from eleve where email = ? and password = ?");
$rqt->bindValue(1, $mail);
$rqt->bindValue(2, $password);
$rqt->execute();

$unEleve = $rqt->fetchAll();

//return $unEleve;

//var_dump($unEleve);

if ($unEleve[0]["email"] == $mail && $unEleve[0]["password"] == $password){
    echo "Connexion réussie";
}else{
    echo "Connexion échouée";
}