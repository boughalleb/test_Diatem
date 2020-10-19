<?php
class auth{
    private $id_email, $mdp, $nom, $prenom, $adresse, $codepostal, $ville, $pays,$connectionResource;
    
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

    

    public function insertUser($id_email, $mdp, $nom, $prenom, $adresse, $codepostal, $ville, $pays){
        if($this->existUser($id_email)==true){
            echo "Userame Already Taken";
            return;
        }

        $query="INSERT INTO auth(id_email,mdp,nom,prenom,adresse,codepostal,ville,pays) VALUES('$id_email','$mdp','$nom','$prenom','$adresse','$codepostal','$ville','$pays')";
 	    $run=mysqli_query($this->connectionResource,$query);
        if($run) echo "Inserted Successfully";
        else echo "Error: " . $query . "<br>" . mysqli_error($this->connectionResource);
    }
}   
?>