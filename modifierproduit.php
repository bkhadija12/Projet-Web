<?php

    $id=$_GET["id"];
    $nom=$_GET["nom"];
    $nb=$_GET["nb"];
    $prix=$_GET["prix"];
    $description=$_GET["description"];
    $image=$_GET["image"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>modifier produit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<script type="text/javascript">
	
	function test()
	{
if(document.myform.id.length==0)
{

alert("modification erronée dans le champ id");
document.myform.id.style.background-Color="red";


}
if(document.myform.id.length==0)
{

alert("modification erronée dans le champ nom");
document.myform.id.style.background-Color="red";


}

if(document.myform.id.length==0)
{

alert("modification erronée dans le champ nom");
document.myform.id.style.background-Color="red";


}

}



</script>






<h1>modifier criminel</h1>
<form  name="myform" method="post" action="modif.php" >
    <table>
        <tr>
            <td><label for="idoh">Id produit</label></td>

            <td><input type="text"  name="id" value="<?php echo $id?>"></td>
      

        </tr>
        <tr>
            <td><label for="nom">nom</label></td>
            <td><input type="text" id="nom" name="nom" value="<?php echo $nom ?>"></td>
        </tr>
        <tr>
            <td><label for="nbk">Nb produit</label></td>
            <td><input type="text" id="nbproduit" name="nbproduit" value="<?php echo $nb ?>"></td>
        </tr>
        <tr>
            <td><label for="pri">prix</label></td>
            <td><input type="text" id="prix" name="prix" value="<?php echo $prix ?>"></td>
        </tr>
        <tr>
            <td><label for="desc">description</label></td>
            <td>
                <input type="text" id="description" name="description" value="<?php echo $description ?>">
            </td>
        </tr>
         <tr>
             
            <td><input type="file" name="image" value="image"></td>
        
        </tr>
        <tr>
            <td><input type="submit" name="modifier" value="Modifier"></td>
        </tr>
    </table>
</form>

</body>
</html>

