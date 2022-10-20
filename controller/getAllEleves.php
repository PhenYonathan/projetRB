<?php
include '../model/FunctionsUtils.php';
include '../model/Eleve.php';

$cnx = FunctionsUtils::activeCnx();

//$allEleve = array();
//$rqt = $cnx->prepare("select nom, prenom, email, password from eleve");
//$rqt->execute();

//function lstEleves()
//{
    $requete = $cnx->prepare("select nom, prenom, email from eleve order by nom ASC;");
    $requete->execute();
    $lesEleves = $cnx->query($requete);

    $i = 0;
    $ligne = $lesEleves->fetch();
    while($ligne)
    {
        $eleve[$i]['nom']=$ligne['nom'];
        $eleve[$i]['prenom']=$ligne['prenom'];
        $eleve[$i]['mail']=$ligne['mail'];
        $ligne=$lesEleves->fetch();
        $i++ ;
    }

//    $lesEleves->closeCursor();

//    return $eleve;

//}


