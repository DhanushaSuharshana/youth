<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AlbumVideo
 *
 * @author Suharshana DsW
 */
class AlbumVideo {

    public $id;
    public $album;
    public $url;
    public $image_name;
    public $caption;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `album_video` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->album = $result['album'];
            $this->url = $result['url'];
            $this->image_name = $result['image_name'];
            $this->caption = $result['caption'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `album_video` (`album`,`url`,`image_name`,`caption`,`queue`) VALUES  ('"
                . $this->album . "','"
                . $this->url . "','"
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

        $query = "SELECT * FROM `album_video` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `album_video` SET "
                . "`album` ='" . $this->album . "', "
                . "`url` ='" . $this->url . "', "
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

        $query = 'DELETE FROM `album_video` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function     getAlbumVideosById($album) {

        $query = "SELECT * FROM `album_video` WHERE `album`= $album ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function arrange($key, $img) {
        $query = "UPDATE `album_video` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
