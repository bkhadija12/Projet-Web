<?php
// including database connection
include '../config.php';
?>

<html>
<head><title>Base De Donneès!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<style></style>
</head>
html>
<body onload="window.print()">
<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=dbproject;charset=utf8", "root", "");
 $produits = $bdd->query('SELECT * FROM produits ORDER BY IDProduit ');

while($prod = $produits->fetch())
{
    echo '


                    
                        <div class="col-sm-6 col-lg-6 col-xl-4">
                            <div class="shop_grid">
                                <div class="thumb text-center">
                                <div class="zoom">
                                <div class="image">
                                <img src="'.$prod['image'].'" > 
                                </div>
                                </div>  
                                </div>
                                <div class="details float-left">
                                    <h4 class="price">'.$prod["prix"].'</h4>
                                    <h4 class="item-tile">'.$prod["nom"].'</h4>
                                    <h6 class="item-tile">'.$prod["descrition"].'</h6>
                                </div>
                                <form method="POST" action="page-shop-single.php">
<input type="hidden" id="id" name="id" value="'.$prod["IDProduit"].'">
                    <input type="hidden" id="nom" name="nom" value="'.$prod["nom"].'">
                    <input type="hidden" id="nb" name="nb" value="'.$prod["nbProduit"].'">
                    <input type="hidden" id="prix" name="prix" value="'.$prod["prix"].'">
                    <input type="hidden" id="description" name="description" value="'.$prod["descrition"].'">
                    <input type="hidden" id="image" name="image" value="'.$prod["image"].'">
                                <div class="cart_bag float-right"><span><input class="flaticon-shopping-bag" type="submit" name="a" value="."></span></div>
                                </form>
                            </div>
                        </div>

        ';



        }
        ?>

</body>
</html>
