<?php
 
class Contact_Us extends Controller
{
    function __construct()
    {
        parent::__construct();
        
    }

    function index()
    {
        
        $this->view->render('contact_us/index'); 
    }

  
}
