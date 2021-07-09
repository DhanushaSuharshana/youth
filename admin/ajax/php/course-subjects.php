<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//-- ** Start Create Code Block
if (isset($_POST['create'])) {
    //-- ** Start Assign Post Params
    $COURSE_SUBJECTS = new CourseSubjects(NULL);
    $COURSE_SUBJECTS->title = $_POST['title'];
    $COURSE_SUBJECTS->course_id = $_POST['id'];
    $COURSE_SUBJECTS->create();
    //-- ** End Assign Post Params
    if ($COURSE_SUBJECTS) {
        $result = ["status" => 'success'];
        echo json_encode($result);
        exit();
    } else {
        $result = ["status" => 'error'];
        echo json_encode($result);
        exit();
    }
}
//-- ** Start Create Code Block
//--------------------------------------------------------------------------
//Start Update Code Block
if (isset($_POST['update'])) {

    $COURSE_SUBJECTS = new CourseSubjects($_POST['id']);
    //-- ** Start Assign Post Params  
    $COURSE_SUBJECTS->title = $_POST['title'];
    $COURSE_SUBJECTS->update();
    //-- ** End Assign Post Params
    if ($COURSE_SUBJECTS) {
        $result = ["status" => 'success'];
        echo json_encode($result);
        exit();
    } else {
        $result = ["status" => 'error'];
        echo json_encode($result);
        exit();
    }
}
//End Update Code Block
//--------------------------------------------------------------------------
//-- ** Start delete code  
if ($_POST['option'] == 'delete') {
    $COURSE_SUBJECTS = new CourseSubjects($_POST['id']);
    $result = $COURSE_SUBJECTS->delete();
    //-- ** End Assign Post Params
    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
//Arange slider
if (isset($_POST['arrange'])) {
    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;
        $COURSE_SUBJECTS = News::arrange($key, $img);
        header('Location:../../../arrange-news.php?message=9');
    }
} 