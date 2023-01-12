<?php
  //connexion à la base de données


  $conn = new mysqli('localhost', 'root', 'root','sql_partiel');
if($conn->connect_error){
    die('Connection failed: '.$conn->connect_error);
}else{
    $sql = "SELECT * FROM ajouter WHERE nom='$nom' LIMIT 1"; 
    $result = mysqli_query($conn, $sql);  // 
    $row = mysqli_fetch_assoc($result); 
    if (prenom_verify($pass, $row['prenom'])) {
        
        echo "Connection Reussie";
    } else {
        echo "Identifiants incorrects";
    }
  }

  ?>