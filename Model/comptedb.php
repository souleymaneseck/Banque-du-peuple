<?php
require_once 'db.php';
function addCompte($NUM,$solde,$idC)
{
  $sql= "INSERT INTO compte VALUES(NULL ,$NUM,$solde,$idC)";

  $conn = getConnection();

   return  $conn -> exec( $sql);
}


?>