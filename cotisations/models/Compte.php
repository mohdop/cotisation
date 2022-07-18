<?php
require_once('Admin.php');
require_once('Depense.php');
require_once('Membre.php');
class Compte
{
    private int $idCompte;
    private Admin $admin;
    private Membre $membre;
    private array $versement;
    
    /**
     * Get the value of versement
     */ 
    public function getVersement()
    {
        return $this->versement;
    }

    /**
     * Set the value of versement
     *
     * @return  self
     */ 
    public function setVersement($versement)
    {
        $this->versement = $versement;

        return $this;
    }

    /**
     * Get the value of membre
     */ 
    public function getMembre()
    {
        return $this->membre;
    }

    /**
     * Set the value of membre
     *
     * @return  self
     */ 
    public function setMembre($membre)
    {
        $this->membre = $membre;

        return $this;
    }

    /**
     * Get the value of admin
     */ 
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set the value of admin
     *
     * @return  self
     */ 
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get the value of idCompte
     */ 
    public function getIdCompte()
    {
        return $this->idCompte;
    }

    /**
     * Set the value of idCompte
     *
     * @return  self
     */ 
    public function setIdCompte($idCompte)
    {
        $this->idCompte = $idCompte;

        return $this;
    }
    
}


?>