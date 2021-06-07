<?php

class Gallery extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('gallery/index');
    }

    function view() {

//        $this->view->id = $id;
        $this->view->render('gallery/view');
    }

}
