<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="modal fade" tabindex="-1" role="dialog" id="aszf-dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Vásárlási feltételek</h3>                           
            </div>
            <div class="modal-body aszf" >           
              <?php $this->load->view('components/aszf'); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Bezár</button>                            
            </div>
        </div>
    </div>
</div>

