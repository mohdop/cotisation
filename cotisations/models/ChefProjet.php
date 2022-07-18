<?php
require_once('Depense.php');

class ChefProjet
{
    private int $idChefProjet;
    private String $nom;
    private String $Prenom;
    private array $depenses;

    /**
     * Get the value of depenses
     */ 
    public function getDepenses()
    {
        return $this->depenses;
    }

    /**
     * Set the value of depenses
     *
     * @return  self
     */ 
    public function setDepenses($depenses)
    {
        $this->depenses = $depenses;

        return $this;
    }

    
    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

   

    /**
     * Get the value of Prenom
     */ 
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set the value of Prenom
     *
     * @return  self
     */ 
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    /**
     * Get the value of idChefProjet
     */ 
    public function getIdChefProjet()
    {
        return $this->idChefProjet;
    }

    /**
     * Set the value of idChefProjet
     *
     * @return  self
     */ 
    public function setIdChefProjet($idChefProjet)
    {
        $this->idChefProjet = $idChefProjet;

        return $this;
    }
}

?>