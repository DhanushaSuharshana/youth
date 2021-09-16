<?php

class Video_Gallery extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('gallery/video/index');
    }

    function album($id=false) {
        
        $this->view->id = $id;
        $this->view->render('gallery/video/album');
    }

}
