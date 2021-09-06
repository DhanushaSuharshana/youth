<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//-- ** Start Create Code Block
if (isset($_POST['create'])) {
//-- ** Start Create Image   
    $dir_dest = '../../../upload/page/news/';
    $dir_dest_thumb = '../../../upload/page/news/thumb/';
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
        $handle->image_x = 300;
        $handle->image_y = 300;
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
        $handle->image_x = 450;
        $handle->image_y = 450;
        $handle->Process($dir_dest_thumb);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
    //-- ** End Create Image 
    //-- ** Start Assign Post Params
    $PAGE_NEWS = new PageNews(NULL);
    $PAGE_NEWS->page_id = $_POST['page_id'];
    $PAGE_NEWS->title = $_POST['title'];
    $PAGE_NEWS->description = $_POST['description'];
    $PAGE_NEWS->short_description = $_POST['short_description'];
  
    $PAGE_NEWS->image_name = $imgName;
    $PAGE_NEWS->create();
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
    $dir_dest = '../../../upload/page/news/';
    $dir_dest_thumb = '../../../upload/page/news/thumb/';
    $handle = new Upload($_FILES['image_name']);
    // $img = $_POST ["oldImageName"];

    $PAGE_NEWS = new PageNews($_POST['id']);
    $img = $PAGE_NEWS->image_name;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 300;
        $handle->image_y = 300;
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
        $handle->image_x = 450;
        $handle->image_y = 450;
        $handle->Process($dir_dest_thumb);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $img = $handle->file_dst_name;
        }
    }
//-- ** End Edit Image in folder location
//-- ** Start Assign Post Params  
    // $PAGE_NEWS->image_name = $_POST['oldImageName'];
    // $PAGE_NEWS->page_id = $_POST['page_id'];
    $PAGE_NEWS->title = $_POST['title'];
    $PAGE_NEWS->description = $_POST['description'];
    $PAGE_NEWS->short_description = $_POST['short_description'];
    $PAGE_NEWS->update();

    if ($PAGE_NEWS) {
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
//

if (isset($_POST['arrange'])) {

    $PAGE_NEWS = new PageNews(NULL);

    foreach ($_POST['sort'] as $key => $img) {

        $key = $key + 1;

        $res = $PAGE_NEWS->arrange($key, $img);
        //-- ** End Assign Post Params
    }

    $result = [
        "status" => 'success'
    ];
    
    echo json_encode($result);
    exit();
}

//
//-- ** Start delete code 
if ($_POST['option'] == 'delete') {
    $PAGE_NEWS = new PageNews($_POST['id']);
    unlink("../../../upload/page/news/" . $PAGE_NEWS->image_name);
    unlink("../../../upload/page/news/thumb/" . $PAGE_NEWS->image_name);
    $result = $PAGE_NEWS->delete();
    //-- ** End Assign Post Params
    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}

