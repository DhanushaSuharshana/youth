<?php

/**
 * Description of Product
 *
 * 
 *  
 */
class News
{

    public $id;
    public $news_type;
    public $title;
    public $date;
    public $image_name;
    public $short_description;
    public $description;
    public $queue;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT  * FROM `news` WHERE `id`=" . $id;
            $db = new Database();
            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->news_type = $result['news_type'];
            $this->title = $result['title'];
            $this->date = $result['date'];
            $this->image_name = $result['image_name'];
            $this->short_description = $result['short_description'];
            $this->description = $result['description'];
            $this->queue = $result['queue'];
        }
    }

    public function create()
    {

        $query = "INSERT INTO `news` (`news_type`,`title`,`date`, `image_name`,`short_description`,`description`,`queue`) VALUES  ('"
            . $this->news_type . "', '"
            . $this->title . "', '"
            . $this->date . "', '"
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
        $query = "SELECT  * FROM `news` WHERE `institute` = '" . $institute . "'";
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

        $query = "UPDATE  `news` SET "
            . "`news_type` ='" . $this->news_type . "',"
            . "`title` ='" . $this->title . "',"
            . "`date` ='" . $this->date . "',"
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
        $query = "SELECT * FROM `news` ORDER BY `date` DESC";
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
        $query = "SELECT * FROM `news` ORDER BY `queue` ASC";
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
        $query = "UPDATE `news` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

    public function delete()
    {
        $query = 'DELETE FROM `news` WHERE id="' . $this->id . '"';
        $db = new Database();
        return $db->readQuery($query);
    }
}