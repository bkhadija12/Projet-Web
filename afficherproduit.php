<?php

include '../core/produitC.php';/*pour chercher une fonction*/

$crim = new produitC();
$listcrim = $crim->afficherproduit();
?>
<table border="2">
    <tr>
      
        <td>Nom</td>
        <td>prix</td>
        <td>description</td>
        <td>nbProduit</td>
        <td>IDProduit</td>

    </tr>
<?php

foreach ($listcrim as $row)
{
    echo '
        <tr>
            
            <td>'.$row["nom"].'</td>
            <td>'.$row["prix"].'</td>
            <td>'.$row["description"].'</td>
            <td>'.$row["nbProduit"].'</td>
            <td>'.$row["IDProduit"].'</td>

            <td>
                <form action="ajouterpanier.php" method="post">
                    
                    <input type="hidden" id="type" name="type" value="produit">
                    <input type="hidden" id="CIN" name="CIN" value="0987663">
                    <input type="hidden" id="IDProduit" name="IDProduit" value="'.$row["IDProduit"].'" >
                    <input type="hidden" id="IDService" name="IDService" value="123">

                    <input style="background: none; border: none; color: black; text-decoration: underline;" type="submit" value="Acheter">
                </form>
            </td>
            
        </tr>
    ';
}
?>
</table>
