<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//-- ** Start Create Code Block
if (isset($_POST['create'])) {
    //-- ** Start Create Image
    $dir_dest = '../../../upload/center/';
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
    //-- ** End Create Image
    //-- ** Start Assign Post Params
    $CENTRES = new Center(NULL);
    $CENTRES->name = $_POST['name'];
    $CENTRES->type = $_POST['type'];
    $CENTRES->district = $_POST['district'];
    $CENTRES->email = $_POST['email'];
    $CENTRES->image_name = $imgName;
    $CENTRES->contact1 = $_POST['contact1'];
    $CENTRES->contact2 = $_POST['contact2'];
    $CENTRES->map = $_POST['map'];
    $CENTRES->longitude = $_POST['longitude'];
    $CENTRES->latitude = $_POST['latitude'];

    $CENTRES->create();

    //-- ** End Assign Post Params
    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}
//-- ** Start Create Code Block
//--------------------------------------------------------------------------
//Start Update Code Block
if (isset($_POST['update'])) {
    //-- ** Start Edit Image in folder location
    $dir_dest = '../../../upload/center/';
    $handle = new Upload($_FILES['image_name']);
    $imgName = null;

    $CENTRES = new Center($_POST['id']);

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $CENTRES->image_name;
        $handle->image_x = 560;
        $handle->image_y = 638;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
    //-- ** End Edit Image in folder location
    //-- ** Start Assign Post Params
    $CENTRES->name = $_POST['name'];
    $CENTRES->type = $_POST['type'];
    $CENTRES->district = $_POST['district'];
    $CENTRES->email = $_POST['email'];
    $CENTRES->contact1 = $_POST['contact1'];
    $CENTRES->contact2 = $_POST['contact2'];
    $CENTRES->map = $_POST['map'];
    $CENTRES->longitude = $_POST['longitude'];
    $CENTRES->latitude = $_POST['latitude'];
    $res = $CENTRES->update();
    //-- ** End Assign Post Params
    if ($res) {
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
//-- ** Start delete code 
//--------------------------------------------------------------------------
if ($_POST['option'] == 'delete') {
    $CENTRES = new Center($_POST['id']);
    unlink("../../../upload/center/" . $CENTRES->image_name);
    $result = $CENTRES->delete();
    //-- ** End Assign Post Params
    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}