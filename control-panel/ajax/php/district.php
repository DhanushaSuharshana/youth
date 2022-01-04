<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//-- ** Start Create Code Block
if (isset($_POST['create'])) {
    //-- ** Start Assign Post Params
    $DISTRICT = new Districts(NULL);
    $DISTRICT->name = $_POST['name'];
    $DISTRICT->create();
    //-- ** End Assign Post Params
    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}
//-- ** Start Create Code Block
//--------------------------------------------------------------------------
//Start Update Code Block
if (isset($_POST['update'])) {

    $DISTRICT = new Districts($_POST['id']);
    //-- ** Start Assign Post Params
    $DISTRICT->name = $_POST['name'];
    $res = $DISTRICT->update();
    //-- ** End Assign Post Params
    if ($res) {
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
//-- ** Start delete code 
//--------------------------------------------------------------------------
if ($_POST['option'] == 'delete') {
    $DISTRICT = new Districts($_POST['id']);
    $result = $DISTRICT->delete();
    //-- ** End Assign Post Params
    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}