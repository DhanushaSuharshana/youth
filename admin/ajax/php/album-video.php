<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//-- ** Start Create Code Block
if (isset($_POST['create'])) {
//-- ** Start Create Image   
    $dir_dest = '../../../upload/video-album/gallery/';
    $dir_dest_thumb = '../../../upload/video-album/gallery/thumb/';
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
    $ALBUM_VIDEO = new AlbumVideo(NULL);
    $ALBUM_VIDEO->album = $_POST['album'];
    $ALBUM_VIDEO->url = $_POST['url'];
    $ALBUM_VIDEO->caption = $_POST['caption'];
    $ALBUM_VIDEO->image_name = $imgName;
    $ALBUM_VIDEO->create();
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
    $dir_dest = '../../../upload/video-album/gallery/';
    $dir_dest_thumb = '../../../upload/video-album/gallery/thumb/';
    $handle = new Upload($_FILES['image_name']);
    // $img = $_POST ["oldImageName"];

    $ALBUM_VIDEO = new AlbumVideo($_POST['id']);
    $img = $ALBUM_VIDEO->image_name;

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
    
    // $ALBUM_VIDEO->image_name = $_POST['oldImageName'];
    $ALBUM_VIDEO->caption = $_POST['caption'];
    $ALBUM_VIDEO->url = $_POST['url'];
    $ALBUM_VIDEO->update(); 
   
    
    if ($ALBUM_VIDEO) {
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

    $ALBUM_VIDEO_OBJ = new AlbumVideo(NULL);

    foreach ($_POST['sort'] as $key => $img) {

        $key = $key + 1;

        $res = $ALBUM_VIDEO_OBJ->arrange($key, $img);
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
    $ALBUM_VIDEO = new AlbumVideo($_POST['id']);
    unlink("../../../upload/video-album/gallery/" . $ALBUM_VIDEO->image_name);
    unlink("../../../upload/video-album/gallery/thumb/" . $ALBUM_VIDEO->image_name);
    $result = $ALBUM_VIDEO->delete();
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
        $ALBUM_VIDEO = AlbumVideo::arrange($key, $img);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}