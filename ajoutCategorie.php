
<?php

include "../core/categoriesC.php";
include "../entities/categories.php";


if(isset($_POST['nom']) and isset($_POST['type']))

	{
		echo " trgvfefr";
        $categorie=new categorie($_POST['nom'],$_POST['type']);
        echo " trgvfefr";
       $cc= new categorieC();
       echo " trgvfefr";
        $cc->ajoutercategories($categorie);

echo " trgvfefr";
	}
else
{
echo "youpii";




//header("location:page_membre.php");
}














?>