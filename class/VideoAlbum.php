<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VideoAlbum
 *
 * @author Suharshana DsW
 */
class VideoAlbum {

    public $id;
    public $title;
    public $image_name; 
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `video_album` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title'];
            $this->image_name = $result['image_name']; 
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `video_album` (`title`,`image_name`,`queue`) VALUES  ('"
                . $this->title . "','"
                . $this->image_name . "', '" 
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

        $query = "SELECT * FROM `video_album` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `video_album` SET "
                . "`title` ='" . $this->title . "', "
                . "`image_name` ='" . $this->image_name . "', " 
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

        $this->deleteVideos();

        unlink(Helper::getSitePath() . "upload/video-album/" . $this->image_name);

        $query = 'DELETE FROM `video_album` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function deleteVideos() {

        $ALBUM_PHOTOS = new AlbumVideo(NULL);

        $allVideos = $ALBUM_PHOTOS->getAlbumVideosById($this->id);

        foreach ($allVideos as $video) {

            $IMG = $ALBUM_PHOTOS->image_name = $video["image_name"];
            unlink(Helper::getSitePath() . "upload/video-album/gallery/" . $IMG);
            unlink(Helper::getSitePath() . "upload/video-album/gallery/thumb/" . $IMG);

            $ALBUM_PHOTOS->id = $video["id"];
            $ALBUM_PHOTOS->delete();
        }
    }

    public function arrange($key, $img) {
        $query = "UPDATE `video_album` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
