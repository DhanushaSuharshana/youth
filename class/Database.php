<?php

/**

 * Description of User

 *

 * @author Suharshana DsW

 * @web www.nysc.lk

 * */
class Database
{

    //    private $host = 'localhost';
    //    private $name = 'suhatdux_auroralanka';
    //    private $user = 'suhatdux_auroralanka';
    //   private $password = 'iE,@lxE0HGWr';


    private $host = 'localhost';
    private $name = 'youth';
    private $user = 'root';
    private $password = '';
    public $DB_CON = NULL;

    // private $host = 'localhost';
    // private $name = 'slysmjhg_youth';
    // private $user = 'slysmjhg_youth';
    // private $password = 'ip*q=5BHU#Uk';
    // public $DB_CON = NULL;

    public function __construct()
    {

        $this->DB_CON = mysqli_connect($this->host, $this->user, $this->password, $this->name);
    }

    public function readQuery($query)
    {
        $result = mysqli_query($this->DB_CON, $query) or die(mysqli_error($this->DB_CON));

        return $result;
    }
}
