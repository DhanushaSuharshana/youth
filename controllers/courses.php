<?php

class courses extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function list($query = false)
    {
        $this->view->query = $query;
        // var_dump(base64_decode($query));
        $this->view->render('courses/courses');
    }

    function view($query = false)
    {
        //        $this->view->id = $id;
        $this->view->query = $query;
        $this->view->render('courses/view');
    }

    function apply($query = false)
    {
        //        $this->view->id = $id;
        $this->view->query = $query;
        $this->view->render('courses/apply');
    }

    function all_page()
    {

        //        $this->view->id = $id;
        $this->view->render('courses/all_page');
    }
}
