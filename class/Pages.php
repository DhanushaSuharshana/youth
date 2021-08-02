<?php

/**
 * Description of User
 *
 * @author Suharshana DsW
 * @web www.nysc.lk
 */
class Pages {

    public $id;
    public $title;
    public $sub_title;
    public $image_name;
    public $description;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT  * FROM `pages` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title'];
            $this->sub_title = $result['sub_title'];
            $this->image_name = $result['image_name'];
            $this->description = $result['description'];
        }
    }

    public function create() {

        $query = "INSERT INTO `pages` (`title`,`sub_title`,`image_name`,`description`) VALUES  ('"
                . $this->title . "', '"
                . $this->sub_title . "', '"
                . $this->image_name . "', '"
                . $this->description . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update() {

        $query = "UPDATE  `pages` SET "
                . "`title` ='" . $this->title . "',"
                . "`sub_title` ='" . $this->sub_title . "',"
                . "`image_name` ='" . $this->image_name . "',"
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

    public function all() {

        $query = "SELECT * FROM `pages`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function delete() {

        $query = 'DELETE FROM `pages` WHERE id="' . $this->id . '"';

        $db = new Database();
        return $db->readQuery($query);
    }

}
