<?php

/**
 * Description of User
 *
 * @author Suharshana DsW
 * @web www.nysc.lk
 */
class Pages
{

    public $id;
    public $title;
    public $page_type;
    public $url;
    public $sub_title;
    public $image_name;
    public $description;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT  * FROM `pages` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->url = $result['url'];
            $this->title = $result['title'];
            $this->sub_title = $result['sub_title'];
            $this->image_name = $result['image_name'];
            $this->description = $result['description'];
        }
    }

    public function getByUrl($url)
    {
        if ($url) {
            $query = "SELECT * FROM `pages` WHERE `url`='" . $url . "'";

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));
            if ($result) {
                $this->id = $result['id'];
                $this->url = $result['url'];
                $this->title = $result['title'];
                $this->page_type = $result['page_type'];
                $this->sub_title = $result['sub_title'];
                $this->image_name = $result['image_name'];
                $this->description = $result['description'];
            } else {
                return false;
            }
        }
    }

    public function create()
    {

        $query = "INSERT INTO `pages` (`url`,`title`,`page_type`,`sub_title`,`image_name`,`description`) VALUES  ('"
            . $this->url . "', '"
            . $this->title . "', '"
            . $this->page_type . "', '"
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

    public function update()
    {

        $query = "UPDATE  `pages` SET "
            . "`url` ='" . $this->url . "',"
            . "`title` ='" . $this->title . "',"
            . "`page_type` ='" . $this->page_type . "',"
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

    public function all()
    {

        $query = "SELECT * FROM `pages`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public static function getAll()
    {

        $query = "SELECT * FROM `pages`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function delete()
    {

        $query = 'DELETE FROM `pages` WHERE id="' . $this->id . '"';

        $db = new Database();
        return $db->readQuery($query);
    }
}
