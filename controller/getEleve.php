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

$unEleve = $rqt->execute();

return $unEleve;
