<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    

<div class="spacer"></div>

<div class="media">
    <div class="media-left">
        <a href="<?php echo 'img/esemenyek/' . $event->id . '.jpg'; ?>" data-lightbox="<?php echo $event->id; ?>">
            <img id='<?php echo $event->id; ?>-img' class="media-object solid-border" src="<?php echo 'img/esemenyek/'.$event->id.'.jpg'; ?>" alt="<?php echo $event->title; ?>">
        </a>

    

      
    </div>
    <div class="media-body">
        <h2 class="media-heading"><?php echo $event->title; ?></h2>   
        <?php $this->load->view('components/event-info', ["event" => $event]); ?> 
        <?php echo $event->short_description;  ?>
        <br><br>
        <?php echo $event->details; ?>                       
             

    </div>
</div>

