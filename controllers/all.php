<?php

class all extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function all_page()
    {
        $this->view->render('all/all_page');
    }

    function card()
    {
        $this->view->render('all/card');
    }

    function blank(){
        $this->view->render('all/blank');
    }
}
