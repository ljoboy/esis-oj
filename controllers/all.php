<?php
require_once('../models/structure/publication.class.php');
require_once('../models/dao/connexiondb.class.php');
require_once('../models/dao/publication.dao.php');

$pubdao = new PublicationDAO();
$all = $pubdao->getAllPublication();