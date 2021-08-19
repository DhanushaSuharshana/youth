<?php

class Page extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->render('page/services');
    }

    function services($query = false)
    {
        // $this->view->query = $query;
        switch ($query) {
            case 'youth_club':
                $this->view->title = "Youth Club";
                # code...
                break;
            case 'youth_services_limited':
                $this->view->title = "Youth Services Limited";
                # code...
                break;
            case 'school_of_computing':
                $this->view->title = "School of Computing";
                # code...
                break;
            case 'nysco':
                $this->view->title = "NYSCO";
                # code...
                break;
            case 'youth_band':
                $this->view->title = "Youth Band";
                # code...
                break;
            case 'youth_music_club':
                $this->view->title = "Youth Music Club";
                # code...
                break;
            case 'photography_and_video_unit':
                $this->view->title = "Photography and Video Unit";
                # code...
                break;

            default:
                # code...
                break;
        }

        $this->view->render('page/view');
    }
}
