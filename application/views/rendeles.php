<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container page-container">

    <div class="page-content row" ng-controller="ShoppingCartController">

        <div class="row">
            <div class="col-md-12">  
                <h1>Rendelés</h1>
            </div>
        </div>


        <form name="orderForm" ng-submit="add_request()" class="form-horizontal" novalidate>
            <!--<legend>A megrendelő adatai</legend>-->
            <div class="row">
                <div class="col-md-4" >            
                     <!--<i class="fa fa-user"></i>-->

                    <h2 style="padding: 40px 0px 20px 0px;">A megrendelő adatai</h2>

                    <?php $this->load->view('components/order-form'); ?>  

                </div>

                <div class="col-md-7 col-md-offset-1"  style=" padding-top: 23px;">
                    <div class="right-nav-box" style="border-radius: 10px;">
                        <h2 class="modal-title"> 
                            <!--<span class="glyphicon glyphicon-shopping-cart"></span>--> 
                            Kosár</h2>                           

                        <?php $this->load->view('components/shopping-cart-content'); ?>


                        <div class="row" style="border-top: 1px solid #ccc; margin: 0px 20px 0px 20px; padding-top: 15px;">
                            <div class="col-md-8" style="padding: 0px;">
                                <p>
                                    <label class="checkbox-inline"><input type="checkbox" checked ng-model="termsOfPurchase">Elfogadom a <a href="#" onclick="javascript: $('#aszf-dialog').modal('show'); return false;" class="normal-link">vásárlási feltételeket</a>.</label>
                                </p>
                            </div>
                            <div class="col-md-4 text-right" style="padding: 0px;">
                                <button type="button" class="btn btn-primary btn-lg" ng-click="order('<?php echo Shopping::currencyCode(); ?>')" ng-disabled="!termsOfPurchase || isEmpty()">Megrendelem</button> 
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            
            <?php $this->load->view('components/aszf-dialog'); ?>
            
        </form>


    </div>
</div>
