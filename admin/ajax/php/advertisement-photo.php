<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//-- ** Start Create Code Block
if (isset($_POST['create'])) {
//-- ** Start Create Image   
    $dir_dest = '../../../upload/advertisement/gallery/';
    $dir_dest_thumb = '../../../upload/advertisement/gallery/thumb/';
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
    $ADVERTISEMENT_PHOTO = new AdvertisementPhoto(NULL);
    $ADVERTISEMENT_PHOTO->advertisement = $_POST['advertisement'];
    $ADVERTISEMENT_PHOTO->caption = $_POST['caption'];
    $ADVERTISEMENT_PHOTO->image_name = $imgName;
    $ADVERTISEMENT_PHOTO->create();
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
    $dir_dest = '../../../upload/advertisement/gallery/';
    $dir_dest_thumb = '../../../upload/advertisement/gallery/thumb/';
    $handle = new Upload($_FILES['image_name']);
    // $img = $_POST ["oldImageName"];

    $ADVERTISEMENT_PHOTO = new AdvertisementPhoto($_POST['id']);
    $img = $ADVERTISEMENT_PHOTO->image_name;

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
    
    // $ADVERTISEMENT_PHOTO->image_name = $_POST['oldImageName'];
    $ADVERTISEMENT_PHOTO->caption = $_POST['caption'];
    $ADVERTISEMENT_PHOTO->update(); 
   
    
    if ($ADVERTISEMENT_PHOTO) {
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


if (isset($_POST['arrange'])) {

    $OBJ = new AdvertisementPhoto(NULL);

    foreach ($_POST['sort'] as $key => $img) {

        $key = $key + 1;

        $res = $OBJ->arrange($key, $img);
        //-- ** End Assign Post Params
    }

    $result = [
        "status" => 'success'
    ];
    echo json_encode($result);
    exit();
}

if ($_POST['option'] == 'delete') {
    $ADVERTISEMENT_PHOTO = new AdvertisementPhoto($_POST['id']);
    unlink("../../../upload/advertisement/gallery/" . $ADVERTISEMENT_PHOTO->image_name);
    unlink("../../../upload/advertisement/gallery/thumb/" . $ADVERTISEMENT_PHOTO->image_name);
    $result = $ADVERTISEMENT_PHOTO->delete();
    //-- ** End Assign Post Params
    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}