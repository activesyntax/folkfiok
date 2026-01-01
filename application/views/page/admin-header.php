<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <base href="<?php echo site_url(); ?>">
        <link rel="icon" href="favicon.ico">

        <title>Irányítópult</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/dashboard.css" rel="stylesheet">

         <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Taviraj&amp;subset=latin-ext" rel="stylesheet">        
       
        <link href="css/components.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <?php

    // TODO: move to correct location
    function shippingCosts($totalQuantity) {
        $shippingCostPerBook = 150;
        if ($totalQuantity % 2 === 0) {
            return $totalQuantity * $shippingCostPerBook;
        } else {
            return ($totalQuantity + 1) * $shippingCostPerBook;
        }
    }
    ?>


    <body>

        <nav class="navbar  navbar-fixed-top" style="background-color: white; border-bottom: 1px solid #aaa;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Menü</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./" id="logo-image"><img src="img/logo.png" alt="FolkFiók"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">







                    <!--                    <ul class="nav navbar-nav navbar-right">
                                            <li><a href="#">Dashboard</a></li>
                                            <li><a href="#">Settings</a></li>
                                            <li><a href="#">Profile</a></li>
                                            <li><a href="#">Help</a></li>
                                        </ul>-->
                    <form class="navbar-form navbar-right">
                        <div>
                            <div class="pull-right">
                                <a href="#">

                                    <img class="media-object" src="<?php echo $user_profile['picture']; ?>" height="40" alt="<?php echo @$user_profile['name']; ?>">
                                </a>
                            </div>
                            <div class="pull-right" style="padding-right: 10px; padding-top: 5px;">
                                <h5 class="media-heading"><?php echo @$user_profile['name']; ?></h5>
                                <p><a href="<?php echo site_url('admin/logout'); ?>" class="normal-link">Kijelentkezés</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li><a href="admin/dashboard" style="text-transform: uppercase; color: #555;">Rendelések <span class="sr-only">(current)</span></a></li>

                        <li><a href="#" style="text-transform: uppercase; color: #555;">Betyáróra igénylések</a></li>
                        <li><a href="https://db101.websupport.sk" target="_blank" style="text-transform: uppercase; color: #555;">Adatbázis</a></li>
                        <li><a href="http://webftp.folkfiok.hu" target="_blank" style="text-transform: uppercase; color: #555;">FTP</a></li>
                        <li><a href="https://posta.websupport.sk" target="_blank" style="text-transform: uppercase; color: #555;">WebMail</a></li>
                        <li><a href="https://www.smartlook.com" target="_blank" style="text-transform: uppercase; color: #555;">Smart Look</a></li>
                        <li><a href="https://analytics.google.com" target="_blank" style="text-transform: uppercase; color: #555;">Google Analytics</a></li>



                    </ul>

                </div>