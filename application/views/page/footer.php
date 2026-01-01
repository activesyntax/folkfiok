<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 link-group">

                <h5><a href="kezdolap">FolkFiók</a></h5>
                <ul>
                    <li><a href="kapcsolat">Elérhetőségek</a></li> 
                    <li><a href="fizetes-es-szallitas">Fizetés és szállítás</a></li>               
                    <!--                    <li><a href="#">Impresszum</a></li>
                                                            <li><a href="#">Partnereink</a></li>-->
                    <li><a href="szerzoi-jogok">Szerzői jogok</a></li>
                </ul> 


                <br>   


                <h5><a href="letoltes">Letöltés</a></h5>
                <ul>
                    <li><a href="data/letoltes/savanyu-joska-es-a-tizenket-bakonyi-betyar.pdf" target="_blank">Betyármese Savanyú Jóskáról</a></li>
                     <li><a href="data/letoltes/tobb-tucat-feladat-bakonyi-betyarmesekhez.pdf" target="_blank">Mintaoldalak a munkafüzetből</a></li>
                   
                    <li><a href="data/letoltes/a-pakasz.pdf" target="_blank">A pákász</a></li>
                    <!--                    <li><a href="#">Hangoskönyv</a></li>
                                        <li><a href="#">Mobil alkalmazás</a></li>-->
                </ul>
            </div>


            <div class="col-md-3 link-group">
                <h5><a href="betyarora">Betyáróra</a></h5>
                <ul>
                    <li><a href="betyarora">Általános információk</a></li> 
                    <li><a href="https://www.youtube.com/embed/KBPwhyd9Jpc" data-lity>Bemutató videó</a></li>               
                    <li><a href="betyarora#betyarora-igenylese-urlap">Betyáróra igénylése</a></li>

                </ul> 
                <br>
                <h5><a href="konyvek">Könyvek</a></h5>
                <ul>
                    <li><a href="konyvek/egy-tucat-bakonyi-betyarmese">Egy tucat bakonyi betyármese</a></li>                    
                     <li><a href="konyvek/tobb-tucat-feladat-bakonyi-betyarmesekhez">Munkafüzet a betyármesékhez</a></li>
                    <li><a href="konyvek/tortenetek-a-falubol">Történetek a faluból</a></li>

                </ul>



            </div>

            <div class="col-md-3 link-group">           
                <h5><a href="esemenyek">Események</a></h5>
                <ul>
                    <li><a href="esemenyek/sobri-rajzpalyazat">Sobri-rajzpályázat</a></li>
                    <li><a href="esemenyek/interaktiv-betyarorak">Interaktív betyárórák</a></li>
                    <li><a href="esemenyek/konyvbemutato-papan">Író-olvasó találkozók</a></li>
                    <li><a href="esemenyek/betyarmesek-a-szinpadon">Betyármesé a színpadonk</a>
                   <li><a href="esemenyek/interaktiv-neprajzorak">Interaktív néprajzórák</a></li>
                    <!--<li><a href="#">Néprajzkurzus</a></li>-->
                </ul>
            </div>

            <div class="col-md-3 link-group">           
                <h5 style="margin-bottom: 15px;" ><a href="kapcsolat">Kapcsolat</a></h5>
                <?php $this->load->view('components/contact-list'); ?> 
                <br>
                <!--<h5>Közösségi média</h5>-->
                <div class="footer-social-icons">

                    <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/Folkfiók-802035689899848" target="_blank"><span class="fa fa-facebook"></span></a>
                    <a class="btn btn-social-icon btn-danger" href="https://www.youtube.com/channel/UC08qhk5HM7TNhNr9AHe5NXg" target="_blank"><span class="fa fa-youtube"></span></a>
                    <a class="btn btn-social-icon btn-twitter" href="https://twitter.com/FolkFiok" target="_blank"><span class="fa fa-twitter"></span></a>
<!--                    <a class="btn btn-social-icon btn-google"><span class="fa fa-google-plus"></span></a>
                    <a class="btn btn-social-icon btn-soundcloud"><span class="fa fa-soundcloud"></span></a>
                    <a class="btn btn-social-icon btn-vimeo"><span class="fa fa-vimeo"></span></a>-->
                </div>

            </div>
         
        </div> 
    </div>        
</footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="js/lightbox.min.js"></script>
<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'albumLabel': "Kép %1/%2"
    });
</script>
<script src="js/lity.min.js"></script>
<script src="js/shoppingcart.js"></script>
</body>
</html>