<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>FLIMOTEK</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="FLIMOTEK E-MOVIE" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <!--webfont-->
        <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Dorsa' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <!-- start menu -->
        <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/megamenu.js"></script>
        <script src="js/jquery.easydropdown.js"></script>
        <link rel="shortcut icon" href="images/favicon.ico" type="images/x-icon" />
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    </head>
    <body style="background-color:rgb(21, 57, 177)">
        <?php
        include 'connect.php';
        ?>
        <header>
            <div class="banner">
                <div class="container">
                    <div class="header_top">
                    </div>
                    <div class="header_bottom">
                        <div class="menu">
                            <ul class="megamenu skyblue">	
                                <li><a class="color7" href="contact.php">Contact</a></li> 
                                <li><a class="color7" href="inscription.php">Inscription</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="box ">
                    <div class="info">
                        <div class="card">
                            <br>
                            <div class="card-header bg-dark text-light">
                                <div class="clearfix"></div>
                            </div>
                            <?php
                            $reponse = $bdd->query("SELECT * FROM film");
                            while ($donnees = $reponse->fetch()) {
                                ?>
                                <div class="">
                                    <div class="container text-center">
                                        <div class="col-xs-2 col-md-2">
                                            <img class="img-responsive" src="image/<?= $donnees["image"] ?>" alt="prewiew">
                                        </div>
                                        <div class="col-xs-4 col-md-2">
                                            <h4 class="product-name"><strong><?= $donnees["titre"] ?></strong></h4><h4><small><?= $donnees["genre"] ?></small></h4>
                                            <h4><small><?= $donnees["format"] ?></small></h4>
                                            <h4><small><?= $donnees["prix"] ?> €</small></h4>
                                            <h4><small><?= $donnees["etat"] ?></small></h4>
                                                                                    </div>
                                        <div class="col-xs-6 col-md-6 row">
                                            <p><?= $donnees["resume"] ?></p>
                                            <div class="col-xs-6 col-md-8 col-xs-pull-5 ">
                                                <div class="col-md-5">
                                                    <a href="#" class="btn btn-primary btn-lg btn-block btn-huge">COMMANDER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </br>
                                </br>
                                </br>
                                </br>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>     
        </div>

    </body>
    <div class="copy">
        <p> &copy; 2018 LAFLEUR. All Rights Reserved | Design by NEJE</p>
    </div>
</html>