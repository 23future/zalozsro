
<!--========================================

       Preloader

========================================-->

<div class="page-preloader">

    <div class="spinner">

        <div class="rect1"></div>

        <div class="rect2"></div>

        <div class="rect3"></div>

        <div class="rect4"></div>

        <div class="rect5"></div>

    </div>

</div>


<!--========================================

       Header

========================================-->
<link rel="shortcut icon" type="image/png" href="assets/img/favicon_new.png"/>

<!--//** Navigation**//-->


<nav class="navbar navbar-default navbar-fixed white <?php echo $c_header; ?>  bootsnav navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">



    <div class="container">

        <!-- Start Header Navigation -->

        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">

                <i class="fa fa-bars" style="font-size: 30px;"></i>

            </button>

            <a class="navbar-brand" href="index.php">
                 <img style="max-width: 160px;min-width: 130px;padding-top: 10px;" src="assets/img/SmallLogo3.png" class="logo .img-responsive" alt="logo web stranky zalozsro">
                

            </a>

        </div>

        <!-- End Header Navigation -->



        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="navbar-menu">

            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">

                <!-- <li class="scroll2"><a href="sro.php">S.R.O</a></li> -->

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >S.R.O</a>
                    <ul class="dropdown-menu" style="list-style-type: none;">
                        <li class="m-li"><a href="zalozeniesro.php">ZALOŽENIE S.R.O</a></li>
                        <li class="m-li"><a href="zmenyvsro.php">ZMENY V S.R.O</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ŽIVNOSŤ</a>
                    <ul class="dropdown-menu" style="list-style-type: none;">
                        <li class="m-li"><a href="zalozeniezivnosti.php">ZALOŽENIE ŽIVNOSTI</a></li>
                        <li class="m-li"><a href="zruseniezivnosti.php">ZRUŠENIE ŽIVNOSTI</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ĎALŠIE SLUŽBY</a>
                    <ul class="dropdown-menu" style="list-style-type: none;">
                        <li class="m-li"><a href="ready-made.php">READY-MADE</a></li>
                        <li class="m-li"><a href="virtualnesidlo.php">VIRTUÁLNE SÍDLO</a></li>
                        <li class="m-li"><a href="uzivatelvyhod.php">KONEČNÝ UŽÍVATEĽ VÝHOD</a></li>
                        <li class="m-li"><a href="vedenieuctovnictva.php">ÚČTOVNÍCTVO</a></li>
                    </ul>
                </li>

                <li><a href="index.php#clients">REFERENCIE</a></li>

                <li><a href="kontakt.php">KONTAKT</a></li>

                <!-- <li class="button-holder">
                  <li class="scroll"><a href="#clients">REFERENCIE</a></li>

                <li class="scroll2"><a href="kontakt.php" >KONTAKT</a></li>

                     <button type="button" class="btn btn-blue navbar-btn" data-toggle="modal" data-target="#SignIn">Sign in</button>

                 </li>
                 -->
            </ul>

        </div>

        <!-- /.navbar-collapse https://technext.github.io/vortex/index.html -->

    </div>

</nav>
