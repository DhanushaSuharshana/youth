<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//-- ** Start Create Code Block
if (isset($_POST['create'])) {
//-- ** Start Create Image   
    $dir_dest = '../../../upload/courses/gallery/';
    $dir_dest_thumb = '../../../upload/courses/gallery/thumb/';
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
        $handle->image_x = 880;
        $handle->image_y = 560;
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
        $handle->image_x = 360;
        $handle->image_y = 230;
        $handle->Process($dir_dest_thumb);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
    //-- ** End Create Image 
    //-- ** Start Assign Post Params
    $COURSE_PHOTO = new CoursePhoto(NULL);
    $COURSE_PHOTO->course = $_POST['course'];
    $COURSE_PHOTO->caption = $_POST['caption'];
    $COURSE_PHOTO->image_name = $imgName;
    $COURSE_PHOTO->create();
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
    $dir_dest = '../../../upload/courses/gallery/';
    $dir_dest_thumb = '../../../upload/courses/gallery/thumb/';
    $handle = new Upload($_FILES['image_name']);
    // $img = $_POST ["oldImageName"];

    $COURSE_PHOTO = new CoursePhoto($_POST['id']);
    $img = $COURSE_PHOTO->image_name;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 880;
        $handle->image_y = 560;
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
        $handle->image_x = 360;
        $handle->image_y = 230;
        $handle->Process($dir_dest_thumb);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $img = $handle->file_dst_name;
        }
    }
//-- ** End Edit Image in folder location
//-- ** Start Assign Post Params  
    
    // $COURSE_PHOTO->image_name = $_POST['oldImageName'];
    $COURSE_PHOTO->caption = $_POST['caption'];
    $COURSE_PHOTO->update(); 
   
    
    if ($COURSE_PHOTO) {
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
//-- ** Start delete code 
if ($_POST['option'] == 'delete') {
    $COURSE_PHOTO = new CoursePhoto($_POST['id']);
    unlink("../../../upload/courses/gallery/" . $COURSE_PHOTO->image_name);
    unlink("../../../upload/courses/gallery/thumb/" . $COURSE_PHOTO->image_name);
    $result = $COURSE_PHOTO->delete();
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
        $COURSE_PHOTO = EventPhoto::arrange($key, $img);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}