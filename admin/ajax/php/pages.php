<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//-- ** Start Create Code Block
if (isset($_POST['create'])) {
    //-- ** Start Create Image
    $dir_dest = '../../../upload/page/';
    $handle = new Upload($_FILES['image_name']);
    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 600;
        $handle->image_y = 440;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $bannerImgName = '';
    if (!empty($_FILES['banner_image_name'])) {
        $banner_handle = new Upload($_FILES['banner_image_name']);
        $dir_dest_banner = '../../../upload/page/banner/';
        if ($banner_handle->uploaded) {
            $banner_handle->image_resize = true;
            $banner_handle->file_new_name_ext = 'jpg';
            $banner_handle->image_ratio_crop = 'C';
            $banner_handle->file_new_name_body = Helper::randamId();
            $banner_handle->image_x = 1920;
            $banner_handle->image_y = 600;
            $banner_handle->Process($dir_dest_banner);
            if ($banner_handle->processed) {
                $info = getimagesize($banner_handle->file_dst_pathname);
                $bannerImgName = $banner_handle->file_dst_name;
            }
        }
    }

    //-- ** End Create Image
    //-- ** Start Assign Post Params
    $PAGES = new Pages(NULL);
    $PAGES->url = $_POST['url'];
    $PAGES->title = $_POST['title'];
    $PAGES->page_type = $_POST['page_type'];
    $PAGES->sub_title = $_POST['sub_title'];
    $DB = new Database();
    $PAGES->description = mysqli_real_escape_string($DB->DB_CON,$_POST['description']);
    $PAGES->image_name = $imgName;
    $PAGES->banner_image_name = $bannerImgName;
    $PAGES->create();
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
    $dir_dest = '../../../upload/page/';
    $handle = new Upload($_FILES['image_name']);
    $imgName = null;

    $PAGES = new Pages($_POST['id']);
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $PAGES->image_name;
        $handle->image_x = 600;
        $handle->image_y = 440;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $bannerImgName = $PAGES->banner_image_name;
    if (!empty($_FILES['banner_image_name'])) {
        $banner_handle = new Upload($_FILES['banner_image_name']);
        $dir_dest_banner = '../../../upload/page/banner/';
        if ($banner_handle->uploaded) {
            $banner_handle->image_resize = true;
            (empty($bannerImgName)) ? $banner_handle->file_new_name_ext = 'jpg' : $banner_handle->file_new_name_ext = FALSE;;
            $banner_handle->file_new_name_body = TRUE;
            $banner_handle->file_overwrite = TRUE;
            $banner_handle->image_ratio_crop = 'C';
            $banner_handle->file_new_name_body = (!empty($bannerImgName)) ? $bannerImgName : Helper::randamId();
            $banner_handle->image_x = 1920;
            $banner_handle->image_y = 600;
            $banner_handle->Process($dir_dest_banner);
            if ($banner_handle->processed) {
                $info = getimagesize($banner_handle->file_dst_pathname);
                $bannerImgName = $banner_handle->file_dst_name;
            }
        }
    }
    //-- ** End Edit Image in folder location
    //-- ** Start Assign Post Params
    $PAGES->url = $_POST['url'];
    $PAGES->title = $_POST['title'];
    $PAGES->page_type = $_POST['page_type'];
    $PAGES->sub_title = $_POST['sub_title'];
    $PAGES->banner_image_name = $bannerImgName;
    $DB = new Database();
    $PAGES->description = mysqli_real_escape_string($DB->DB_CON,$_POST['description']);
    $PAGES->update();

    //-- ** End Assign Post Params
    if ($PAGES) {
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
//--------------------------------------------------------------------------
if (isset($_POST['option'])) {
    if ($_POST['option'] == 'delete') {
        $PAGES = new Pages($_POST['id']);
        unlink("../../../upload/page/" . $PAGES->image_name);
        if (!empty($PAGES->banner_image_name)) {
            unlink("../../../upload/page/banner/" . $PAGES->banner_image_name);
        }
        $result = $PAGES->delete();
        //-- ** End Assign Post Params
        if ($result) {
            $data = array("status" => TRUE);
            header('Content-type: application/json');
            echo json_encode($data);
        }
    }
}
