<?php
#connection establish
include 'user.php';


$id_email=$_POST['id_email'];
$mdp=$_POST['mdp'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$codepostal=$_POST['codepostal'];
$ville=$_POST['ville'];
$pays=$_POST['pays'];



$auth=new auth;
$auth->insertUser($id_email,$mdp, $nom, $prenom, $adresse, $codepostal, $ville, $pays);
/*
if(isset($_POST['submit']))
{
 	$nameInfo=$_POST['name'];
 	$emailInfo=$_POST['email'];
 	$passwordInfo=$_POST['password'];
 	$query="INSERT INTO user_table(name,email,password) VALUES('$nameInfo','$emailInfo','$passwordInfo')";
 	$run=mysqli_query($connectionResource,$query);
 	if($run)
 	{
 		echo "Inserted Successfully";
 	}
 	else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}
 
}
mysqli_close($connectionResource);
*/
?>