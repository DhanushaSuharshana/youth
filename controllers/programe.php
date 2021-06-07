<?php

class Programe extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('programe/index');
    }

}
