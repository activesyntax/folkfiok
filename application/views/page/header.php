<?php defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <base href="<?php echo site_url(); ?>">

        <meta property="og:url"                content="<?php echo current_url(); ?>" />
        <meta property="og:type"               content="website" />
        <meta property="og:title"              content="<?php echo (isset($og_title) ? $og_title : $title) . ' - FolkFiók' ?>" />
        <meta property="og:description"        content="<?php echo $description ?>" />
        <meta property="og:image"              content="<?php echo site_url($image_url); ?>" />
        <meta property="fb:app_id"              content="715356825288516" />
        


        <link rel="icon" type="image/png" href="img/favicon5.png">
        <title><?php echo $title . ' - FolkFiók' ?></title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <!--<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&amp;subset=latin-ext" rel="stylesheet" type="text/css">-->
        <!--<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">-->

        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Taviraj&amp;subset=latin-ext" rel="stylesheet">        
        <link href="css/components.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap-social.css" rel="stylesheet">
        <link href="css/lightbox.min.css" rel="stylesheet">
        <link href="css/lity.min.css" rel="stylesheet">





        <script src="assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-messages.min.js"></script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-route.js"></script>-->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-cookies.js"></script>-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>

        <script>
            var app = angular.module('folkfiok', ['ngMessages']);
        </script>

        <?php if (DEBUG_MODE == FALSE) : ?>
            <script type="text/javascript">
                window.smartlook || (function (d) {
                    var o = smartlook = function () {
                        o.api.push(arguments)
                    }, h = d.getElementsByTagName('head')[0];
                    var c = d.createElement('script');
                    o.api = new Array();
                    c.async = true;
                    c.type = 'text/javascript';
                    c.charset = 'utf-8';
                    c.src = '//rec.smartlook.com/recorder.js';
                    h.appendChild(c);
                })(document);
                smartlook('init', '0e5aac256c74a1c54007802e8a16f89e5d271814');
            </script>
        <?php endif; ?>
    </head>

    <body ng-app="folkfiok">

        <?php if (DEBUG_MODE == FALSE) : ?>

            <!--Google analytics-->
            <script>
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

                ga('create', 'UA-85695506-1', 'auto');
                ga('send', 'pageview');

            </script>

        <?php endif; ?>

        <!--Facebook plugin-->
        
        <div id="fb-root"></div>
        <script>
        
            window.fbAsyncInit = function() {
              FB.init({
                appId      : '715356825288516',
                xfbml      : true,
                version    : 'v2.8'
              });
            };

            (function(d, s, id){
               var js, fjs = d.getElementsByTagName(s)[0];
               if (d.getElementById(id)) {return;}
               js = d.createElement(s); js.id = id;
               js.src = "//connect.facebook.net/hu_HU/sdk.js";
               fjs.parentNode.insertBefore(js, fjs);
             }(document, 'script', 'facebook-jssdk'));
          </script>
    


        <div ng-controller="ShoppingCartController">
            <nav class="navbar navbar-default navbar-fixed-top" style="border-top: 1px solid #ddd;">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Menü</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="./" id="logo-image"><img src="img/logo.png" alt="FolkFiók"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right">

                        <ul class="nav navbar-nav">
                            <?php $current_view = $this->uri->segment(1) == '' ? 'kezdolap' : $this->uri->segment(1); ?> 

                            <li<?php Navigation::print_itemstatus_attribute("kezdolap", $current_view); ?>><a href="./">Kezdőlap</a></li>                          
                            <li<?php Navigation::print_itemstatus_attribute("konyvek", $current_view); ?>><a href="konyvek">Könyvek</a></li>            
                            <li<?php Navigation::print_itemstatus_attribute("betyarora", $current_view); ?>><a href="betyarora">Betyáróra</a></li> 
                            <li<?php Navigation::print_itemstatus_attribute("letoltes", $current_view); ?>><a href="letoltes">Letöltés</a></li>
                            <li<?php Navigation::print_itemstatus_attribute("esemenyek", $current_view); ?>><a href="esemenyek">Események</a></li>                        
                            <li<?php Navigation::print_itemstatus_attribute("kapcsolat", $current_view); ?>><a href="kapcsolat">Kapcsolat</a></li>

                        </ul>
                        <div class="pull-right" style="margin: 10px 0px 0px 10px;"
                             ng-controller="ShoppingCartController"  
                             ng-init="setCurrencyCode('<?php echo Shopping::currencyCode(); ?>')">
                            <button class="btn btn-primary" ng-click="showCart()" id="btn-shopping">
                                <span class="glyphicon glyphicon-shopping-cart"></span> 
                                <!--<i class="fa fa-shopping-cart"></i>-->
                                &nbsp;Kosár
<!--                                <span class="visible-md-inline visible-lg-inline">&nbsp;Kosár</span>-->
                                <span class="readable-number" ng-show="!isEmpty()" ng-cloak>({{totalQuantity()}} db)</span>
                            </button>                         
                        </div>
                    </div><!--/.navbar-collapse -->
                </div>
            </nav>


            <div class="modal shopping-cart" tabindex="-1" role="dialog" id="shopping-cart-dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Bezár"><span aria-hidden="true">&times;</span></button>
                            <h3 class="modal-title"> 
                                <!--<span class="glyphicon glyphicon-shopping-cart"></span>--> 
                                Kosár</h3>                           
                        </div>
                        <div class="modal-body">                          
                            <?php $this->load->view('components/shopping-cart-content'); ?>
                        </div>
                        <div class="modal-footer">
                            <div class="pull-left">
                                <button type="button" class="btn btn-default" ng-click="emptyCart()" ng-disabled="isEmpty()">Kosár kiürítése</button> 
                            </div>
                            <div class="pull-right">
                                <button type="button" class="btn btn-default" data-dismiss="modal" ng-disabled="false">Tovább válogatok</button>                             
                                <button type="button" class="btn btn-primary" ng-click="showOrderDialog()" ng-disabled="isEmpty()">Rendelés</button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>

        <div class="modal fade error-dialog" tabindex="-1" role="dialog" id="error-dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title">Hiba</h3> 
                    </div>
                    <div class="modal-body">           

                        <p class="alert alert-danger" role="alert">Rendszerünkben sajnos műszaki hiba történt. <br>A kellemetlenségért szíves elnézését kérjük.</p>
                        <p class="alert alert-success" role="alert">Megrendelését ill. kérését jelezheti felénk az alábbi elérhetőségek valamelyikén.</p>
                        <?php $this->load->view('components/contact-list'); ?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Rendben</button>                            
                    </div>
                </div>
            </div>
        </div>


