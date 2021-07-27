<?php

class all extends Controller {

    function __construct() {
        parent::__construct();
    }

    function all_page() {
        $this->view->render('all/all_page');
    }
}