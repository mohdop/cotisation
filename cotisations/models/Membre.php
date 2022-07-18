<?php


require_once("Adresse.php");
require_once("Compte.php");


class Membre extends User
{
    private int $idMembre;
    private string $payDeLocalisation;
    private array  $foyer ;
    private Compte $compte;


    /**
     * Get the value of numTel
     */ 
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * Set the value of numTel
     *
     * @return  self
     */ 
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;

        return $this;
    }

    /**
     * Get the value of payDeLocalisation
     */ 
    public function getPayDeLocalisation()
    {
        return $this->payDeLocalisation;
    }

    /**
     * Set the value of payDeLocalisation
     *
     * @return  self
     */ 
    public function setPayDeLocalisation($payDeLocalisation)
    {
        $this->payDeLocalisation = $payDeLocalisation;

        return $this;
    }

    /**
     * Get the value of idMembre
     */ 
    public function getIdMembre()
    {
        return $this->idMembre;
    }

    /**
     * Set the value of idMembre
     *
     * @return  self
     */ 
    public function setIdMembre($idMembre)
    {
        $this->idMembre = $idMembre;

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

    /**
     * Get the value of foyer
     */ 
    public function getFoyer()
    {
        return $this->foyer;
    }

    /**
     * Set the value of foyer
     *
     * @return  self
     */ 
    public function setFoyer($foyer)
    {
        $this->foyer = $foyer;

        return $this;
    }
}

?>