<?php
require_once('Compte.php');
require_once('Depense.php');

class Admin extends User {
    private Compte $compte;
   

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
     * Get the value of compte
     */ 
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * Set the value of compte
     *
     * @return  self
     */ 
    public function setCompte($compte)
    {
        $this->compte = $compte;

        return $this;
    }
}
?>