<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<div >



    <table class="table shopping-cart-table">
        <thead>
            <tr>
                <th colspan="2">Termék</th>      
                <th class="text-center">Mennyiség</th>
                <th class="text-right">Ár&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th class="text-center">&nbsp;</th>
            </tr>
        </thead>

        <tr ng-repeat="item in cart track by $index"  ng-class-even="'alt'"> 

            <td style="max-width: 65px;">
                <a  ng-href="konyvek/{{item.productId}}" target="_blank">
                    <img ng-src="{{item.productImage}}" alt="{{item.title}}">
                </a>
            </td>
            <td style="vertical-align: middle;  padding-left: 20px; text-align: left;">

                <a  ng-href="konyvek/{{item.productId}}" class="secondary-link" target="_blank">{{item.title}}</a><br>
                <span class="theme-text-light italic" ng-cloak>Szerző: {{item.author}}</span>
            </td>


            <td class="text-center" style="vertical-align: middle;">
                <a href ng-click="decreaseProductQuantity(item.productId)"><i class="fa fa-minus-square-o theme-text-light" aria-hidden="true" style="margin-right: 0px"></i></a>
                <span class="readable-number" ng-cloak>&nbsp;{{item.quantity}} db&nbsp;</span>
                <a href ng-click="increaseProductQuantity(item.productId)"><i class="fa fa-plus-square-o theme-text-light" aria-hidden="true" style="margin-right: 0px"></i></a>
            </td>
            <td class="text-right" style="vertical-align: middle;"><span class="readable-number" ng-cloak>{{item.price * item.quantity <?php if(Shopping::currencyCode() == 'EUR') { echo ' | number : 2';}  ?>}}&nbsp;<?php echo Shopping::currency(); ?></span></td>
            <td class="text-center" style="vertical-align: middle;">
                <a href ng-click="removeProduct(item.productId)">
                    <i class="fa fa-times theme-color-red" aria-hidden="true" style="margin-right: 0px"></i>
                </a>
            </td> 
        </tr>
        <tr ng-show="isEmpty()">
            <td colspan="4" class="text-center" style="padding: 30px 0px 30px 0px;">
                <p><strong>Az Ön kosara még üres.</strong></p>
                <p>Válogasson <a href="./konyvek" class="normal-link">betyáros és néprajzi könyveink</a> között!</p>
            </td>
        </tr>
        <tr>
            <td colspan="3" class="text-right" style="line-height: 1.8">
                Postaköltség:<br>
                <strong>Összesen:</strong>
            </td>
            <td class="text-right" style="line-height: 1.8"> 
                <span class="readable-number" ng-cloak>
                     {{ shippingCosts('<?php echo Shopping::currencyCode(); ?>') <?php if(Shopping::currencyCode() == 'EUR') { echo ' | number : 2';}  ?>}}&nbsp;<?php echo Shopping::currency(); ?><br>
                    {{totalAmount('<?php echo Shopping::currencyCode(); ?>') <?php if(Shopping::currencyCode() == 'EUR') { echo ' | number : 2';}  ?> }}&nbsp;<?php echo Shopping::currency(); ?>
                </span>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>

</div>

