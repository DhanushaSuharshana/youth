<?php

class courses extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('courses/index');
    }

    function view() {

//        $this->view->id = $id;
        $this->view->render('courses/view');
    }

}