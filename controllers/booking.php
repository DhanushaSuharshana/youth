<?php

class Booking extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->render('booking/booking');
    }

    function new()
    {
        $this->view->render('booking/new');
    }

}
