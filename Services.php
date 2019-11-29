<?php
 //add conctructors and methods
 class Services
 {
  
  private  $IDService; 
  private $nom;
  private $description;
  private $prix;
  private $IDPromotion;
  private $nbplace;
  private $type;
  private $dateInscription;
  

 public function __construct() 
    {
     
        $this->openConnection();

    }


    public function openConnection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "base_criminels";
        // Create connection
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function closeConnection()
    {
        $this->conn->close();
    }
   
    public function getIDService()
    {
        return $this->IDService;
    }

   
    public function setIDService($ID_service)
    {
        $this->ID_service = $IDService;

        return $this;
    }


    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

  
    public function getPrix()
    {
        return $this->prix;
    }

  
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

  
    public function getIDPromotion()
    {
        return $this->IDPromotion;
    }
    public function setIDPromotion($IDPromotion)
    {
        $this->IDPromotion = $IDPromotion;

        return $this;
    }

  public function getNbplace()
    {
        return $this->nbplace;
    }

   
    public function setNbplace($nbplace)
    {
        $this->nbplace = $nbplace;

        return $this;
    }

  
    public function getType()
    {
        return $this->type;
    }

   
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getDateInscription()
    {
        return $this->dateInscription;
    }

   
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

public function ajouter()
    {
        $sql = "INSERT INTO services (ID_service ,nom, description, prix, IDPromotion, type, dateInscription)
        VALUES ('".$this->getNom() ."', '".    $this->getDescription()  ."', '".  $this->getPrenom()  ."', '".   $this->getPrix() ."', '".   $this->getIDPromotion() ."','".   $this->getType() ."','".   $this->getDateInscription() ."')";
        
        /*if ($this->conn->query($sql) === TRUE) {
            header('Location: afficher.php');
        
        
        } else {
            header('Location: ../views/exist.html');
            //echo "Error: " . $sql . "<br>" . $this->conn->error;
        }*/
    }

  public function modifier()
    {
        $sql = "UPDATE services SET nom='".    $this->getNom()  ."', description='".  $this->getDescription()  ."', prix='".   $this->getPrix() ."', IDPromotion='". $this->getIDPromotion() ."', type='". $this->getType() ."' , dateInscription='".  $this->getDateInscription()  ."' WHERE IDService='".$this->getIDService() ."'";

        if ($this->conn->query($sql) === TRUE) {
            //header('Location: afficher.php');
        
        
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

  public function afficher()
    {

        $sql = "SELECT * FROM services "; 
        $result= $this->conn->query($sql);
    
        return $result;
    }
  public function supprimer()
    {
        $sql = "DELETE FROM services  WHERE IDService='".$this->getIDService() ."'";
    }
    
}
?>
