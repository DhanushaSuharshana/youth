<?php

class centers extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->colors = Colors::getRandomColors(Center::getCount()['count']);
    }

    function index()
    {
        $this->view->render('centers/filter');
    }

    function location()
    {

        $this->view->render('centers/index');
    }

    function list($query = false)
    {
        $this->view->query = $query;
        $this->view->render('centers/filter_from_course');
    }
}
