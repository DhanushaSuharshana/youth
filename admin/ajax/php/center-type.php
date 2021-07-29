<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//create course type
if (isset($_POST['create'])) {

    $CENTER_TYPE = new CenterType(NULL);

    $CENTER_TYPE->title = $_POST['title'];
    $CENTER_TYPE->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
} 

//update course type
if (isset($_POST['update'])) {

    $CENTER_TYPE = new CenterType($_POST['id']);

    $CENTER_TYPE->title = $_POST['title'];

    $CENTER_TYPE->update();
    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

//-- ** Start delete code 
//--------------------------------------------------------------------------
if ($_POST['option'] == 'delete') {
    $CENTER_TYPE = new CenterType($_POST['id']);
    $result = $CENTER_TYPE->delete();
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

        $CENTER_TYPE = Comments::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}