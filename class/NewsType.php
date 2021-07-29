<?php

/**
 * Description of User
 *
 * @author Suharshana DsW
 * @web www.nysc.lk
 */
class NewsType {

    public $id;
    public $title; 
    public $queue;

    public function __construct($id) {

        if ($id) {

            $query = "SELECT * FROM `news_type` WHERE `id`=" . $id;
             
            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title'];  
            $this->queue = $result['queue'];

            return $result;
        }
    }

    public function create() {
        
        $query = "INSERT INTO `news_type` (`title`,`queue`) VALUES  ('"
                . $this->title . "','"
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
        $query = "SELECT * FROM `news_type`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }
        return $array_res;
    }

    
    public function update() {

        $query = "UPDATE  `news_type` SET "
                . "`title` ='" . $this->title . "', "   
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
   
        $query = 'DELETE FROM `news_type` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }
}
