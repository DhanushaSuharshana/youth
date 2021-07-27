<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//Create
if (isset($_POST['create'])) {

    $EVENT = new Event(NULL);

    $EVENT->title = $_POST['title'];
    $EVENT->date = $_POST['date'];
    $EVENT->location = $_POST['location'];
    $EVENT->short_description = $_POST['short_description'];
    $EVENT->description = $_POST['description'];

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

    $EVENT->image_name = $imgName;

    $EVENT->create();

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

//Update
if (isset($_POST['update'])) {

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


    // $EVENT->image_name = $_POST['oldImageName'];
    $EVENT->title = $_POST['title'];
    $EVENT->date = $_POST['date'];
    $EVENT->location = $_POST['location'];
    $EVENT->short_description = $_POST['short_description'];
    $EVENT->description = $_POST['description'];

    $EVENT->update();

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

if ($_POST['option'] == 'delete') {
    $EVENT = new Event($_POST['id']);
    $result = $EVENT->delete();
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
        $EVENT = News::arrange($key, $img);
        header('Location:../../../arrange-news.php?message=9');
    }
}



 