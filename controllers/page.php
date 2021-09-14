<?php

class Page extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->render('page/pages');
    }

    function view($query = false)
    {
        (!$query) ? exit() : "" ;
        $query = str_replace("_", "-", $query);

        $PAGE = new Pages(NULL);
        $PAGE->getByUrl($query);
        (!$PAGE->id) ? header("location: ".URL."errors/not-found") : "";
        $this->view->PAGE = $PAGE;
        // switch ($query) {
        //     case 'youth_club':
        //         $this->view->title = "Youth Club";
        //         # code...
        //         break;
        //     case 'youth_services_limited':
        //         $this->view->title = "Youth Services Limited";
        //         # code...
        //         break;
        //     case 'school_of_computing':
        //         $this->view->title = "School of Computing";
        //         # code...
        //         break;
        //     case 'nysco':
        //         $this->view->title = "NYSCO";
        //         # code...
        //         break;
        //     case 'youth_band':
        //         $this->view->title = "Youth Band";
        //         # code...
        //         break;
        //     case 'youth_music_club':
        //         $this->view->title = "Youth Music Club";
        //         # code...
        //         break;
        //     case 'photography_and_video_unit':
        //         $this->view->title = "Photography and Video Unit";
        //         # code...
        //         break;

        //     default:
        //         # code...
        //         break;
        // }

        $this->view->render('page/view2');
    }

    function news($url = false, $id = false)
    {
        if($url == 'view'){
            $this->view->id = $id;
            $this->view->render('page/news/view');
        }else{
            $url = str_replace("_", "-", $url);
            $this->view->url = $url;
            $this->view->render('page/news/news');
        }  
    }
}
