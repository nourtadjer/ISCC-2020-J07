<?php 
$historique_commandes= array("5.49", "9.99","5.49","15.99","25");
function afficher_commandes($h) {
    foreach ($h as $value) {
        echo "Une commande de $value euros a bien été reçu.". "</br>";
  }
}

afficher_commandes($historique_commandes);
function afficher_total($historique_commandes){
    echo "Le total des commandes est de " . array_sum($historique_commandes). "euros."."</br>";
}
afficher_total($historique_commandes);
?>

