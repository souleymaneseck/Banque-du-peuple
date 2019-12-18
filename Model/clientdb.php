<?php
require_once 'db.php';
function addClient($ID, $nom, $prenom, $adresse, $Numtel)
{
  $Numtel = 0;
  $sql= "INSERT INTO client VALUES(NULL ,$nom,$prenom, $adresse, $Numtel )";

  $conn = getConnection();

   return  $conn -> exec( $sql);
}
function updateClient($idC)
{
  $Numtel = false;
  $sql= "UPDATE client SET Numtel = 1 WHERE idC = $idC ";

  $conn = getConnection();

   return  $conn -> exec( $sql);
}

?>