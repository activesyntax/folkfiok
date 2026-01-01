<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('components/toc-' . $book->id); ?>      

<div class="spacer"></div>

<div class="media book" ng-controller="ShoppingCartController">
    <div class="media-left">
        <a href="<?php echo 'img/books/' . $book->id . '.jpg'; ?>" data-lightbox="<?php echo $book->id; ?>">
            <img id='<?php echo $book->id; ?>-img' class="media-object solid-border" src="<?php echo 'img/books/thumb/' . $book->id . '.jpg'; ?>" alt="<?php echo $book->title; ?>">
        </a>

        <br>

        <div class="link-group">
            <ul class="list-unstyled">
                <?php if ($book->id !== 'tobb-tucat-feladat-bakonyi-betyarmesekhez') : ?>

                    <li style="border-bottom: none;">
                        <i class="fa fa-bookmark theme-color-light shadow" aria-hidden="true"></i><a role="button" data-toggle="modal" data-target="#<?php echo $book->id; ?>-toc">Tartalom</a>
                    </li>

                <?php endif; ?>
                <li>
                    <i class="fa fa-bookmark theme-color-light shadow" aria-hidden="true"></i>
                    <a href="#" onclick="($('#<?php echo $book->id; ?>-img')).trigger('click'); return false;">
                        Lapozz bele!
                    </a> 
                </li>
            </ul>
        </div>
    </div>
    <div class="media-body">
        <h2 class="media-heading"><?php echo $book->title; ?></h2>
        <p class="author">Szerző: <?php echo $book->author; ?></p>
        <?php $this->load->view('components/book-toolbar', ["book" => $book]); ?>
        <br>
        <?php echo $book->description; ?>

        <?php $this->load->view('components/look-inside', ["book" => $book]); ?>                     
        <br>
        <h2>Adatok</h2>
        <div class="row">
            <div class="col-md-5">
                <?php echo $book->data1; ?> 
            </div>
            <div class="col-md-7">
                <?php echo $book->data2; ?>
            </div>
        </div>
        <br>
        <br>
        <?php echo $book->other_content; ?>

        <?php if ($book->id !== 'tobb-tucat-feladat-bakonyi-betyarmesekhez') : ?>
            <br>  <br>        
            <h2>Tartalom</h2>
            <div class="book-contents">
                <?php $this->load->view('components/toc-' . $book->id . '-data'); ?> 
            </div>
        <?php endif; ?>
        <?php $this->load->view('components/book-toolbar', ["book" => $book]); ?>


    </div>
</div>

