<?php
class youth_org extends Controller {

    function __construct(){
    parent::__construct();
    }

    function view(){
        $this->view->render('youth_org/view');
    }
}