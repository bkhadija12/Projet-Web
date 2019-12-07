<?php

include '../core/commandeC.php';

$crim = new commandeC();
$listcrim = $crim->affichercommande();
?>
<table border="2">
    <tr>
      
        <td>IDCommande</td>
        <td>prix</td>
        <td>description</td>
        <td>quantite</td>
        <td>annulation</td>

    </tr>
    <?php

foreach ($listcrim as $row)
{
    echo '
        <tr>
            
            <td>'.$row["IDCommande"].'</td>
            <td>'.$row["prixTotal"].'</td>
            <td>'.$row["etat"].'</td>
            <td>'.$row["CIN"].'</td>
            <td>'.$row["date"].'</td>

            <td>
                <form action="supprimercommande.php" method="get">
                    
                    <input type="hidden" id="etat" name="etat" value="confirmer">
                    <input type="hidden" id="CIN" name="CIN" value="0987663">
                    <input type="hidden" id="IDCommande" name="IDCommande" value="'.$row["IDCommande"].'" >
                    <input type="hidden" id="date" name="date" value="'.$row["date"].'">

                    <input style="background: none; border: none; color: red; text-decoration: underline;" type="submit" value="Supprimer">
                </form>
            </td>
            
        </tr>
    ';
}
?>

</table>