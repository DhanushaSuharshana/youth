<?php/** * Description of User * * @author Suharshana DsW * @web www.nysc.lk */class Leaders {    public $id;    public $name;    public $position;    public $email;    public $image_name;    public $facebook;    public $instagram;    public $linkdin;    public function __construct($id) {        if ($id) {            $query = "SELECT `id`,`name`,`position`,`email`,`image_name`,`facebook`,`instagram`,`linkdin` FROM `leaders` WHERE `id`=" . $id;                       $db = new Database();            $result = mysqli_fetch_array($db->readQuery($query));            $this->id = $result['id'];            $this->name = $result['name'];            $this->position = $result['position'];            $this->email = $result['email'];            $this->image_name = $result['image_name'];            $this->facebook = $result['facebook'];            $this->instagram = $result['instagram'];            $this->linkdin = $result['linkdin'];            return $result;        }    }    public function create() {                $query = "INSERT INTO `leaders` (`name`,`position`,`email`,`image_name`,`facebook`,`instagram`,`linkdin`) VALUES  ('"                . $this->name . "','"                . $this->position . "', '"                . $this->email . "', '"                . $this->image_name . "', '"                . $this->facebook . "', '"                . $this->instagram . "', '"                . $this->linkdin . "')";             $db = new Database();        $result = $db->readQuery($query);        if ($result) {            return TRUE;        } else {            return FALSE;        }    }    public function all() {        $query = "SELECT * FROM `leaders`";        $db = new Database();        $result = $db->readQuery($query);        $array_res = array();        while ($row = mysqli_fetch_array($result)) {            array_push($array_res, $row);        }        return $array_res;    }    public function update() {        $query = "UPDATE  `leaders` SET "                . "`name` ='" . $this->name . "', "                . "`position` ='" . $this->position . "', "                . "`image_name` ='" . $this->image_name . "', "                . "`facebook` ='" . $this->facebook . "', "                . "`instagram` ='" . $this->instagram . "', "                . "`linkdin` ='" . $this->linkdin . "' "                . "WHERE `id` = '" . $this->id . "'";        $db = new Database();        $result = $db->readQuery($query);        if ($result) {            return $this->__construct($this->id);        } else {            return FALSE;        }    }    public function delete() {        $query = 'DELETE FROM `leaders` WHERE id="' . $this->id . '"';        $db = new Database();        return $db->readQuery($query);    }}