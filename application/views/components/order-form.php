<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<div class="form-group">
    <!--<label for="name" class="col-md-3 control-label">Név</label>-->

    <div class="col-md-12">
        <input type="text" name="customer_name" ng-model="customer_name"  
               class="form-control {{ showValidationMessages ? 'ng-dirty' : '' }}"  
               placeholder="Név" 
               required
               ng-maxlength="50">                                
    </div>
    <div class="col-md-12">
        <div ng-messages="orderForm.customer_name.$error" class="error-message" role="alert" 
             ng-if="showValidationMessages || orderForm.customer_name.$dirty" 
             ng-cloak>
            <span ng-message="required">Kérem, írja be a nevét!</span>
            <span ng-message="maxlength">A megadott név túl hosszú.</span>
        </div>
    </div>
</div>
<div class="form-group">
    <!--<label for="contact" class="col-md-3 control-label">Email cím</label>-->
    <div class="col-md-12">
        <input type="email" name="customer_email" ng-model="customer_email"  
               class="form-control {{ showValidationMessages ? 'ng-dirty' : '' }}"  
               placeholder="Email cím" 
               required>
    </div>
    <div class="col-md-12">
        <div ng-messages="orderForm.customer_email.$error" class="error-message" role="alert" 
             ng-if="showValidationMessages || orderForm.customer_email.$dirty" 
             ng-cloak>
            <span ng-message="required">Kérem, írja be email címét!</span>
            <span ng-message="email">A megadott email cím helytelen.</span>
            <span ng-message="maxlength">A megadott email cím túl hosszú.</span>
        </div>
    </div>
</div>
<div class="form-group">
    <!--<label for="ship_address" class="col-md-3 control-label">Postázási cím</label>-->
    <div class="col-md-12">
        <textarea name="ship_address" ng-model="ship_address" 
                  class="form-control {{ showValidationMessages ? 'ng-dirty' : '' }}"  
                  rows="4" 
                  placeholder="Postázási cím" 
                  ng-maxlength="2000" 
                  required></textarea>
    </div>
    <div class="col-md-12">
        <div ng-messages="orderForm.ship_address.$error" class="error-message" role="alert" 
             ng-if="showValidationMessages || orderForm.ship_address.$dirty" 
             ng-cloak>
            <span ng-message="required">Kérem, írja be a postázási címet!</span>
            <span ng-message="maxlength">Az cím túl hosszú.</span>
        </div>
    </div>
</div>

<div class="form-group">
    <!--<label class="col-md-4 control-label" for="selectbasic">Fizet</label>-->
    <div class="col-md-12">
        <select id="selectbasic" name="selectbasic" class="form-control" ng-model="payMethod.name">
            <option value="bank">Banki átutalással szeretnék fizetni</option>
            <!--<option value="post">Postai utánvéttel kérem a küldeményt</option>-->
        </select>
        <!--<br>-->
        <div class="well well-sm media"  ng-show="payMethod.name === 'bank'" style="padding-top: 20px;">


            <div class="media-left" >
                <i class="fa fa-info-circle fa-2x theme-color-light" aria-hidden="true" style="padding-top: 5px;"></i>
            </div>
            <div class="media-body">
                   <strong>Számlaszám:</strong><br>
                   <p>
                <?php if(Shopping::currencyCode() != 'EUR') : ?>
                    <span class="readable-number">11600006-00000000-50900479</span><br><br>

                    <strong>IBAN:</strong><br>
                    <span class="readable-number">HU24116000060000000050900479</span>
                    <span class="readable-number">SWIFT/BIC kód: GIBAHUHB</span><br>
                    ERSTE Bank Hungary Zrt.
                    
                <?php else : ?>
                
                  <span class="readable-number">11898784/5200<br><br>
                      
                    <strong>IBAN:</strong><br>
                    <span class="readable-number">SK9052000000000011898784</span>
                    <span class="readable-number">SWIFT/BIC kód: OTPVSKBX</span><br>
                    OTP Banka Slovensko a.s.
                              
                <?php endif ?>
                     </p>
              
                
                
                <p class="theme-text-light" style="padding-right: 12px;">
                    Kér&shy;jük, hogy a <strong>ren&shy;de&shy;lés le&shy;a&shy;dá&shy;sa u&shy;tán</strong> u&shy;tal&shy;ja át meg&shy;fe&shy;le&shy;lő össze&shy;get a fen&shy;ti bank&shy;szám&shy;lá&shy;ra, hogy mi&shy;ha&shy;ma&shy;rabb pos&shy;táz&shy;has&shy;suk Ön&shy;nek a meg&shy;ren&shy;delt ter&shy;mé&shy;ke&shy;ket.
                     <a href="fizetes-es-szallitas" target="_blank" class="normal-link">További információk >></a>
                </p>
            </div>
        </div>

        <div class="well well-sm media" ng-show="payMethod.name === 'post'"> 
            <div class="media-left media-middle">
                <i class="fa fa-info-circle fa-2x theme-color-light" aria-hidden="true"></i>
            </div>
            <div class="media-body" style="padding-top: 5px;">
                Az utánvét többletköltsége .    
            </div>

        </div>
    </div>
</div>

<div class="modal fade success-dialog" tabindex="-1" role="dialog" id="order-success-dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body text-justify">           
                <h4><strong class="solid-line" ng-cloak>Kedves {{customer_name}}!</strong></h4>  
                <br> 

                <p>Ön <strong class="readable-number" ng-cloak>{{totalAmount('<?php echo Shopping::currencyCode(); ?>') <?php if(Shopping::currencyCode() == 'EUR') { echo ' | number : 2';}  ?>}} <?php echo Shopping::currency(); ?></strong> értékben rendelt termékeket. Kérjük, utalja át ezt az összeget az alábbi számlaszámra:
                </p>
                <ul>
                    <li>Számlaszám: <span class="readable-number">11600006-00000000-50900479</span></li>
                    <li>IBAN: <span class="readable-number">HU24116000060000000050900479</span></li> 
                    <li>SWIFT/BIC kód: GIBAHUHB</li>
                </ul>

                <br>
                <p>
                    A megrendelt termékeket haladéktalanul postázzuk Önnek, amint megérkezett számlánkra a termékek díja.
                    A megadott email címen (<strong ng-cloak>{{customer_email}}</strong>) értesítjük Önt megrendelése aktuális állapotáról.
                </p>
                <p>

                </p>
                <p>Köszönjük, hogy nálunk vásárolt!</p>

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
