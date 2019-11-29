<?php

include '../core/produitC.php';
$produit= new produitC();
$listproduit = $produit->afficherproduit();
?>
<table border="2">
    <style type="text/css">
        
img
{

width: 200px;
height:150px;
}

tr
{}

    </style>
<?php

foreach ($listproduit as $row)
{
    echo '
        <tr>

<tr>
            <td>Nom</td>
            <td>'.$row["nom"].'</td>
        </tr> 


          <tr>
            <td><img src="'.$row["image"].'"" width></td>
        </tr>
            <td>Id produit</td>
            <td>'.$row["IDProduit"].'</td>
        </tr>

        <tr>  
            <td>Nb produit</td> 
            <td>'.$row["nbProduit"].'</td>
        </tr>    
        <tr>
        <td>Prix</td>
            <td>'.$row["prix"].'</td>
            </tr>
            <tr>
            <td>Description</td>
            <td>'.$row["descrition"].'</td>
            </tr>
            <td>
                <form action="modifierproduit.php" method="get">
                    <input type="hidden" id="id" name="id" value="'.$row["IDProduit"].'">
                    <input type="hidden" id="nom" name="nom" value="'.$row["nom"].'">
                    <input type="hidden" id="nb" name="nb" value="'.$row["nbProduit"].'">
                    <input type="hidden" id="prix" name="prix" value="'.$row["prix"].'">
                    <input type="hidden" id="description" name="description" value="'.$row["descrition"].'">
                    <input type="hidden" id="image" name="image" value="'.$row["image"].'">
                    <input style="background-Color:yellow; border: none; color: blue; text-decoration: none;" type="submit" value="modifier">
                </form>
            </td>
<td>
<form method="POST" action="supprimerproduit.php">
    <input type="submit" name="supprimer" value="supprimer">
    <input type="hidden" value="'.$row['IDProduit'].'" name="id">
    </form>



</td>



        </tr>
    ';
}
?>
</table>
