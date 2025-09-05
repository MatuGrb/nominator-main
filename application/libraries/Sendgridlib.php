<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require("sendgrid-php/sendgrid-php.php");

class Sendgridlib {

    var $SG_instance;

    public function __construct() {
      //torresrodrigoe sendgrid account
      $this->SG_instance = new SendGrid('');
    }

    public function send($emaildata) {
        try {
            return $this->SG_instance->send($emaildata);
        } catch (\SendGrid\Exception $e) {
            /*echo $e->getCode() . "\n";
            foreach ($e->getErrors() as $er) {
                echo $er;
            }*/
        }
    }

}
