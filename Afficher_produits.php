<?php
    require 'mysql_connect.php';
    /*echo "<table border =1>";
    echo "<tr>";
    echo "<td>NumProduit</td>";
    echo "<td>Libelle</td>";
    echo "<td>CodeGamme</td>";
    echo "<td>Poids</td>";
    echo "<td>Prix</td>";
    echo "</tr>";


    try{
    $strSQL="SELECT NumProduit,Libelle,CodeGamme,Poids,Prix FROM Produit";

        foreach($db->query($strSQL) as $row){
            echo "<tr>";
            echo "<td>".$row['NumProduit']. "</td>"; 
            echo "<td>".$row['Libelle']."</td>";
            echo "<td>".$row['CodeGamme']."</td>";
            echo "<td>".$row['Poids']."</td>";
            echo "<td>".$row['Prix']."</td>";
            echo "<br/>";
            echo "</tr>";
        
        }
    }catch(PDOException $e){//erreur de co
        print "Erreur : ".$e->getMessage();
        die();
    }
    
    echo "</table>";*/
?>
    
    
    
    <?php
    if (!$verif || !isset($_GET['sub'])){
?>
    
        

