<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//create course type
if (isset($_POST['create'])) {

    $PAGE_TYPE = new PageType(NULL);

    $PAGE_TYPE->title = $_POST['title'];
    $PAGE_TYPE->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
} 

//update course type
if (isset($_POST['update'])) {

    $PAGE_TYPE = new PageType($_POST['id']);

    $PAGE_TYPE->title = $_POST['title'];

    $PAGE_TYPE->update();
    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

//-- ** Start delete code 
//--------------------------------------------------------------------------
if ($_POST['option'] == 'delete') {
    $PAGE_TYPE = new PageType($_POST['id']);
    $result = $PAGE_TYPE->delete();
    //-- ** End Assign Post Params
    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
