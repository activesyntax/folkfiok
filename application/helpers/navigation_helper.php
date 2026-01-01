<?php defined('BASEPATH') OR exit('No direct script access allowed');


// TODO: replace this class by client side code
class Navigation {

    public static function print_itemstatus_attribute($view, $current_view)
    {  
        print strcmp($current_view, $view) == 0 ? ' class="active"' : '';
    }
}

