<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<p>Általános iskolás korosztály számára interaktív betyárórák megszervezését és lebonyolítását vállaljuk.</p>
<ul>
    <li>foglalkozás időtartama: <span class="readable-number">45</span> perc</li>
    <li>néprajzi és népzenei bemutatóval</li>
    <li>magyar, történelem, ének-zene tantárgyi koncentráció</li>
</ul>
<p>Az óra anyaga elsősorban általános iskolás korosztály számára készült, de kérésre alkalmazható más korosztályok számára is.</p>


<div class="row video-on-the-page">
    <div class="col-md-8 col-md-offset-2 text-center">
        <!--        <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KBPwhyd9Jpc" allowfullscreen="allowfullscreen"></iframe>
                </div>-->
        <a href="https://www.youtube.com/embed/KBPwhyd9Jpc" data-lity>
            <img  class="img-responsive" src="http://img.youtube.com/vi/KBPwhyd9Jpc/0.jpg">

            <div class="youtube-play"></div>
        </a>

        <p class="img-caption">Interaktív betyáróra Isaszegen (videófelvétel, 11 perc)</p>
    </div>

</div>

<p><strong>További infromáció és igény jelzése:</strong></p> 
<div style="margin-left: 30px;">
    <div class="media" style="padding-bottom: 5px;">
        <div class="media-left" style="padding-right: 3px;">
            <i class="fa fa-file-text-o media-object" aria-hidden="true"></i>
        </div>
        <div class="media-body">
            <a href="betyarora#betyarora-igenylese-urlap"  class="normal-link">Igénylési űrlap kitöltése</a>               
        </div>
    </div>
    <?php $this->load->view('components/contact-list'); ?> 
</div>
<!--<hr>-->
<br><br>
<h2 >Galéria</h2>
<p>Galériánkban az eddig megvalósult betyárórákon készült felvételek láthatók.</p>
<?php $this->load->view('components/galery', ["image_count" => 7, "name" => "betyarora", "path" => "img/betyarora"]); ?>                     
<?php //$this->load->view('components/galery', ["image_count" => 6, "name" => "sobritol-rozsa-sandorig", "path" => "img/esemenyek/sobritol-rozsa-sandorig"] ); ?>                     
<?php //$this->load->view('components/galery', ["image_count" => 13, "name" => "betyarkviz", "path" => "img/esemenyek/betyarkviz"] ); ?>                     

<!--<hr>-->

<a id="betyarora-igenylese-urlap"></a>
<br>
<br>
<br>
<br>
<!--<hr>-->
<h2>Betyáróra igénylése</h2>
<p>Az alábbi űrlap kitöltésével jelezheti igényét a betyáróra megszervezése iránt, vagy kapcsolatba léphet velünk további információkért.</p>
<br>



<div ng-controller="BetyaroraController">   
    <form name="requestForm" id="requestForm" ng-submit="add_request()" class="form-horizontal" novalidate>
        <div class="form-group">
            <!--<label for="name" class="col-sm-2 control-label">Név:</label>-->

            <div class="col-sm-7">
                <input type="text" name="name" ng-model="name"  
                       class="form-control {{ showValidationMessages ? 'ng-dirty' : '' }}"  
                       placeholder="Név" 
                       required
                       ng-maxlength="50">                                
            </div>
            <div class="col-sm-5">
                <div ng-messages="requestForm.name.$error" class="error-message" role="alert" 
                     ng-if="showValidationMessages || requestForm.name.$dirty" 
                     ng-cloak>
                    <span ng-message="required">Kérem, írja be a nevét!</span>
                    <span ng-message="maxlength">A megadott név túl hosszú.</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <!--<label for="contact" class="col-sm-2 control-label">Elérhetőség:</label>-->
            <div class="col-sm-7">
                <input type="email" name="email" ng-model="email"  
                       class="form-control {{ showValidationMessages ? 'ng-dirty' : '' }}"  
                       placeholder="Email cím" 
                       required>
            </div>
            <div class="col-sm-5">
                <div ng-messages="requestForm.email.$error" class="error-message" role="alert" 
                     ng-if="showValidationMessages || requestForm.email.$dirty" 
                     ng-cloak>
                    <span ng-message="required">Kérem, írja be email címét!</span>
                    <span ng-message="email">A megadott email cím helytelen.</span>
                    <span ng-message="maxlength">A megadott email cím túl hosszú.</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <!--<label for="message" class="col-sm-2 control-label">Üzenet:</label>-->
            <div class="col-sm-7">
                <textarea name="message" ng-model="message" 
                          class="form-control {{ showValidationMessages ? 'ng-dirty' : '' }}"  
                          rows="7" 
                          placeholder="Üzenet" 
                          ng-maxlength="2000" 
                          required></textarea>
            </div>
            <div class="col-sm-5">
                <div ng-messages="requestForm.message.$error" class="error-message" role="alert" 
                     ng-if="showValidationMessages || requestForm.message.$dirty" ng-cloak>
                    <span ng-message="required">Kérem, írja be üzenetét!</span>
                    <span ng-message="maxlength">Az üzenet szövege túl hosszú.</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-7">
                <button type="submit" class="btn btn-primary">
                    Betyáróra igénylése
                </button>
            </div>
        </div>
    </form>

    <div class="modal fade success-dialog" tabindex="-1" role="dialog" id="add-request-success">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Bezár"><span aria-hidden="true">&times;</span></button>

                </div>
                <div class="modal-body text-justify">           
                    <h4><strong class="solid-line" ng-cloak>Kedves {{name}}!</strong></h4>  
                    <br> 
                    <p>Köszönjük üzenetét! Hamarosan kapcsolatba lépünk Önnel a <span id="requester-email" ng-cloak>{{email}}</span> email címen keresztül.</p>
                
                    <div class="text-center">
                        <img src="img/folkfiok.png" ><br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Rendben, köszönöm!</button>                            
                </div>
            </div>
        </div>
    </div>

</div>

<script src="js/betyarora.js"></script>


