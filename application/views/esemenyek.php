<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="spacer"></div>

<?php foreach ($events as $event) : ?>


    <div class="media">
        <div class="media-left">
            <a href="<?php echo 'img/esemenyek/' . $event->id . '.jpg'; ?>" data-lightbox=" <?php echo $event->id; ?>">
                <img id='egy-tucat-bakonyi-betyarmese-img' class="media-object solid-border" src="<?php echo 'img/esemenyek/' . $event->id . '.jpg'; ?>" alt="<?php echo $event->title; ?>">
            </a>
        </div>
        <div class="media-body">
            <h2 class="media-heading"><a href="<?php echo 'esemenyek/' . $event->id; ?>" class="header-link"><?php echo $event->title; ?></a></h2>

             <?php $this->load->view('components/event-info', ["event" => $event]); ?> 
                     

            <p>
                <?php echo $event->short_description; ?>
            </p>        
            <div> 

                <span><a class="btn btn-primary" href="<?php echo 'esemenyek/' . $event->id; ?>" role="button">Részletek <i class="fa fa-angle-double-right" style="margin-right: 0px;"></i></a></span>                            
            </div>  
        </div>
    </div>
    <hr>    


<?php endforeach; ?>