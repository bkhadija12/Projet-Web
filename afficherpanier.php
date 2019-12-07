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
$D=date("Y-m-d H:i:s");


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
<form action="ajoutercommande.php"  method="post">
                   
                   
                    <input type="hidden" id="prixTotal" name="prixTotal" value="25">
          
                    <input type="hidden" id="etat" name="etat" value="EN ATTENTE DE CONFIRMATION">
                    <input type="hidden" id="date" name="date" value="<?php echo $D ?>">
                    <input type="hidden" id="CIN" name="CIN" value="0888">
                    <button style="position: relative;left: 830px ;bottom: 30px"><input style="background: none; border: none; color: red; text-decoration: underline;" type="submit" value="Passer commande"></button>
                </form>