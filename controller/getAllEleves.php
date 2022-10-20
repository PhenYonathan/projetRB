<?php
include '../model/FunctionsUtils.php';
include '../model/Eleve.php';

$cnx = FunctionsUtils::activeCnx();

$allEleve = array();
$rqt = $cnx->prepare("select nom, prenom, email, password from eleve");
$rqt->execute();

//echo $allEleve;


