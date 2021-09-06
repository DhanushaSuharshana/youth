<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of eventPhoto
 *
 * @author Suharshana DsW
 */
class PageNews
{

    public $id;
    public $page_id;
    public $title;
    public $image_name;
    public $short_description;
    public $description;
    public $queue;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT * FROM `page_news` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->page_id = $result['page_id'];
            $this->title = $result['title'];
            $this->image_name = $result['image_name'];
            $this->short_description = $result['short_description'];
            $this->description = $result['description'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create()
    {

        $query = "INSERT INTO `page_news` (`page_id`,`title`,`image_name`,`short_description`,`description`,`queue`) VALUES  ('"
            . $this->page_id . "','"
            . $this->title . "','"
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

    public function getPageNewsById($page_id)
    {

        $query = "SELECT * FROM `page_news` WHERE `page_id` = '$page_id' ORDER BY queue ASC";
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

        $query = "SELECT * FROM `page_news` ORDER BY queue ASC";
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

        $query = "UPDATE  `page_news` SET "
            . "`title` ='" . $this->title . "', "
            . "`image_name` ='" . $this->image_name . "', "
            . "`short_description` ='" . $this->short_description . "', "
            . "`description` ='" . $this->description . "', "
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

    public function delete()
    {

        $query = 'DELETE FROM `page_news` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

  

    public function arrange($key, $img)
    {
        $query = "UPDATE `page_news` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }
}
