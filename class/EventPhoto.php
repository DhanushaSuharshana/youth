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
class EventPhoto {

    public $id;
    public $event;
    public $image_name;
    public $caption;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `event_photo` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->event = $result['event'];
            $this->image_name = $result['image_name'];
            $this->caption = $result['caption'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `event_photo` (`event`,`image_name`,`caption`,`queue`) VALUES  ('"
                . $this->event . "','"
                . $this->image_name . "', '"
                . $this->caption . "', '"
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

        $query = "SELECT * FROM `event_photo` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `event_photo` SET "
                . "`event` ='" . $this->event . "', "
                . "`image_name` ='" . $this->image_name . "', "
                . "`caption` ='" . $this->caption . "', "
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

        $query = 'DELETE FROM `event_photo` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getEventPhotosById($event) {

        $query = "SELECT * FROM `event_photo` WHERE `event`= $event ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function arrange($key, $img) {
        $query = "UPDATE `event_photo` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
