<?php 
class About_Us extends Controller{
    function __construct()
    {
        parent::__construct();
     
    }

    function index()
    {
     
        $this->view->render('navigation');
        $this->view->render('about_us/index');
       
    }
}