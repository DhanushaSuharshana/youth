<?php

class Events extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->view->render('events/index');
    }

    function view($query = false) {
        $this->view->query = $query;
        $this->view->render('events/view');
    }
}
