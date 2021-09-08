<?php

class Errors extends Controller {

    function __construct() {
        parent::__construct();
    }

    function not_found() { 
        $this->view->render('error/404'); 
    }

}
