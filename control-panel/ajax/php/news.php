<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//-- ** Start Create Code Block
if (isset($_POST['create'])) {
    //-- ** Start Create Image 
    $dir_dest = '../../../upload/news/';
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
    $NEWS = new News(NULL);
    $NEWS->news_type = $_POST['news_type'];
    $NEWS->title = ucwords($_POST['title']);
    $NEWS->date = $_POST['date'];
    $NEWS->short_description = $_POST['short_description'];
    $NEWS->description = $_POST['description'];
    $NEWS->image_name = $imgName;
    $NEWS->create();
    //-- ** End Assign Post Params
    if ($NEWS) {
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
    $dir_dest = '../../../upload/news/';
    $handle = new Upload($_FILES['image_name']);
    $imgName = null;

    $NEWS = new News($_POST['id']);
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $NEWS->image_name;
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
    $NEWS->news_type = $_POST['news_type'];
    $NEWS->title = ucwords($_POST['title']);
    $NEWS->date = $_POST['date'];
    $NEWS->short_description = $_POST['short_description'];
    $NEWS->description = $_POST['description'];
    $NEWS->update();
    //-- ** End Assign Post Params
    if ($NEWS) {
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

    $NEWS_OBJ = new News(NULL);

    foreach ($_POST['sort'] as $key => $img) {

        $key = $key + 1;

        $res = $NEWS_OBJ->arrange($key, $img);
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
    $NEWS = new News($_POST['id']);
    unlink("../../../upload/news/" . $NEWS->image_name);
    $result = $NEWS->delete();
    //-- ** End Assign Post Params
    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
//Arange slider



 