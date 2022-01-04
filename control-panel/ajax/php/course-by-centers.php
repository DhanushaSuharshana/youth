<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//create course type
if (isset($_POST['create'])) {

    $COURSE_By_CENTERS = new CourseByCenters(NULL);

    $COURSE_By_CENTERS->course_id = $_POST['course_id'];
    $COURSE_By_CENTERS->center_id = $_POST['center_id'];
    $COURSE_By_CENTERS->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

//update course type
if (isset($_POST['update'])) {

    $COURSE_By_CENTERS = new CourseType($_POST['id']);

    $COURSE_By_CENTERS->title = $_POST['title'];

    $COURSE_By_CENTERS->update();
    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}
//--------------------------------------------------------------------------
//-- ** Start delete code  
if ($_POST['option'] == 'delete') {
    $COURSE_By_CENTERS = new CourseByCenters($_POST['id']);
    $result = $COURSE_By_CENTERS->delete();
    //-- ** End Assign Post Params
    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $COURSE_By_CENTERS = Comments::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}