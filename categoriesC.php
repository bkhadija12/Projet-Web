
<?php
include "../config.php";
include '../entities/categories.php';
class categorieC
{
    
    function ajoutercategories($categorie)
    {
        $sql= "insert into dbproject.categories(IDCategorie,nom,type) values (:IDCategorie,:nom,:type)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);

            $id=$produit->getIDCategorie();
            $nom=$produit->getnom();
            $type=$produit->gettype();
           

            $req->bindValue(':IDCategorie',$id);
            $req->bindValue(':nom',$nom);
            $req->bindValue(':type',$type);
            
            $req->execute();

        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }

    }



function affichercategorie()
     {

        $sql="select * from dbproject.categories order by IDCategorie asc";

        $db = config::getConnexion();
       try
        {
            $list=$db->query($sql);
            return $list;
         }
         catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
     }
    
    function modifiercategorie($id,$nom,$nbproduit,$prix,$description,$image)
    {
        $sql="update dbproject.produits set nom= '$nom', nbProduit='$nbproduit', prix='$prix',descrition='$description',image='$image' where IDProduit= '$id'";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }

        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

         function supprimecategorie($id)
     {
        $sql="DELETE FROM `dbproject`.`produits` WHERE `IDProduit` LIKE '$id' ESCAPE '#'";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    





    
}

?>