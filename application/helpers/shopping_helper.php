<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// TODO: replace this class by client side code
class Shopping {

    public static function get_book_price_formatted($book) {
        $CI = & get_instance();
        $price = Shopping::get_price($book);
        return $price . '&nbsp;' . $CI->config->item('currencySymbol');
    }

    public static function get_price_formatted($price) {
       
        if (Shopping::currencyCode() == 'EUR') {
            $formattedPrice = sprintf('%01.2f %s', $price, Shopping::currency());
        } else {
            $formattedPrice = sprintf('%u %s', $price, Shopping::currency());
        }
        return $formattedPrice;
    }

    public static function get_price($book) {
        $CI = & get_instance();
        $price = $CI->config->item('currencyCode') == 'EUR' ? $book->price_euro : $book->price;
        return $price;
    }

    public static function currency() {
        $CI = & get_instance();
        return $CI->config->item('currencySymbol');
    }

    public static function currencyCode() {
        $CI = & get_instance();
        return $CI->config->item('currencyCode');
    }

}
