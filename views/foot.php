
<!--Footer-->
<footer class="page-footer cyan center-on-small-only animated fadeInDownBig">
    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">
            <!--First column-->
            <div class="col-md-6">
                <h3><strong>ESIS-OJ</strong></h3>
                <hr/>
                <p>
                    ESIS Open Journal (<strong>ESIS-OJ en sigle</strong>) est un journal libre ouvert à tous les étudiants
                    de l'&Eacute;cole Supérieure d'Informatique Salama (ESIS). <br /><br />Poster vos appréciations ou critiques, récommandations ou informations.
                </p>
            </div>
            <!--/.First column-->
            <!--Second column-->
            <?php 
            if(page() != "index.php"): ?>
            <div class="col-md-6">
                <h5 class="title">Aller à :</h5>
                <ul>
                    <li><a style="padding:5px;" class="<?php echo page_actu('today') ?>" href="today.php"><i class="fa fa-calendar-check-o"></i> Today</a></li>
                    <li><a style="padding:5px;" class="<?php echo page_actu('all') ?>" href="all.php"> <i class="fa fa-database"></i> All</a></li>
                    <li><a style="padding:5px;" class="<?php echo page_actu('new') ?>" href="new.php"> <i class="fa fa-plus-circle"></i> New</a></li>
                    <li><a style="padding:5px;" class="<?php echo page_actu('top10') ?>" href="top10.php"> <i class="fa fa-sort-numeric-desc"></i> Top 10</a></li>
                </ul>
            </div> 
            <?php endif ?>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
		&copy; ESIS-OJ <?php echo date('Y') ?> | Designed by <a href="http://fb.me/ljoboy">Lijerbul LJOBOY</a>            
        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- JQuery -->
<script type="text/javascript" src="static/js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="static/js/tether.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="static/js/compiled.min.js"></script>