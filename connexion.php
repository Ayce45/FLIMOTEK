<?php
session_start();
include 'connect.php';
?>
<!DOCTYPE HTML>
<html style="background-color:rgb(0, 53, 106)">
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
                                <li><a class="color7" href="connexion.php">Connexion</a></li>
                                <li><a class="color7" href="inscription.php">Inscription</a></li>                                
                            </ul>
                        </div>
                    </div>
                </div>
        </header>
        <div class="container">
            <div class="row" style="margin-right: 150px; margin-left: 150px;">
                <div class="box">
                    <div class="info">
                        <div class="card">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-2">
                                        <div class="form-login">
                                            <h4>Nous saluons votre retour.</h4>
                                            </br>
                                            <form action="ajax/login.php" role="form" method="POST">
                                                <input name="username" type="text" class="form-control chat-input" placeholder="Nom d'utilisateur" />
                                            </br>
                                            <input name="password" type="password" class="form-control chat-input" placeholder="Mot de passe" />
                                            </br>
                                            <div class="wrapper">
                                                <input style="font-size: 17px;" class="btn btn-lg btn-success btn-block" type="submit">
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>