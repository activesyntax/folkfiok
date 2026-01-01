<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row hidden">
    <div class="col-lg-12">
        <div>
            <?php for ($i = 1; $i <= $book->preview_image_count; $i++): ?>

                <a href="<?php echo 'img/books/'.$book->id . '-' . $i.'.jpg'; ?>" data-lightbox="<?php echo $book->id; ?>"></a>

            <?php endfor; ?>
        </div>
    </div>
</div>
