<?php

include "../config.php";
class panierC
{
    function ajouterpanier($panier)
    {
        $sql= "insert into project.panier(type,CIN,IDProduit,IDService) values (:type,:CIN,:IDProduit,:IDService)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            
            $type=$panier->gettype();
            $CIN=$panier->getCIN();
            $IDProduit=$panier->getIDProduit();
            $IDService=$panier->getIDService();
            
          
            $req->bindValue(':type',$type);
            $req->bindValue(':CIN',$CIN);
            $req->bindValue(':IDProduit',$IDProduit);
            $req->bindValue(':IDService',$IDService);
          
            

            $req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur: Un panier avec ce refp existe deja');

        }

    
     }
function afficherpanier()
    {

        $sql="select * from project.panier order by IDProduit asc";

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
    function supprimerpanier($IDProduit){
        $sql="DELETE FROM panier where IDProduit=:IDProduit";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':IDProduit',$IDProduit);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
/*function modifierpanier($refp,$quantite)
    {
        $sql="update dbpatisserie.panier set quantite= '$quantite' where refp='$refp'";
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

*/
}