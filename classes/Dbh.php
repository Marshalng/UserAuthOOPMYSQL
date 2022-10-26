<?php
class Dbh {

public $hostname = "localhost";
public $username = "root";
public $password = "";
public $dbname= "zuriphp";

function  __construct($hostname,$username,$password,$dbname)
{
    $this->hostname = $hostname;
    $this->username  = $username;
    $this->password = $password;
    $this->dbname = $dbname;
}
protected function connect($hostname,$username,$password,$dbname){
   // $conn = mysqli_connect($host, $user, $password, $db);
    //$con = mysqli_connect($hostname,$username,$password,$dbname);
    $con = new mysqli($this->hostname,$this->username,$this->password,$this->dbname);
    if (!$con){
       // echo "Database Connection Failed :" . "$con->connect_error";
        echo "Database Connection Failed :" . "$con->connect_error";
    }
    return $con;
}

}

