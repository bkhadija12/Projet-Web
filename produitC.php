<?php

include "../config.php";
class produitC
{
    function afficherproduit()
    {

        $sql="select * from project.produits order by nom asc";

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
}