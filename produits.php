<html>
<table>
    <tbody>  

<tr> <td> <h2> produit </h2> </td>  
<td> <h2> prix </h2> </td> 
</tr>

<?php
$produits['T-shirt rouge'] = '15.50';
$produits['T-shirt vert'] = '15.50';
$produits['T-shirt argent'] = '16.50';
$produits['short bleu'] = '19.99';
$produits['short vert'] = '19.99';
$produits['veste argent'] = '35';
    function afficher_produits($produits) {
    foreach ($produits as $cle => $valeur) {
    echo " <tr> <td> $cle </td> <td>$valeur </td> </tr>";
}
}
afficher_produits ($produits);
?>
    
    </tbody>
</table>