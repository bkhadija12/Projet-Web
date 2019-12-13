<?php


class categorie
{
    private $IDCategorie;
    private $nom;
    private $type;
    
    function __construct($nom,$type){
        $this->nom=$nom;
        $this->type=$type;

    }

  
   public function setIDCategorie($IDCategorie)
    {
        $this->IDCategorie = $IDCategorie;
    }




    public function setnom($nom)
    {
        $this->nom = $nom;
    }

  
    public function settype($type)
    {
        $this->type = $type;
    }

    

   

    
    public function getIDCategorie()
    {
        return $this->IDCategorie;
    }
  
    public function getNom()
    {
        return $this->nom;
    }

   
    public function getType()
    {
        return $this->nbproduit;
    }

}