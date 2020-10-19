<?php
#connection establish
include 'usercheck.php';

$id_email=$_POST['id_email'];
$mdp=$_POST['mdp'];




$auth=new auth;
$auth->insertUser($id_email,$mdp);
