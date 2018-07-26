<?php
require_once('../models/structure/publication.class.php');
require_once('../models/dao/connexiondb.class.php');
require_once('../models/dao/publication.dao.php');


if(isset($_GET)){
    $pubdao = new PublicationDAO();
    if (isset($_GET["like"])){
        $id = strip_tags(htmlentities(addslashes($_GET['like'])));
        $like = $pubdao->like($id);
    }elseif (isset($_GET["dislike"])){
        $id = strip_tags(htmlentities(addslashes($_GET['dislike'])));
        $like = $pubdao->dislike($id);
    }
}
header("location: ../views/all.php");