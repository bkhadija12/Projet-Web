<?php

include "../config.php";
class commandeC
{
    function ajoutercommande($commande)
    {
        $sql= "insert into project.commandes(IDCommande,CIN,prixTotal,etat,date) values (:IDCommande,:CIN,:prixTotal,:etat,:date)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            
            $IDCommande=$commande->getIDCommande();
            $prixTotal=$commande->getprixTotal();
            $CIN=$commande->getCIN();
            $etat=$commande->getetat();
            $date=$commande->getdate();

          
            $req->bindValue(':IDCommande',$IDCommande);
            $req->bindValue(':prixTotal',$prixTotal);
            $req->bindValue(':CIN',$CIN);
            $req->bindValue(':etat',$etat);
            $req->bindValue(':date',$date);

            $req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur: Une commande avec ce IDCommande existe deja');

        }

    
    }
     function affichercommande()
    {

        $sql="select * from project.commandes order by IDCommande where CIN=12345";

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
    
    function supprimercommande($IDCommande){
        $sql="DELETE FROM commande where IDCommande= :IDCommande";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':IDCommande',$IDCommande);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
    /*function modifiercommande($IDCommande,$CIN,$prixTotal,$etat,$date)
    {
        $sql="update project.commandes setprixTotal= '$prixTotal',CIN='$CIN', etat='$etat',date='$date' where IDCommande='$IDCommande'";
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
    function modifiercommande1($IDCommande,$etat)
    {
        $sql="update project.commandes set  etat='$etat' where IDCommande='$IDCommande'";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }*/


}