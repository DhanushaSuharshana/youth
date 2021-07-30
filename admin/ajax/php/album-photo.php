<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//-- ** Start Create Code Block
if (isset($_POST['create'])) {
//-- ** Start Create Image   
    $dir_dest = '../../../upload/photo-album/gallery/';
    $dir_dest_thumb = '../../../upload/photo-album/gallery/thumb/';
    $handle = new Upload($_FILES['image_name']);
    $imgName = null;
    $img = Helper::randamId();
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 900;
        $handle->image_y = 500;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 270;
        $handle->image_y = 175;
        $handle->Process($dir_dest_thumb);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
    //-- ** End Create Image 
    //-- ** Start Assign Post Params
    $ALBUM_PHOTO = new AlbumPhoto(NULL);
    $ALBUM_PHOTO->album = $_POST['album'];
    $ALBUM_PHOTO->caption = $_POST['caption'];
    $ALBUM_PHOTO->image_name = $imgName;
    $ALBUM_PHOTO->create();
    //-- ** End Assign Post Params
    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}
//-- ** End Create Code Block
//--------------------------------------------------------------------------
//Start Update Code Block
if (isset($_POST['update'])) {
    //-- ** Start Edit Image in folder location
    $dir_dest = '../../../upload/photo-album/gallery/';
    $dir_dest_thumb = '../../../upload/photo-album/gallery/thumb/';
    $handle = new Upload($_FILES['image_name']);
    // $img = $_POST ["oldImageName"];

    $ALBUM_PHOTO = new AlbumPhoto($_POST['id']);
    $img = $ALBUM_PHOTO->image_name;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 900;
        $handle->image_y = 500;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $img = $handle->file_dst_name;
        }
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 270;
        $handle->image_y = 175;
        $handle->Process($dir_dest_thumb);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $img = $handle->file_dst_name;
        }
    }
//-- ** End Edit Image in folder location
//-- ** Start Assign Post Params  
    
    // $ALBUM_PHOTO->image_name = $_POST['oldImageName'];
    $ALBUM_PHOTO->caption = $_POST['caption'];
    $ALBUM_PHOTO->update(); 
   
    
    if ($ALBUM_PHOTO) {
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

    $ALBUM_PHOTO_OBJ = new AlbumPhoto(NULL);

    foreach ($_POST['sort'] as $key => $img) {

        $key = $key + 1;

        $res = $ALBUM_PHOTO_OBJ->arrange($key, $img);
        //-- ** End Assign Post Params
    }

    $result = [
        "status" => 'success'
    ];
    echo json_encode($result);
    exit();
}
//End arrange Code BlockF
//--------------------------------------------------------------------------
//-- ** Start delete code 
if ($_POST['option'] == 'delete') {
    $ALBUM_PHOTO = new AlbumPhoto($_POST['id']);
    unlink("../../../upload/photo-album/gallery/" . $ALBUM_PHOTO->image_name);
    unlink("../../../upload/photo-album/gallery/thumb/" . $ALBUM_PHOTO->image_name);
    $result = $ALBUM_PHOTO->delete();
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
        $ALBUM_PHOTO = AlbumPhoto::arrange($key, $img);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}