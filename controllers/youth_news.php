<?php
class Youth_news extends Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->view->render('youth_news/index');
    }
    
    function view() {
        $this->view->render('youth_news/view');
    }
}