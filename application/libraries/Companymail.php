<?php

class Companymail {

    public static function send($from, $to, $subject, $htmlMessage, $textMessage) {

        $CI = & get_instance();

        $CI->load->library('email');
        $CI->load->helper('messages');

        $CI->email->from($from, Messages::$companyName);
        $CI->email->to($to);
        $CI->email->bcc(Messages::$adminEmail);
        $CI->email->set_newline("\r\n");

        $CI->email->subject($subject);
        $CI->email->message($htmlMessage);
        $CI->email->set_alt_message($textMessage);

        if (!$CI->email->send()) {
            // TODO: log error
            show_error($CI->email->print_debugger());
        }
    }

}
