<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//-- ** Start Create Code Block
if (isset($_POST['create'])) {
//-- ** Start Create Image  
    $dir_dest = '../../../upload/event/';
    $handle = new Upload($_FILES['image_name']);
    $imgName = null;
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 500;
        $handle->image_y = 419;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
    //-- ** End Create Image 
    //-- ** Start Assign Post Params
    $EVENT = new Event(NULL);
    $EVENT->title = $_POST['title'];
    $EVENT->date = $_POST['date'];
    $EVENT->location = $_POST['location'];
    $EVENT->address = $_POST['address'];
    $EVENT->short_description = $_POST['short_description'];
    $EVENT->description = $_POST['description'];
    $EVENT->image_name = $imgName;
    $EVENT->create();
    //-- ** End Assign Post Params
    if ($EVENT) {
        $result = [
            "status" => 'success'
        ];
        echo json_encode($result);
        exit();
    } else {
        $result = [
            "status" => 'error'
        ];
        echo json_encode($result);
        exit();
    }
}
//-- ** End Create Code Block
//--------------------------------------------------------------------------
//Start Update Code Block
if (isset($_POST['update'])) {
    //-- ** Start Edit Image in folder location
    $dir_dest = '../../../upload/event/';
    $handle = new Upload($_FILES['image_name']);
    $imgName = null;
    $EVENT = new Event($_POST['id']);
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $EVENT->image_name;
        $handle->image_x = 500;
        $handle->image_y = 419;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
//-- ** End Edit Image in folder location
//-- ** Start Assign Post Params   
    $EVENT->title = $_POST['title'];
    $EVENT->date = $_POST['date'];
    $EVENT->location = $_POST['location'];
    $EVENT->address = $_POST['address'];
    $EVENT->short_description = $_POST['short_description'];
    $EVENT->description = $_POST['description'];
    $EVENT->update();
//-- ** End Assign Post Params
    if ($EVENT) {
        $result = [
            "status" => 'success'
        ];
        echo json_encode($result);
        exit();
    } else {
        $result = [
            "status" => 'error'
        ];
        echo json_encode($result);
        exit();
    }
}
//End Update Code Block
//--------------------------------------------------------------------------
//-- ** Start arrange code  
if (isset($_POST['arrange'])) {

    $EVENT_OBJ = new Event(NULL);

    foreach ($_POST['sort'] as $key => $img) {

        $key = $key + 1;

        $res = $EVENT_OBJ->arrange($key, $img);
        //-- ** End Assign Post Params
    }

    $result = [
        "status" => 'success'
    ];
    echo json_encode($result);
    exit();
}
//End arrange Code Block
//--------------------------------------------------------------------------
//-- ** Start delete code 
//if ($_POST['option'] == 'delete') {
//    $EVENT = new Event($_POST['id']);
//    unlink("../../../upload/event/" . $NEWS->image_name);
//    $result = $EVENT->delete();
//    //-- ** End Assign Post Params
//    if ($result) {
//        $data = array("status" => TRUE);
//        header('Content-type: application/json');
//        echo json_encode($data);
//    }
//}
//End delete Code Block




 