<?php

/**
 * Description of pageCharacters
 *
 * @author Suharshana DsW
 */
class PageCharacter {

    public $id;
    public $page;
    public $image_name;
    public $name;
    public $designation;
    public $contact_no;
    public $email;
    public $facebook;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `page_character` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->page = $result['page'];
            $this->image_name = $result['image_name'];
            $this->name = $result['name'];
            $this->designation = $result['designation'];
            $this->contact_no = $result['contact_no'];
            $this->email = $result['email'];
            $this->facebook = $result['facebook'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `page_character` (`page`,`image_name`,`name`,`designation`,`contact_no`,`email`,`facebook`,`queue`) VALUES  ('"
                . $this->page . "','"
                . $this->image_name . "', '"
                . $this->name . "', '"
                . $this->designation . "', '"
                . $this->contact_no . "', '"
                . $this->email . "', '"
                . $this->facebook . "', '"
                . $this->queue . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `page_character` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `page_character` SET "
                . "`image_name` ='" . $this->image_name . "', "
                . "`name` ='" . $this->name . "', "
                . "`designation` ='" . $this->designation . "', "
                . "`contact_no` ='" . $this->contact_no . "', "
                . "`email` ='" . $this->email . "', "
                . "`facebook` ='" . $this->facebook . "', "
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

        $query = 'DELETE FROM `page_character` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getPageCharactersById($page) {

        $query = "SELECT * FROM `page_character` WHERE `page`= $page ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function arrange($key, $img) {
        $query = "UPDATE `page_character` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
