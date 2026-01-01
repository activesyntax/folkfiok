<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="event-info">
    <span class="theme-text-light"><i class="fa fa-calendar media-object" aria-hidden="true"></i><?php echo date("Y.m.d.", strtotime($event->date)); ?>  </span>
    <span class="theme-text-light"><i class="fa fa-map-marker media-object" aria-hidden="true"></i><?php echo $event->location ?> </span>
</div>

