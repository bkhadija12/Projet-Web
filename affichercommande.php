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
      
 ?>    
    
        <tr>
            
            <td><?php echo $row["IDCommande"] ?></td>
            <td><?php echo $row["prixTotal"] ?></td>
            <td><?php echo $row["etat"] ?></td>
            <td><?php echo $row["CIN"] ?></td>
            <td><?php echo $row["date"] ?></td>
            <td>
                <form action="supprimercommande.php" method="get">
                    
          <input type="hidden" id="IDCommande" name="IDCommande" value="<?php echo $row["IDCommande"] ?>">
                   
                    <input style="background: none; border: none; color: red; text-decoration: underline;" type="submit" value="Supprimer">
                </form>
            </td>
            
       
            
        </tr>
       
    <?php
}
  
?>
</table>