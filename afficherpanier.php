<?php

include '../core/produitsC.php';/*pour chercher une fonction*/

$crim = new panierC();
$listcrim = $crim->afficherpanier();
?>
<table border="2">
    <tr>
      
        <td>IDproduit</td>
        <td>type</td>
        <td>cin</td>
        <td>IDservice</td>
       

    </tr>
<?php

foreach ($listcrim as $row)
{
    echo '
        <tr>
            
            <td>'.$row["IDProduit"].'</td>
            <td>'.$row["type"].'</td>
            <td>'.$row["CIN"].'</td>
            <td>'.$row["IDService"].'</td>
            

            <td>
                <form action="supprimerpanier.php" method="get">
                    
                   
                    <input type="hidden" id="IDProduit" name="IDProduit" value="'.$row["IDProduit"].'" >
             

                    <input style="background: none; border: none; color: black; text-decoration: underline;" type="submit" value="Supprimer">
                </form>
            </td>
            
        </tr>
    ';
}
?>
</table>