<?php

class Gallery extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('gallery/photo/index');
    }

    function album($id) {
        
        $this->view->id = $id;
        $this->view->render('gallery/photo/album');
    }

}
