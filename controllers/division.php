<?php

class division extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $this->view->render('division/index');
    }

    function view() {

        $this->view->render('division/view');
    }

}
