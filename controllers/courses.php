<?php

class courses extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->colors = Colors::getRandomColors(Center::getCount()['count']);
    }

    function index($query = false)
    {
        $this->view->query = $query;
        // var_dump(base64_decode($query));
        $this->view->render('courses/all_courses');
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

    function new_application()
    {
        // $tokens = ["9he02kbf9093hkvsle9045kb", "83nch712dnfl3n48db4nd1h"];//web / app
        // if (in_array($_POST["token"], $tokens)) {
            $data = [
                'center_id' => [$_POST['center_id'], 'is_empty'],
                'course_id' => [$_POST['course_id'], 'is_empty'],
                'first_name' => [$_POST['first_name'], 'is_empty'],
                'last_name' => [$_POST['last_name'], 'is_empty'],
                'full_name' => [$_POST['full_name'], 'is_empty'],
                'nic' => [$_POST['nic'], 'is_empty'],
                'gender' => [$_POST['gender'], 'is_empty'],
                'dob' => [$_POST['dob'], 'is_empty'],
                'address_line_1' => [$_POST['address_line_1'], 'is_empty'],
                // 'address_line_2' => [$_POST['address_line_2'], 'is_empty'],
                // 'address_line_3' => [$_POST['address_line_3'], 'is_empty'],
                'district' => [$_POST['district'], 'is_empty'],
                'telephone_1' => [$_POST['telephone_1'], 'is_empty'],
                // 'telephone_2' => [$_POST['telephone_2'], 'is_empty'],
                'email' => [$_POST['email'], 'is_empty,is_email'],
                // 'ol' => [$_POST['ol'], 'is_empty'],
                // 'al' => [$_POST['al'], 'is_empty'],
            ];
            $errors = $this->validation->form_validate($data);

            if (!empty($errors)) {
                echo json_encode(['has_errors' => true, 'errors' => $errors]);
            } else {
                $APPLY_ONLINE = new ApplyOnline(NULL);
                $APPLY_ONLINE->center_id = $_POST['center_id'];
                $APPLY_ONLINE->course_id = $_POST['course_id'];
                $APPLY_ONLINE->first_name = $_POST['first_name'];
                $APPLY_ONLINE->last_name = $_POST['last_name'];
                $APPLY_ONLINE->full_name = $_POST['full_name'];
                $APPLY_ONLINE->nic = $_POST['nic'];
                $APPLY_ONLINE->gender = $_POST['gender'];
                $APPLY_ONLINE->dob = $_POST['dob'];
                $APPLY_ONLINE->address_line_1 = $_POST['address_line_1'];
                $APPLY_ONLINE->address_line_2 = $_POST['address_line_2'];
                $APPLY_ONLINE->address_line_3 = $_POST['address_line_3'];
                $APPLY_ONLINE->district = $_POST['district'];
                $APPLY_ONLINE->telephone_1 = $_POST['telephone_1'];
                $APPLY_ONLINE->telephone_2 = $_POST['telephone_2'];
                $APPLY_ONLINE->email = $_POST['email'];
                $APPLY_ONLINE->ol = $_POST['ol'];
                $APPLY_ONLINE->al = $_POST['al'];

                if ($APPLY_ONLINE->create($_POST)) {
                    $mail = new Mail(MHOST, MUSERNAME, MPASSWORD, MTITLE, MPORT);
                    $mail->set_address($_POST['email']);
                    $COURSE = new Course($_POST['course_id']);
                    $CENTER = new Center($_POST['center_id']);
                    $content = [
                        'first_name' => $_POST['first_name'],
                        'course' => $COURSE->name,
                        'center' => $CENTER->name,
                    ];
                    $mail->set_content('Registration Success', 'template-apply', $content);
                    $mail->send();

                    echo json_encode(['has_errors' => false, 'status' => true]);
                } else {
                    echo json_encode(['has_errors' => false, 'status' => false]);
                }
            }
        // }else{
        //     echo json_encode(['msg' =>"invalid token"]);

        // }
        
    }
}
