<?php
require_once('../models/dao/connexiondb.class.php');
require_once('../models/dao/publication.dao.php');
$pubDAO = new PublicationDAO();
$pub = $pubDAO->pubById($id);
if (empty($pub)){
    header('location:all.php?error=4');
    exit();
}