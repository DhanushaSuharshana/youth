<?php

class Advertisements extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->view->render('advertisement/index');
    }

    function view($query = false) {
        $this->view->query = $query;
        $this->view->render('advertisement/view');
    }
}
