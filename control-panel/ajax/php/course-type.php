<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//create course type
if (isset($_POST['create'])) {

    $COURSE_TYPE = new CourseType(NULL);

    $COURSE_TYPE->title = $_POST['title'];
    $COURSE_TYPE->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
} 

//update course type
if (isset($_POST['update'])) {

    $COURSE_TYPE = new CourseType($_POST['id']);

    $COURSE_TYPE->title = $_POST['title'];

    $COURSE_TYPE->update();
    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $COURSE_TYPE = Comments::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}