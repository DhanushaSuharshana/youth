<?php

class Gallery extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('gallery/index');
    }

    function album($id) {
        
        $this->view->id = $id;
        $this->view->render('gallery/album');
    }

}
