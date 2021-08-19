<?php

/**
 * Description of Product
 *
 * 
 *  
 */
class Event
{

    public $id;
    public $title;
    public $date;
    public $location;
    public $address;
    public $image_name;
    public $short_description;
    public $description;
    public $queue;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT  * FROM `event` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title'];
            $this->date = $result['date'];
            $this->location = $result['location'];
            $this->address = $result['address'];
            $this->image_name = $result['image_name'];
            $this->short_description = $result['short_description'];
            $this->description = $result['description'];
            $this->queue = $result['queue'];
        }
    }

    public function create()
    {



        $query = "INSERT INTO `event` (`title`,`date`,`location`,`address`, `image_name`,`short_description`,`description`,`queue`) VALUES  ('"
            . $this->title . "', '"
            . $this->date . "', '"
            . $this->location . "', '"
            . $this->address . "', '"
            . $this->image_name . "', '"
            . $this->short_description . "', '"
            . $this->description . "', '"
            . $this->queue . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getEventByInstitute($institute)
    {

        $query = "SELECT  * FROM `event` WHERE `institute` = '" . $institute . "'";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update()
    {

        $query = "UPDATE  `event` SET "
            . "`title` ='" . $this->title . "',"
            . "`date` ='" . $this->date . "',"
            . "`location` ='" . $this->location . "',"
            . "`address` ='" . $this->address . "',"
            . "`image_name` ='" . $this->image_name . "',"
            . "`short_description` ='" . $this->short_description . "',"
            . "`description` ='" . $this->description . "' "
            . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }


    public function getOrderDate()
    {
        $query = "SELECT * FROM `event` ORDER BY `date` DESC LIMIT 10";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function all()
    {

        $query = "SELECT * FROM `event` ORDER BY `queue` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }


    public function arrange($key, $img)
    {
        $query = "UPDATE `event` SET `queue` = '" . $key . "'  WHERE id ='" . $img . "'";

        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }


    public function delete()
    {

        $query = 'DELETE FROM `event` WHERE id="' . $this->id . '"';

        $db = new Database();
        return $db->readQuery($query);
    }
}
