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

    function new($property = null)
    {
        $this->view->property = str_replace('_','-',$property);
        $this->view->render('booking/new');
    }

    function new_booking()
    {
        $data = [
            'full_name' => [$_POST['full_name'], 'is_empty'],
            'property' => [$_POST['property'], 'is_empty'],
            'hours' => [$_POST['hours'], 'is_empty'],
            'date' => [$_POST['date'], 'is_empty'],
            'time' => [$_POST['time'], 'is_empty'],
            'telephone_1' => [$_POST['telephone_1'], 'is_empty'],
            'telephone_2' => [$_POST['telephone_2'], 'is_empty'],
            'email' => [$_POST['email'], 'is_empty,is_email'],

        ];
        $errors = $this->validation->form_validate($data);

        if (!empty($errors)) {
            echo json_encode(['has_errors' => true, 'errors' => $errors]);
        } else {
            $BOOKING = new Booking_M(NULL);

            $BOOKING->full_name = $_POST['full_name'];
            $BOOKING->property = $_POST['property'];
            $BOOKING->hours = $_POST['hours'];
            $BOOKING->date = $_POST['date'];
            $BOOKING->time = $_POST['time'];
            $BOOKING->telephone_1 = $_POST['telephone_1'];
            $BOOKING->telephone_2 = $_POST['telephone_2'];
            $BOOKING->email = $_POST['email'];


            if ($BOOKING->create($_POST)) {
                echo json_encode(['has_errors' => false, 'status' => true]);
            } else {
                echo json_encode(['has_errors' => false, 'status' => false]);
            }
        }
    }
}
