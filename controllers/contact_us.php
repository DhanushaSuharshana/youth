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

    function new_message(){
        $data = [
            'name' => [$_POST['name'], 'is_empty'],
            'email' => [$_POST['email'], 'is_empty,is_email'],
            'phone' => [$_POST['phone'], 'is_empty'],
            'subject' => [$_POST['subject'], 'is_empty'],
            'message' => [$_POST['message'], 'is_empty'],
            
        ];
        $errors = $this->validation->form_validate($data);

        if (!empty($errors)) {
            echo json_encode(['has_errors' => true, 'errors' => $errors]);
        } else {
            $CONTACT = new Contact(NULL);
            $CONTACT->name = $_POST['name'];
            $CONTACT->email = $_POST['email'];
            $CONTACT->phone = $_POST['phone'];
            $CONTACT->subject = $_POST['subject'];
            $CONTACT->message = $_POST['message'];

            if ($CONTACT->create($_POST)) {
                $mail = new Mail(MHOST, MUSERNAME, MPASSWORD, MTITLE, MPORT);
                $mail->set_address($_POST['email']);
                $content = [
                    'name' => $_POST['name'],
                    'email'=> $_POST['email'],
                    'subject'=> $_POST['subject'],
                ];
                $mail->set_content('Message Success', 'template-contact',$content);
                $mail->send();

                echo json_encode(['has_errors' => false, 'status' => true]);
            } else {
                echo json_encode(['has_errors' => false, 'status' => false]);
            }
        }
    }

  
}
