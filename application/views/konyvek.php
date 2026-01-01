<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('components/table-of-contents'); ?>                     

<div class="spacer"></div>
<div ng-controller="ShoppingCartController" style="margin-top: 15px;">
    <?php foreach ($books as $book) : ?>

        <div class="media book">
            <div class="media-left">
                <a href="<?php echo 'img/books/' . $book->id . '.jpg'; ?>" data-lightbox="<?php echo $book->id; ?>">
                    <img id='<?php echo $book->id; ?>-img' class="media-object solid-border" src="<?php echo 'img/books/thumb/' . $book->id . '.jpg'; ?>" alt="<?php echo $book->title; ?>">
                </a>
            </div>
            <div class="media-body">
                <h2 class="media-heading"><a href="<?php echo 'konyvek/' . $book->id; ?>" class="header-link"><?php echo $book->title; ?></a></h2>
                <p class="author">Szerző: <?php echo $book->author; ?></p>
                <p><?php echo $book->short_description; ?> 
                </p>  

                <?php $this->load->view('components/look-inside', ["book" => $book]); ?>                     
                <?php $this->load->view('components/book-toolbar', ["book" => $book, "show_details_button" => TRUE]); ?>

            </div>
        </div>

        <?php if (end($books) !== $book) {
            echo '<hr> ';
        } ?>


<?php endforeach; ?>
</div>