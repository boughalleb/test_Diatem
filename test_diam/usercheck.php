<?php
class auth{
    private $id_email, $mdp,$connectionResource;
    
    function __construct() {

        include 'db.php';
        $this->connectionResource = db::connect();
    }

    function existUser($username){
        $result=mysqli_query($this->connectionResource, "SELECT count(*) as total from auth where id_email='$id_email'");
        $data=mysqli_fetch_assoc($result);
        if($data['total']>0)return true;
        return false;
    }

    function checkpass($password){
        $passc=mysqli_query($this->connectionResource, "SELECT count(*) as total from auth where id_email='$id_email'");
        $data=mysqli_fetch_assoc($passc);
        if($data['total']>0)return true;
        return false;
      }

    public function insertUser($id_email, $mdp){
        if($this->existUser($id_email)==true){
            if($this->checkpass($mdp)==true){
              echo "Logged In";
            }
            return;
        }

     echo "Login Faild";

    }
}
?>
