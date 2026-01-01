<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>

<div class="jumbotron">
    <div class="container">

        <h1 class="text-center">Érték a múltban, érték a jelenben</h1>
        <p class="text-center">

            <a class="btn btn-primary btn-lg" href="betyarora" role="button">Interaktív betyáróra</a>
            &nbsp;
            <a class="btn btn-default btn-lg" style="font-size: 15px;" href="konyvek" role="button">Betyárvilág és népi kultúra</a>
        </p>

    </div>
</div>

<br>
<!--
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <img src="img/eloadasok-2017-totvazsony-tatabanya.jpg" class="img-responsive solid-border center-block" style="max-height: 650px;">
        </div>
    </div>
</div>
-->
<br>
<div id="about-company-home" class="container">
    <div class="row">
        <div class="col-md-4">
            <h3>Kik vagyunk?</h3>
            <p>
                Ha&shy;gyo&shy;mány&shy;tisz&shy;te&shy;lő és őr&shy;ző <a href="./kapcsolat" class="normal-link">fiatalok</a>, a&shy;kik múl&shy;tunk ér&shy;té&shy;ke&shy;it i&shy;gye&shy;kez&shy;nek át&shy;men&shy;te&shy;ni a fel&shy;nö&shy;vek&shy;vő ge&shy;ne&shy;rá&shy;ci&shy;ók szá&shy;má&shy;ra.         
            </p>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">           
            <h3>Mivel foglalkozunk?</h3>  
            <p>
                A mai vi&shy;lág kí&shy;nál&shy;ta esz&shy;kö&shy;zök se&shy;gít&shy;sé&shy;gé&shy;vel köz&shy;ve&shy;tít&shy;jük <a href="./konyvek/egy-tucat-bakonyi-betyarmese" class="normal-link">nemzeti értékeinket</a> és ha&shy;gyo&shy;má&shy;nya&shy;in&shy;kat min&shy;den kor&shy;osz&shy;tály&shy;nak, de fő&shy;ként a leg&shy;ki&shy;seb&shy;bek&shy;nek</a>. 
            </p> 
        </div>
    </div>

    <div class="row">     
        <div class="col-md-12"><img class="img-responsive center-block" src="img/folkfiok-bemutatkozas.png" alt="FolkFiok"></div>       
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3>Mik a céljaink?</h3>
            <p>
                Cé&shy;lunk, hogy a ma&shy;i em&shy;be&shy;rek, fő&shy;ként <a href="./betyarora" class="normal-link">a gyerekek</a> meg&shy;is&shy;mer&shy;jék <a href="./konyvek/tortenetek-a-falubol" class="normal-link">azt a világot</a>, a&shy;mi&shy;ben nagy&shy;szü&shy;le&shy;ink, déd&shy;szü&shy;le&shy;ink min&shy;den&shy;nap&shy;ja&shy;i&shy;kat él&shy;ték. 
            </p>

        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">           
            <h3>Mit kínálunk?</h3>
            <p>
                Iz&shy;gal&shy;mak&shy;kal és is&shy;me&shy;re&shy;tek&shy;kel te&shy;li <a href="./konyvek" class="normal-link">könyveket</a>, eh&shy;hez kap&shy;cso&shy;ló&shy;dó&shy;an több kom&shy;pe&shy;ten&shy;ci&shy;a&shy;te&shy;rü&shy;le&shy;tet fej&shy;lesz&shy;tő mun&shy;ka&shy;fü&shy;ze&shy;tet, él&shy;mé&shy;nyek&shy;ben gaz&shy;dag <a href="./betyarora" class="normal-link">interaktív foglalkozást</a>, és né&shy;hány  mind&shy;e&shy;zek&shy;re em&shy;lé&shy;kez&shy;te&shy;tő hasz&shy;nos tár&shy;gyat.     
            </p> 
        </div>
    </div>
</div>

<div id="books-on-homepage" class="page-content-stessed" ng-controller="ShoppingCartController">
    <div  class="container">
        <div class="row">
            <div class="col-md-4">

                <a href="konyvek/egy-tucat-bakonyi-betyarmese">
                    <img class="img-responsive solid-border center-block" src="img/books/thumb/egy-tucat-bakonyi-betyarmese.jpg" alt="Egy tucat bakonyi betyármese">
                </a>
                <a href="konyvek/egy-tucat-bakonyi-betyarmese" class="header-link">
                    <h3><span><?php echo $books[0]->title ?></span></h3>
                </a>
                <p>
                    <?php echo $books[0]->short_description ?>
                </p>

                <?php $this->load->view('components/book-toolbar', ["book" => $books[0], "show_only_price" => TRUE]); ?>

            </div>
            <div class="col-md-4">
                <a href="konyvek/tobb-tucat-feladat-bakonyi-betyarmesekhez">
                    <img class="img-responsive solid-border center-block" src="img/books/thumb/tobb-tucat-feladat-bakonyi-betyarmesekhez.jpg" alt="Több tucat feladat bakonyi betyármesékhez">
                </a>
                <a href="konyvek/tobb-tucat-feladat-bakonyi-betyarmesekhez" class="header-link">
                    <h3><span>Több tucat feladat bakonyi betyármesékhez</span></h3>
                </a>
                <p>
                    <?php echo $books[1]->short_description ?>
                </p>
                <?php $this->load->view('components/book-toolbar', ["book" => $books[1], "show_only_price" => TRUE]); ?>

            </div>
            <div class="col-md-4">
                <a href="konyvek/tortenetek-a-falubol">
                    <img class="img-responsive solid-border center-block" src="img/books/thumb/tortenetek-a-falubol.jpg" alt="Történetek a faluból">
                </a>
                <a href="konyvek/tortenetek-a-falubol" class="header-link">
                    <h3><span><?php echo $books[2]->title ?><br><br></span></h3>
                </a>
                <p>
                    <?php echo $books[2]->short_description ?>
                </p>
                <?php $this->load->view('components/book-toolbar', ["book" => $books[2], "show_only_price" => TRUE]); ?>

            </div>
        </div>
    </div>
</div>


<div id="book-presentation-home" class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="https://www.youtube.com/embed/60ajaKqXkLs" data-lity>
                <img  class="img-responsive" src="http://img.youtube.com/vi/60ajaKqXkLs/0.jpg">
                <div class="youtube-play"></div>
            </a>
        </div>
        <div class="col-md-8">
            <h2><a href="./esemenyek" class="header-link">Beszélgetés a szerzővel</a></h2> 
            <h4></h4>
            <div class="event-info">
                <span class="theme-text-light"><i class="fa fa-calendar media-object" aria-hidden="true"></i>2012.09.21.</span>
                <span class="theme-text-light"><i class="fa fa-map-marker media-object" aria-hidden="true"></i>Pápa, Várkastély</span>
            </div>
            <div  class="important-text">
                <p>
                    Író-olvasó találkozóval egybekötött könyvbemutatóra került sor 2012. szeptember 21-én Pápa Várkastélyában. Csatlós Melinda az <a href="konyvek/egy-tucat-bakonyi-betyarmese" class="normal-link">Egy tucat bakonyi betyármese</a> című könyvét mutatta be az érdeklődőknek.
                    Az szerzővel egykori irodalomtanára beszélgetett.
                </p>
            </div>
            <a class="btn btn-primary" href="./esemenyek" role="button">További események »</a>
        </div>  
    </div>
    <br>    <br>
    <div class="row">
        <div class="col-md-4">
            <a href="https://www.youtube.com/embed/KBPwhyd9Jpc" data-lity>
                <img  class="img-responsive" src="http://img.youtube.com/vi/KBPwhyd9Jpc/0.jpg">
                <div class="youtube-play"></div>
            </a>
        </div>
        <div class="col-md-8">
            <h2><a href="./betyarora" class="header-link">Interaktív betyáróra</a></h2> 
            <h4></h4>

            <div  class="important-text">

                <p>Általános iskolás korosztály számára interaktív betyárórák megszervezését és lebonyolítását vállaljuk.
                    A foglalkozás időtartama: <span class="readable-number">45</span> perc, mely néprajzi és népzenei bemutatót is magában foglal.
                    Pedagógia szempontból egyaránt hangsúlyt kap a magyar, a történelem és az ének-zene tantárgyi koncentráció.
                </p>
                <p>Az óra anyaga elsősorban általános iskolás korosztály számára készült, de kérésre alkalmazható más korosztályok számára is.</p>

            </div>
            <a class="btn btn-primary" href="./betyarora#betyarora-igenylese-urlap" role="button">Betyáróra igénylése »</a>
        </div>        
    </div>

</div>
