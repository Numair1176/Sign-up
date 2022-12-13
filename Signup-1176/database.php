<?php

class numair76{
    private $username = "root";
    private $password = "";
    private $url = "localhost";
    private $database = "numair";
    private $db;

    function __construct(){
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=numair76",$this->username,$this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            print('conn');
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    function create_user($un,$pwd){
        $sql = "INSERT INTO `numair` (`uid` , `uname` , `upass` , `time`) VALUES (NULL, \"$un\", \"$pwd\" , current_timestamp());";
        $this->db->exec($sql);        
    }

    function signin($un,$pwd){
        $sql = "SELECT uid FROM numair WHERE uname = \"$un\" AND upass = \"$pwd\";";
        $data = $this->db->query($sql);
        $uid = $data->fetch;
        if(!$uid){
            print('Failed');
        }
        else{
            print($uid[0]);
        }
    }


}

?>