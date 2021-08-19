<?php

/**
 * Description of Product
 *
 * 
 *  
 */
class Contact
{
    public $id;
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;
  
    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT  * FROM `contact` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->email = $result['email'];
            $this->phone = $result['phone'];
            $this->subject = $result['subject'];
            $this->message = $result['message'];
        
        }
    }

    public function create()
    {
        $query = "INSERT INTO `contact` (`name`,`email`,`phone`,`subject`, `message`) VALUES  ('"
            . $this->name . "', '"
            . $this->email . "', '"
            . $this->phone . "', '"
            . $this->subject . "', '"
            . $this->message . "')";

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

        $query = "SELECT * FROM `contact` ORDER BY `queue` ASC";
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
        $query = "UPDATE `contact` SET `queue` = '" . $key . "'  WHERE id ='" . $img . "'";

        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }


    public function delete()
    {

        $query = 'DELETE FROM `contact` WHERE id="' . $this->id . '"';

        $db = new Database();
        return $db->readQuery($query);
    }
}
