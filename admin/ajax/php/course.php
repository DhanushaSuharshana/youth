<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//-- ** Start Create Code Block
if (isset($_POST['create'])) {
    //-- ** Start Create Image 
    $dir_dest = '../../../upload/courses/';
    $handle = new Upload($_FILES['image_name']);
    $imgName = null;
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 600;
        $handle->image_y = 485;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
    //-- ** End Create Image
    //-- ** Start Assign Post Params
    $COURSE = new course(NULL);
    $COURSE->course_type = $_POST['course_type'];
    $COURSE->name = ucwords($_POST['name']);
    $COURSE->max_student = $_POST['max_student'];
    $COURSE->level = $_POST['level'];
    $COURSE->languages = $_POST['languages'];
    $COURSE->duration = $_POST['duration'];
    $COURSE->start_date = $_POST['start_date'];
    $COURSE->short_description = $_POST['short_description'];
    $COURSE->description = $_POST['description'];
    $COURSE->image_name = $imgName;
    $COURSE->create();
    //-- ** End Assign Post Params
    if ($COURSE) {
        $result = ["status" => 'success'];
        echo json_encode($result);
        exit();
    } else {
        $result = ["status" => 'error'];
        echo json_encode($result);
        exit();
    }
}
//-- ** Start Create Code Block
//-----------------------------------
//Start Update Code Block
if (isset($_POST['update'])) {
    //-- ** Start Edit Image in folder location
    $dir_dest = '../../../upload/courses/';
    $handle = new Upload($_FILES['image_name']);
    $imgName = null;

    $COURSE = new Course($_POST['id']);
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $COURSE->image_name;
        $handle->image_x = 600;
        $handle->image_y = 440;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
    //-- ** End Edit Image in folder location
    //-- ** Start Assign Post Params  
    $COURSE->course_type = $_POST['course_type'];
    $COURSE->name = ucwords($_POST['name']);
    $COURSE->max_student = $_POST['max_student'];
    $COURSE->level = $_POST['level'];
    $COURSE->languages = $_POST['languages'];
    $COURSE->duration = $_POST['duration'];
    $COURSE->start_date = $_POST['start_date'];
    $COURSE->short_description = $_POST['short_description'];
    $COURSE->description = $_POST['description'];
    $COURSE->update();
    //-- ** End Assign Post Params
    if ($COURSE) {
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
//----------------------------------------
//-- ** Start delete code  
if ($_POST['option'] == 'delete') {
    $COURSE = new Course($_POST['id']);
    unlink("../../../upload/courses/" . $COURSE->image_name);
    $result = $COURSE->delete();
    //-- ** End Assign Post Params
    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
//Arange slider
if (isset($_POST['arrange'])) {
    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;
        // $COURSE = Course::arrange($key, $img);
        header('Location:../../../arrange-courses.php?message=9');
    }
} 