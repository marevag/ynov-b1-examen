<?php


function getPdo(): PDO
{
  try {
    
    $pdo = new PDO(
      "mysql:host=localhost;dbname=partiel",
      "b1info",
      "uSZX2o6hcTVZO9s0"
    );
    return $pdo;
  } catch(PDOException $ex) {
   
    exit("Erreur lors de la connexion à la base de données");
  }
}