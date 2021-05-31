<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');


if (isset($_POST['create'])) {
    $LEADERS = new Leaders(NULL);

    $LEADERS->name = $_POST['name'];
    $LEADERS->position = $_POST['position'];
    $LEADERS->email = $_POST['email'];
    $LEADERS->facebook = $_POST['facebook'];
    $LEADERS->instagram = $_POST['instagram'];
    $LEADERS->linkdin = $_POST['linkdin'];

    $dir_dest = '../../../upload/leader/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 560;
        $handle->image_y = 638;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $LEADERS->image_name = $imgName;
    $LEADERS->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}