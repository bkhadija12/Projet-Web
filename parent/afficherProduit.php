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
            <td><img src="'.$row["image"].'"></td>
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
               


</td>



        </tr>


        <br>
<br><br>
<br><br>
<br><br>
<br>
    ';
}
?>
</table>
