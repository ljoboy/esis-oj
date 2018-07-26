<nav class="navbar navbar-dark cyan justify-content-between animated fadeInUpBig">
    <div class="container">
        <a class="navbar-brand" href="http://localhost/esis-oj/"><h1><img src="static/img/ico_etude.png" alt="esis-oj icon">ESIS-OJ</h1></a>
        <ul class="nav navbar-nav pull-right">
            <li class="nav-item <?php echo page_actu('today') ?>">
                <a class="nav-link" href="today.php"><i class="fa fa-calendar-check-o"></i> <span class="hidden-sm-down">Today</span></a>
            </li>
            <li class="nav-item <?php echo page_actu('all') ?>">
                <a class="nav-link" href="all.php"><i class="fa fa-database"></i> <span class="hidden-sm-down">All</span></a>
            </li>
            <li class="nav-item <?php echo page_actu('new') ?>">
                <a class="nav-link" href="new.php"><i class="fa fa-plus-circle"></i> <span class="hidden-sm-down">New</span></a>
            </li>
            <li class="nav-item <?php echo page_actu('top10') ?>">
                <a class="nav-link" href="top10.php"><i class="fa fa-sort-numeric-desc"></i> <span class="hidden-sm-down">Top 10</span></a>
            </li>
            <li class="nav-item avatar active dropdown">
                <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="static/img/users/<?php echo $_SESSION['user']['sexe']?>.png" class="img-fluid rounded-circle"/>
                </a>
                <div class="dropdown-menu dropdown-warning" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <h6 class="dropdown-header"><?php echo ucfirst($_SESSION['user']['matricule']) ?></h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="deconnexion.php"><i class="fa fa-cogs"></i> <span class="hidden-sm-down">Logout</span></a>
                </div>
            </li>
        </ul>
    </div>
</nav>