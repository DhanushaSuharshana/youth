<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//create photo album
if (isset($_POST['create'])) {

    $PHOTO_ALBUM = new PhotoAlbum(NULL);


    $PHOTO_ALBUM->title = $_POST['title'];

    $dir_dest = '../../../upload/photo-album/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 600;
        $handle->image_y = 638;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $PHOTO_ALBUM->image_name = $imgName;
    $PHOTO_ALBUM->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}


//manage photo album
if (isset($_POST['update'])) {
    $dir_dest = '../../../upload/photo-album/';
    $handle = new Upload($_FILES['image_name']);
    $imgName = null;

    $PHOTO_ALBUM = new PhotoAlbum($_POST['id']);
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $PHOTO_ALBUM->image_name;
        $handle->image_x = 600;
        $handle->image_y = 638;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }



    $PHOTO_ALBUM->title = $_POST['title'];
    $PHOTO_ALBUM->update();

    if ($PHOTO_ALBUM) {
        $result = ["status" => 'success'];
        echo json_encode($result);
        exit();
    } else {
        $result = ["status" => 'error'];
        echo json_encode($result);
        exit();
    }
}



//--------------------------------------------------------------------------
//-- ** Start arrange code  
if (isset($_POST['arrange'])) {

    $PHOTO_ALBUM_OBJ = new PhotoAlbum(NULL);

    foreach ($_POST['sort'] as $key => $img) {

        $key = $key + 1;

        $res = $PHOTO_ALBUM_OBJ->arrange($key, $img);
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
if ($_POST['option'] == 'delete') {
    $PHOTO_ALBUM = new PhotoAlbum($_POST['id']);
    unlink("../../../upload/photo-album/" . $PHOTO_ALBUM->image_name);
    $result = $PHOTO_ALBUM->delete();
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

        $PHOTO_ALBUM = PhotoAlbum::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
