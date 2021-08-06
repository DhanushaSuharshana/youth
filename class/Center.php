<?php

/**
 * Description of User
 *
 * @author Suharshana DsW
 * @web www.nysc.lk
 */
class Center
{

    public $id;
    public $name;
    public $type;
    public $district;
    public $image_name;
    public $email;
    public $contact1;
    public $contact2;
    public $map;
    public $longitude;
    public $latitude;
    public $queue;

    public function __construct($id)
    {

        if ($id) {

            $query = "SELECT `id`,`name`,`type`,`district`,`image_name`,`email`,`contact1`,`contact2`,`map`,`longitude`,`latitude`,`queue` FROM `center` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->type = $result['type'];
            $this->district = $result['district'];
            $this->image_name = $result['image_name'];
            $this->email = $result['email'];
            $this->contact1 = $result['contact1'];
            $this->contact2 = $result['contact2'];
            $this->map = $result['map'];
            $this->latitude = $result['latitude'];
            $this->longitude = $result['longitude'];
            $this->queue = $result['queue'];

            return $result;
        }
    }

    public function create()
    {
        $query = "INSERT INTO `center` (`name`,`type`,`district`,`image_name`,`email`,`contact1`,`contact2`,`map`,`latitude`,`longitude`,`queue`) VALUES  ('"
            . $this->name . "','"
            . $this->type . "', '"
            . $this->district . "', '"
            . $this->image_name . "', '"
            . $this->email . "', '"
            . $this->contact1 . "', '"
            . $this->contact2 . "', '"
            . $this->map . "', '"
            . $this->longitude . "', '"
            . $this->latitude . "', '"
            . $this->queue . "')";

        $db = new Database();
        $result = $db->readQuery($query);
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function all()
    {
        $query = "SELECT * FROM `center`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function allForApply()
    {
        $query = "SELECT * FROM `center` WHERE `type` IN(1,3)";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getCeterCoursesCount($id)
    {
        $query = "SELECT COUNT(id) as count FROM `course_by_centers` WHERE `center_id`=".$id;
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }
        return $array_res[0];
    }

    public function update()
    {

        $query = "UPDATE  `center` SET "
            . "`name` ='" . $this->name . "', "
            . "`type` ='" . $this->type . "', "
            . "`district` ='" . $this->district . "', "
            . "`image_name` ='" . $this->image_name . "', "
            . "`email` ='" . $this->email . "', "
            . "`contact1` ='" . $this->contact1 . "', "
            . "`contact2` ='" . $this->contact2 . "', "
            . "`map` ='" . $this->map . "', "
            . "`longitude` ='" . $this->longitude . "', "
            . "`latitude` ='" . $this->latitude . "' "
            . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();
        $result = $db->readQuery($query);
        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete()
    {
        $query = 'DELETE FROM `center` WHERE id="' . $this->id . '"';
        $db = new Database();
        return $db->readQuery($query);
    }
}
