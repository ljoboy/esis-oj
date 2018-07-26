<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
require_once('../models/structure/publication.class.php');
require_once('../models/dao/connexiondb.class.php');
require_once('../models/dao/publication.dao.php');
include_once("functions.php");
if(isset($_POST['contenu'])) {
    $contenu = e($_POST['contenu']);
    $pub = new Publication(0, $_SESSION['user']['id'], $contenu, date('Y-m-d H:i:s'),0,0);
    $pubdao = new PublicationDAO();

    $res = $pubdao->nouvellePublication($pub);

    if($res) {
        header('Location: ../views/today.php');
    } else {
        header('Location: ../views/new.php?error=1');
    }
} else {
    echo 'Erreur dans les données envoyées!';
}