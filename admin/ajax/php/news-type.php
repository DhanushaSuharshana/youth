<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//create course type
if (isset($_POST['create'])) {

    $NEWS_TYPE = new NewsType(NULL);

    $NEWS_TYPE->title = $_POST['title'];
    $NEWS_TYPE->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
} 

//update course type
if (isset($_POST['update'])) {

    $NEWS_TYPE = new NewsType($_POST['id']);

    $NEWS_TYPE->title = $_POST['title'];

    $NEWS_TYPE->update();
    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

//-- ** Start delete code 
//--------------------------------------------------------------------------
if ($_POST['option'] == 'delete') {
    $NEWS_TYPE = new NewsType($_POST['id']);
    $result = $NEWS_TYPE->delete();
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

        $NEWS_TYPE = Comments::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}