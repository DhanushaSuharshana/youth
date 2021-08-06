<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of coursePhoto
 *
 * @author Suharshana DsW
 */
class CoursePhoto {

    public $id;
    public $course;
    public $image_name;
    public $caption;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `course_photo` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->course = $result['course'];
            $this->image_name = $result['image_name'];
            $this->caption = $result['caption'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `course_photo` (`course`,`image_name`,`caption`,`queue`) VALUES  ('"
                . $this->course . "','"
                . $this->image_name . "', '"
                . $this->caption . "', '"
                . $this->queue . "')";
      
        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
             return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getByCourse($course) {

        $query = "SELECT * FROM `course_photo` WHERE `course` = '$course' ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function all() {

        $query = "SELECT * FROM `course_photo` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `course_photo` SET "
                . "`course` ='" . $this->course . "', "
                . "`image_name` ='" . $this->image_name . "', "
                . "`caption` ='" . $this->caption . "', "
                . "`queue` ='" . $this->queue . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $query = 'DELETE FROM `course_photo` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function     getcoursePhotosById($course) {

        $query = "SELECT * FROM `course_photo` WHERE `course`= $course ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function arrange($key, $img) {
        $query = "UPDATE `course_photo` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
