<?php
//add conctructors and methods
class Client
{
  private $CIN; 
  private $nom;
  private $prenom;
  private $tel;
  private $email;
  private $nb_enfant; 
  private $situationFam; 
  private $adresse; 
  private $fonction; 
  private $MDP;

public function __construct() 
    {
     
        $this->openConnection();

    }


  

    public function openConnection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project";
        // Create connection
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getCIN()
    {
        return $this->CIN;
    }
    public function setCIN($CIN)
    {
        $this->CIN = $CIN;

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

   
    public function getPrenom()
    {
        return $this->prenom;
    }

   
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

  
    public function getTel()
    {
        return $this->tel;
    }


    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

   
    public function getEmail()
    {
        return $this->email;
    }

 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

  
    public function getNbEnfant()
    {
        return $this->nb_enfant;
    }

 
    public function setNbEnfant($nb_enfant)
    {
        $this->nb_enfant = $nb_enfant;

        return $this;
    }
    public function getSituationFam()
    {
        return $this->situationFam;
    }
    public function setSituationFam($situationFam)
    {
        $this->situationFam = $situationFam;

        return $this;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

  
    public function getFonction()
    {
        return $this->fonction;
    }
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }
    public function getMDP()
    {
        return $this->MDP;
    }

    public function setMDP($MDP)
    {
        $this->MDP = $MDP;

        return $this;
    }


        public function closeConnection()
    {
        $this->conn->close();
    }

    public function modifier()
    {
        $sql = "UPDATE clients SET nom='".    $this->getNom()  ."', prenom='".  $this->getPrenom()  ."', tel='".   $this->getNumTel() ."', email='". $this->getEmail() ."', nb_enfants='". $this->getNbEnfant() ."' , situationFam='".  $this->getSituationFam()  ."', adresse='".  $this->getAdresse()  ."', fonction='".  $this->getFonction() ."' , MDP='".  $this->getMDP()  ."' WHERE CIN='".$this->getCIN() ."'";

        if ($this->conn->query($sql) === TRUE) {
            header('Location: ../views/page-update.html');
        
        
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function ajouter()
    {
        $sql = "INSERT INTO clients (CIN ,nom, prenom, tel, email, nb_enfant, situationFam, adresse, fonction, MDP)
        VALUES ('".$this->getCin() ."', '".    $this->getNom()  ."', '".  $this->getPrenom()  ."', '".   $this->getTel() ."', '".   $this->getEmail() ."','".   $this->getNbEnfant() ."','".   $this->getSituationFam() ."','".   $this->getAdresse() ."','".   $this->getFonction() ."', '". $this->getMDP() ."')";
        
        if ($this->conn->query($sql) === TRUE) {
            header('Location: ../views/page-login.html');
        
        
        } else {
           
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
    public function afficher()
    {

        $sql = "SELECT * FROM clients "; 
        $result= $this->conn->query($sql);
    
        return $result;
    }

    public function supprimer()
    {
        $sql = "DELETE FROM clients  WHERE CIN='".$this->getCIN() ."'";
        if ($this->conn->query($sql) === TRUE) {
            header('Location: ../views/page-afficher-supprimer.php');
        
        
        } else {
           
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function getById()
    {
      $sql = "SELECT * FROM clients  WHERE CIN='".$this->getCIN() ."'"; 
   
        $result= $this->conn->query($sql);
    
        return $result;
    }
}
?>