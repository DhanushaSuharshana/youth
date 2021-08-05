<?php

class centers extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $this->view->render('courses/filter');
    }
    function location() {

        $this->view->render('centers/index');
    }

    function villa_details() {


        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('centers/index');
        $this->view->render('footer');
    }

}
