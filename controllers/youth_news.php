<?php
class Youth_news extends Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->view->render('youth_news/index');
    }
    
    function view($query = false) {
        $this->view->query = $query;
        $this->view->render('youth_news/view');
    }
}