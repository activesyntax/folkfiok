<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row galery">
    <div>
        <?php for ($i = 1; $i <= $image_count; $i++): ?>
            <div class="col-md-2">

                <a href="<?php echo $path.'/'.$name . $i . '.jpg'; ?>" data-lightbox="<?php echo $name ?>">
                    <img class="img-responsive solid-border pull-left" src="<?php echo $path.'/thumb/'.$name . $i . '.jpg'; ?>" alt="">
                </a>
            </div>
        <?php endfor; ?>

    </div>
</div>
