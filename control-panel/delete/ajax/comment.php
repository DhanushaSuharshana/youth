<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

if ($_POST['option'] == 'delete') {

    $COMMENT = new Comments($_POST['id']);

    unlink('../../../upload/comments/' . $COMMENT->image_name);

    $result = $COMMENT->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}