<?php

/**
 * Description of User
 *
 * @author Suharshana DsW
 * @web www.nysc.lk
 */
class ApplyOnline
{

    public $id;
    public $center_id;
    public $course_id;
    public $first_name;
    public $last_name;
    public $full_name;
    public $nic;
    public $gender;
    public $dob;
    public $address_line_1;
    public $address_line_2;
    public $address_line_3;
    public $district;
    public $telephone_1;
    public $telephone_2;
    public $email;
    public $ol;
    public $al;

    public function __construct($id)
    {

        if ($id) {

            $query = "SELECT * FROM `apply_online` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->course_id = $result['course_id'];
            $this->type = $result['type'];
            $this->date = $result['date'];
            $this->first_name = $result['first_name'];
            $this->last_name = $result['last_name'];
            $this->nic = $result['nic'];
            $this->gender = $result['gender'];
            $this->address = $result['address'];
            $this->mobile_number = $result['mobile_number'];
            $this->email = $result['email'];
            $this->message = $result['message'];

            return $result;
        }
    }

    public function create()
    {
        $query = "INSERT INTO `apply` (`center_id`, `course_id`, `first_name`, `last_name`, `full_name`, `nic`, `gender`, `dob`, `address_line_1`, `address_line_2`, `address_line_3`, `district`, `telephone_1`, `telephone_2`, `email`, `ol`, `al`) VALUES  ('"
            . $this->center_id . "','"
            . $this->course_id . "','"
            . $this->first_name . "', '"
            . $this->last_name . "', '"
            . $this->full_name . "', '"
            . $this->nic . "', '"
            . $this->gender . "', '"
            . $this->dob . "', '"
            . $this->address_line_1 . "', '"
            . $this->address_line_2 . "', '"
            . $this->address_line_3 . "', '"
            . $this->district . "', '"
            . $this->telephone_1 . "', '"
            . $this->telephone_2 . "', '"
            . $this->email . "', '"
            . $this->ol . "', '"
            . $this->al . "')";

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
        $query = "SELECT * FROM `apply_online`";
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
        $query = "SELECT * FROM `apply_online` WHERE `type` IN(1,3)";
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
        $query = "SELECT COUNT(id) as count FROM `course_by_apply_onlines` WHERE `apply_online_id`=" . $id;
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

        $query = "UPDATE  `apply_online` SET "
            . "`course_id` ='" . $this->course_id . "', "
            . "`type` ='" . $this->type . "', "
            . "`date` ='" . $this->date . "', "
            . "`first_name` ='" . $this->first_name . "', "
            . "`last_name` ='" . $this->last_name . "', "
            . "`nic` ='" . $this->nic . "', "
            . "`gender` ='" . $this->gender . "', "
            . "`address` ='" . $this->address . "', "
            . "`email` ='" . $this->email . "', "
            . "`mobile_number` ='" . $this->mobile_number . "' "
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
        $query = 'DELETE FROM `apply_online` WHERE id="' . $this->id . '"';
        $db = new Database();
        return $db->readQuery($query);
    }
}
