<?php

/**
 * Description of Product
 *
 * 
 *  
 */
class NewsLetter
{
    public $id;
    public $email;


    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT  * FROM `news_letter` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->email = $result['email'];
        }
    }

    public function create()
    {
        $query = "INSERT INTO `news_letter` (`email`) VALUES  ('"

            . $this->email . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function all()
    {
        $query = "SELECT * FROM `news_letter` ORDER BY `queue` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function byEmail($email)
    {
        $query = "SELECT * FROM `news_letter` WHERE email = '" . $email . "'";
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
        $query = "UPDATE `news_letter` SET `queue` = '" . $key . "'  WHERE id ='" . $img . "'";

        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }


    public function delete()
    {

        $query = 'DELETE FROM `news_letter` WHERE id="' . $this->id . '"';

        $db = new Database();
        return $db->readQuery($query);
    }
}
