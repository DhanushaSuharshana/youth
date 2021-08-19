<?php

class News_Letter extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        // $this->view->render('contact_us/index'); 
    }

    function new_email()
    {
        $data = [
            'email' => [$_POST['email'], 'is_empty,is_email'],


        ];
        $errors = $this->validation->form_validate($data);

        if (!empty($errors)) {
            echo json_encode(['has_errors' => true, 'errors' => $errors]);
        } else {
            $NEWS_LETTER = new Newsletter(NULL);
            $NEWS_LETTER->email = $_POST['email'];

            if (count($NEWS_LETTER->byEmail($_POST['email'])) < 1) {
                if ($NEWS_LETTER->create($_POST)) {
                    $mail = new Mail(MHOST, MUSERNAME, MPASSWORD, MTITLE, MPORT);
                    $mail->set_address($_POST['email']);
                    $content = [
                        // 'name' => $_POST['name'],
                        'email' => $_POST['email'],

                    ];
                    $mail->set_content('Message Success', 'template-news-letter', $content);
                    $mail->send();

                    echo json_encode(['has_errors' => false, 'status' => true]);
                } else {
                    echo json_encode(['has_errors' => false, 'status' => false]);
                }
            } else {
                echo json_encode(['has_errors' => false, 'status' => false, 'msg' => 'You are already subscribed.']);
            }
        }
    }
}
