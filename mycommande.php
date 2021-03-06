<?php
include 'connect.php';
session_start();
?>

<!DOCTYPE HTML>
<html  style="background-color:rgb(0, 53, 106)">
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
    <body style="background-color:rgb(0, 53, 106)">
        <header>
            <div class="banner">
                <div class="container">
                    <div class="header_top">
                    </div>
                    <div class="header_bottom">
                        <div class="logo">
                            <h1><a href="./"><span class="m_1">F</span>LIMOTEK</a></h1>
                        </div>
                        <div class="menu">
                           <ul class="megamenu skyblue">
                                <?php
                                if (isset($_SESSION['auth'])) {
                                    ?>
                                    <li><a class="color7" ><?= $_SESSION['auth'] ?></a></li>
                                    <li><a class="color7" href="logout.php">Deconnexion</a></li>
                                    <li><a class="color7" href="myCommande.php">mes commandes</a></li>

                                    <?php
                                } else {
                                    ?>
                                    <li><a class = "color7" href = "connexion.php">Connexion</a></li>
                                    <?php
                                }
                                ?>

                                <li><a class="color7" href="inscription.php">Inscription</a></li>
                                <li><a class="color7" href="mentions.php">mentions legales</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <div class="container">
            <div class="row">
                <div class="box ">
                    <div class="info">
                        <div class="table-scrol">
                            </br>
                            <h1 align="center">Commandes de <?= $_SESSION['auth'] ?></h1>
                            </br>

                            <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


                                <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
                                    <thead>
                                        <tr>
                                            <th>Nom du film</th>
                                            <th>Date</th>
                                            <th style="width:5%"></th>
                                        </tr>
                                    </thead>

                                    <?php
                                    $user_id = $_SESSION['auth'];
                                    $reponse = $bdd->query("SELECT * FROM commande WHERE user_id='$user_id'");
                                    while ($donnees = $reponse->fetch()) {
                                        //var_dump($donnees);
                                    $film_id  = $donnees["film_id"];                                    
                                    $reponse1 = $bdd->query("SELECT * FROM FILM WHERE film_num='$film_id' ");
                                     while ($donnees1 = $reponse1->fetch()) {
                                        ?>                               
                                        <tr>
                                            <td><?= $donnees1["film_titre"] ?></td>
                                            <td><?= $donnees["commande_date"] ?></td>
                                            <td> <button class="btn btn-danger btn-sm"  onclick="window.location.href = 'ajax/deleteCommande.php?id=<?= $donnees["commande_date"] ?>'" ><i class="fa fa-trash-o"></i></button>	 
                                            <?php
                                    }}
                                        ?>
                                    </tr>
                                </table>
                            </div>
                        </div>                   
                    </div>
                </div>
            </div>     
        </div>

    </body>

</html>