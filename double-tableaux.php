<html>
<?php
$tableau1 = array('T-shirt rouge' ," 15,50", "5");
$tableau2 = array('T-shirt vert', "15,50", "6");
$tableau3 = array('T-shirt argent', "15.50","8");
$tableau4 = array('short bleu'," 16,50", "5");
$tableau5 = array('short vert', "19,99", "5");
$tableau6 = array('veste argent', "19,99", "10");
$tableau7 = array('veste argent', "35", "3"); 
$panier = array($tableau1, $tableau2,$tableau3,$tableau4,$tableau5,$tableau6,$tableau7,);
function afficher_panier ($panier)
{ 

    $prixtotal=0;
    foreach ($panier as $article )
{ $prixtotal=$prixtotal+ $article [2];
     echo "<ul>";
     echo "<li>". $article[0]."</li>";
     echo "<li>".$article[1]."</li>";
     echo "<li>".$article[2]."</li>";
     echo "</ul>";
}
    echo "<p>". $prixtotal. "</p>";
    return $prixtotal;
}
      echo "<table>";
      afficher_panier($panier);
      echo "</table>"
?>
</html>