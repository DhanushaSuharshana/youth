<?php

class service extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('services/index');
    }

}
