<?php

/**
 * Description of User
 *
 * @author Suharshana DsW
 * @web www.nysc.lk
 */
class Booking_M
{

    public $id;
    public $property;
    public $full_name;
    public $hours;
    public $date;
    public $time;
    public $telephone_1;
    public $telephone_2;
    public $email;
   

    public function __construct($id)
    {

        if ($id) {

            $query = "SELECT * FROM `booking` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->property = $result['property'];
            $this->full_name = $result['full_name'];
            $this->time = $result['time'];
            $this->date = $result['date'];
            $this->hours = $result['hours'];
     
            $this->telephone_1 = $result['telephone_1'];
            $this->telephone_2 = $result['telephone_2'];
            $this->email = $result['email'];

            return $result;
        }
    }

    public function create()
    {
        $query = "INSERT INTO `booking` (`property`, `full_name`, `email`, `hours`, `date`, `time`, `telephone_1`, `telephone_2`) VALUES  ('"
            . $this->property . "','"
            . $this->full_name . "','"
            . $this->email . "','"
            . $this->hours . "','"
            . $this->date . "','"
            . $this->time . "','"
            . $this->telephone_1 . "','"
           
            . $this->telephone_2 . "')";

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
        $query = "SELECT * FROM `booking`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }
        return $array_res;
    }

    // public function allForApply()
    // {
    //     $query = "SELECT * FROM `booking` WHERE `type` IN(1,3)";
    //     $db = new Database();
    //     $result = $db->readQuery($query);
    //     $array_res = array();
    //     while ($row = mysqli_fetch_array($result)) {

    //         array_push($array_res, $row);
    //     }
    //     return $array_res;
    // }

    // public function getCeterCoursesCount($id)
    // {
    //     $query = "SELECT COUNT(id) as count FROM `course_by_bookings` WHERE `booking_id`=" . $id;
    //     $db = new Database();
    //     $result = $db->readQuery($query);
    //     $array_res = array();
    //     while ($row = mysqli_fetch_array($result)) {

    //         array_push($array_res, $row);
    //     }
    //     return $array_res[0];
    // }

    // public function update()
    // {

    //     $query = "UPDATE  `booking` SET "
    //         . "`course_id` ='" . $this->course_id . "', "
    //         . "`type` ='" . $this->type . "', "
    //         . "`date` ='" . $this->date . "', "
    //         . "`first_name` ='" . $this->first_name . "', "
    //         . "`last_name` ='" . $this->last_name . "', "
    //         . "`nic` ='" . $this->nic . "', "
    //         . "`gender` ='" . $this->gender . "', "
    //         . "`address` ='" . $this->address . "', "
    //         . "`email` ='" . $this->email . "', "
    //         . "`mobile_number` ='" . $this->mobile_number . "' "
    //         . "WHERE `id` = '" . $this->id . "'";

    //     $db = new Database();
    //     $result = $db->readQuery($query);
    //     if ($result) {
    //         return $this->__construct($this->id);
    //     } else {
    //         return FALSE;
    //     }
    // }

    // public function delete()
    // {
    //     $query = 'DELETE FROM `booking` WHERE id="' . $this->id . '"';
    //     $db = new Database();
    //     return $db->readQuery($query);
    // }
}
