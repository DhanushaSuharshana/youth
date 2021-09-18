 

<?php

/**
 * Description of Product
 *
 * 
 *  
 */
class Advertisement
{

    public $id;
    public $url;
    public $title;
    public $date;
    public $image_name;
    public $short_description;
    public $description;
    public $queue;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT  * FROM `advertisement` WHERE `id`=" . $id;
            $db = new Database();
            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->url = $result['url'];
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

        $query = "INSERT INTO `advertisement` (`url`,`title`,`date`, `image_name`,`short_description`,`description`,`queue`) VALUES  ('"
            . $this->url . "', '"
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

    public function update()
    {

        $query = "UPDATE  `advertisement` SET "
            . "`url` ='" . $this->url . "',"
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
        $query = "SELECT * FROM `advertisement` ORDER BY `date` DESC";
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
        $query = "SELECT * FROM `advertisement` ORDER BY `queue` ASC";
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
        $query = "UPDATE `advertisement` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

    public function delete()
    {
        $query = 'DELETE FROM `advertisement` WHERE id="' . $this->id . '"';
        $db = new Database();
        return $db->readQuery($query);
    }
}
