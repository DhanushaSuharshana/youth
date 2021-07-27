<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

if (isset($_POST['create'])) {

    $COMMENT = new Comments(NULL);

    $COMMENT->name = $_POST['name'];
    $COMMENT->title = $_POST['title'];
    $COMMENT->comment = $_POST['comment'];
    $COMMENT->is_active = isset($_POST['active']) ? $_POST['active'] : 0 ;
    $COMMENT->date =  $_POST['date'];
    $dir_dest = '../../../upload/comments/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 300;
        $handle->image_y = 300;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $COMMENT->image_name = $imgName;
    $COMMENT->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}



if (isset($_POST['update'])) {

    $dir_dest = '../../../upload/comments/';
    $handle = new Upload($_FILES['image_name']);
    $imgName = null;

    $COMMENT = new Comments($_POST['id']);
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $COMMENT->image_name;
        $handle->image_x = 300;
        $handle->image_y = 300;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }


    // $COMMENT->image_name = $_POST['oldImageName'];
    $COMMENT->name = $_POST['name'];
    $COMMENT->title = $_POST['title'];
    $COMMENT->date = $_POST['date'];
    $COMMENT->comment = $_POST['comment'];
    $COMMENT->is_active = isset($_POST['active']) ? $_POST['active'] : 0 ;
    $COMMENT->update();

    if ($COMMENT) {
        $result = ["status" => 'success'];
        echo json_encode($result);
        exit();
    } else {
        $result = ["status" => 'error'];
        echo json_encode($result);
        exit();
    }
}

if ($_POST['option'] == 'delete') {
    $COMMENT = new Comments($_POST['id']);
    unlink("../../../upload/comments/" . $COMMENT->image_name);
    $result = $COMMENT->delete();
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
        $COURSE = Comments::arrange($key, $img);
        header('Location:../../../arrange-news.php?message=9');
    }
}
