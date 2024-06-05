<?php
//include to config.php for connect to bdd//
include("config.php");
//extract the datas envoi via post dans index.html//
extract($_POST);
//creation de la requete sql d'insrtion//
$sql = "INSERT INTO `bdd`(`name`, `email`, `subject`, `msg`) VALUES ('".$name."','".$email."',".$subject.",'".$msg."')";
//execution de la requete sql//
$result = $mysqli->query($sql);
// la verification
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
echo "Thank You For Contacting Us ";
$mysqli->close();
?>