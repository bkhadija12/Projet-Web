
<?php
include "../config.php";
class produitC
{
    
    function ajouterProduit($produit)
    {
        $sql= "insert into dbproject.produits(IDProduit,nom,nbProduit,prix,descrition,image) values (:IDProduit,:nom,:nbProduit,:prix,:descrition,:image)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);

            $id=$produit->getidproduit();
            $nom=$produit->getnom();
            $nb=$produit->getnbproduit();
            $prix=$produit->getprix();
            $description=$produit->getdescription();
            $image=$produit->getimage();

            $req->bindValue(':IDProduit',$id);
            $req->bindValue(':nom',$nom);
            $req->bindValue(':nbProduit',$nb);
            $req->bindValue(':prix',$prix);
            $req->bindValue(':descrition',$description);
            $req->bindValue(':image',$image);
            $req->execute();

        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }

    }



function afficherproduit()
    {

        $sql="select * from dbproject.produits order by nbProduit asc";

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
    
    function modifierProduit($id,$nom,$nbproduit,$prix,$description,$image)
    {
        $sql="update dbproject.produits set nom= '$nom', nbProduit='$nbproduit', prix='$prix',descrition='$description' image='$image' where IDProduit= '$id'";
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

         function supprimerproduit($id)
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