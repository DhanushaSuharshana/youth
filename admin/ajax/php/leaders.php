<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//-- ** Start Create Code Block
if (isset($_POST['create'])) {
    //-- ** Start Create Image
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
    //-- ** End Create Image
    //-- ** Start Assign Post Params
    $LEADERS = new Leaders(NULL);
    $LEADERS->name = $_POST['name'];
    $LEADERS->position = $_POST['position'];
    $LEADERS->email = $_POST['email'];
    $LEADERS->facebook = $_POST['facebook'];
    $LEADERS->instagram = $_POST['instagram'];
    $LEADERS->linkdin = $_POST['linkdin'];
    $LEADERS->image_name = $imgName;
    $LEADERS->create();
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
    $dir_dest = '../../../upload/leader/';
    $handle = new Upload($_FILES['image_name']);
    $imgName = null;

    $LEADER = new Leaders($_POST['id']);

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $LEADER->image_name;
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
    $LEADER->name = $_POST['name'];
    $LEADER->position = $_POST['position'];
    $LEADER->email = $_POST['email'];
    $LEADER->facebook = $_POST['facebook'];
    $LEADER->instagram = $_POST['instagram'];
    $LEADER->linkdin = $_POST['linkdin'];
    $res = $LEADER->update();
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
  
    $LEADER = new Leaders($_POST['id']);
  
    $result =  $LEADER->delete();
 //-- ** End Assign Post Params
    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}