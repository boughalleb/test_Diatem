<?php
# connection oriented
class db{
    public function connect(){
        $connectionResource=mysqli_connect("localhost","root","");
        mysqli_select_db($connectionResource,"diatem_wiem");
        if(!$connectionResource)
        {
            die("connection failed".mysqli_connect_error());
        }
        else
        echo "Connection Successful";
        return $connectionResource;
    }
    function __constructor(){
    }
}

?>