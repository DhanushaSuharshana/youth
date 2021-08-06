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

    function view()
    {

        $this->view->render('events/view');
    }
}
