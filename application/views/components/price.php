<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<span class="book-price readable-number"><?php echo Shopping::get_book_price_formatted($book);  ?></span>
<button class="btn btn-primary" 
        ng-show="!isProductInTheCart(<?php printf("'%s'", $book->id); ?>)"
        ng-click="addProduct(<?php
        
        printf("'%s', '%s', '%s', %s, '%s'", $book->id, $book->title, $book->author, Shopping::get_price($book), 'img/books/thumb/' . $book->id . '.jpg'); // TODO: find nicer solution 
        ?>)" 
        ng-cloak>
    <span class="glyphicon glyphicon-shopping-cart"></span> &nbsp;Kosárba
</button> 


<button title="Több példányt is rendelhet. A kosárban megadhatja a kívánt mennyiséget." class="btn btn-primary" disabled ng-show="isProductInTheCart(<?php printf("'%s'", $book->id); ?>)" ng-cloak>
    <span class="glyphicon glyphicon-shopping-cart"></span> &nbsp;A kosárban van
</button> 

