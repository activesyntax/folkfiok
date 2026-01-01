<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="row">
    <div class="col-md-12">

        <?php if (isset($show_only_price) && $show_only_price) : ?>
            <div class="text-center"> 
                <?php $this->load->view('components/price'); ?>
            </div> 
        <?php else : ?>


            <div class="pull-left">                              


                <?php if (isset($show_details_button) && $show_details_button) : ?>
                    <a href="<?php echo 'konyvek/' . $book->id; ?>" class="btn btn-default" role="button">                 
                        Részletes ismertető <i class="fa fa-angle-double-right" aria-hidden="true" style="margin-right: 0px;" ></i>
                    </a> 

                <?php else : ?>
                <ol class="breadcrumb">
                        <li  style="vertical-align: top;"><a href="kezdolap"><span class="glyphicon glyphicon-home theme-color-dark" aria-hidden="true"></span></a></li>
                        <li style="vertical-align: top;"><a href="konyvek">Könyvek</a></li>
                        <li class="active" > <span style="display: inline-block; max-width: 300px; text-align: left; vertical-align: top;"><?php echo $book->title; ?></span></li>
                    </ol> 
                <?php endif; ?>

            </div>


            <div class="pull-right"> 

                <?php $this->load->view('components/price'); ?>

            </div> 
        <?php endif; ?>
    </div>
</div>

