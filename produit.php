<?php


class produit
{
    private $idproduit;
    private $nom;
    private $nbproduit;
    private $prix;
    private $description;
    private $image;


    function __construct($idproduit,$nom,$nbproduit,$prix,$description,$image)
    {
        $this->nom=$nom;
        $this->nbproduit=$nbproduit;
        $this->prix=$prix;
        $this->description=$description;
         $this->idproduit=$idproduit;
         $this->image=$image;
    }


public function setimage($image)
    {
        $this->image = $image;
    }





  
   public function setidproduit($idproduit)
    {
        $this->idproduit = $idproduit;
    }




    public function setnom($nom)
    {
        $this->nom = $nom;
    }

  
    public function setnbproduit($nbproduit)
    {
        $this->prenom = $nbproduit;
    }

    public function setprix($prix)
    {
        $this->prix= $prix;
    }


  
    public function setdescription($description)
    {
        $this->description= $description;
    }

   

    
    public function getidproduit()
    {
        return $this->idproduit;
    }
  
    public function getnom()
    {
        return $this->nom;
    }

   
    public function getnbproduit()
    {
        return $this->nbproduit;
    }


  function getprix()
    {
        return $this->prix;
    }

    public function getdescription()
    {
        return $this->description;
    }

      public function getimage()
    {
        return $this->image;
    }


}