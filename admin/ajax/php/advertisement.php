<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//-- ** Start Create Code Block
if (isset($_POST['create'])) {
    //-- ** Start Create Image 
    $dir_dest = '../../../upload/advertisement/';
    $handle = new Upload($_FILES['image_name']);
    $imgName = null;
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 600;
        $handle->image_y = 440;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
    //-- ** End Create Image
    //-- ** Start Assign Post Params
    $ADVERTISEMENT = new Advertisement(NULL);
    $ADVERTISEMENT->url = $_POST['url'];
    $ADVERTISEMENT->title = ucwords($_POST['title']);
    $ADVERTISEMENT->date = $_POST['date'];
    $ADVERTISEMENT->short_description = $_POST['short_description'];
    $ADVERTISEMENT->description = $_POST['description'];
    $ADVERTISEMENT->image_name = $imgName;
    $ADVERTISEMENT->create();
    //-- ** End Assign Post Params
    if ($ADVERTISEMENT) {
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
    //-- ** Start Edit Image in folder location
    $dir_dest = '../../../upload/advertisement/';
    $handle = new Upload($_FILES['image_name']);
    $imgName = null;

    $ADVERTISEMENT = new Advertisement($_POST['id']);
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $ADVERTISEMENT->image_name;
        $handle->image_x = 600;
        $handle->image_y = 440;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
    //-- ** End Edit Image in folder location
    //-- ** Start Assign Post Params  
    $ADVERTISEMENT->url = $_POST['url'];
    $ADVERTISEMENT->title = ucwords($_POST['title']);
    $ADVERTISEMENT->date = $_POST['date'];
    $ADVERTISEMENT->short_description = $_POST['short_description'];
    $ADVERTISEMENT->description = $_POST['description'];
    $ADVERTISEMENT->update();
    //-- ** End Assign Post Params
    if ($ADVERTISEMENT) {
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
//-- ** Start arrange code  
if (isset($_POST['arrange'])) {

    $ADVERTISEMENT_OBJ = new Advertisement(NULL);

    foreach ($_POST['sort'] as $key => $img) {

        $key = $key + 1;

        $res = $ADVERTISEMENT_OBJ->arrange($key, $img);
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
//--------------------------------------------------------------------------
//-- ** Start delete code  
if ($_POST['option'] == 'delete') {
    $ADVERTISEMENT = new Advertisement($_POST['id']);
    unlink("../../../upload/advertisement/" . $ADVERTISEMENT->image_name);
    $result = $ADVERTISEMENT->delete();
    //-- ** End Assign Post Params
    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
//Arange slider



 