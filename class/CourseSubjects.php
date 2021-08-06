<?php

/**
 * Description of User
 *
 * @author Suharshana DsW
 * @web www.nysc.lk
 */
class CourseSubjects {

    public $id;
    public $title;
    public $course_id;
    public $queue;

    public function __construct($id) {

        if ($id) {

            $query = "SELECT * FROM `course_subjects` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title'];
            $this->course_id = $result['course_id'];
            $this->queue = $result['queue'];

            return $result;
        }
    }

    public function create() {

        $query = "INSERT INTO `course_subjects` (`title`,`course_id`,`queue`) VALUES  ('"
                . $this->title . "','"
                . $this->course_id . "','"
                . $this->queue . "')";

        $db = new Database();
        $result = $db->readQuery($query);
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public static function getCount($course) {

        $query = "SELECT COUNT(id) as count FROM `course_subjects` WHERE course_id=".$course;

        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }
        return $array_res[0];
    }

    public function all() {

        $query = "SELECT * FROM `course_subjects`";

        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getCourseSubjectByCourseId($course_id) {

        $query = "SELECT * FROM `course_subjects` WHERE `course_id` = $course_id";
        
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `course_subjects` SET "
                . "`title` ='" . $this->title . "', "
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

        $query = 'DELETE FROM `course_subjects` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

}
