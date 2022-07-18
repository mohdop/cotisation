<?php

require_once('Membre.php');
class Foyer 
{
    private int $numLot;
    private Membre $membre;


    /**
     * Get the value of numLot
     */ 
    public function getNumLot()
    {
        return $this->numLot;
    }

    /**
     * Set the value of numLot
     *
     * @return  self
     */ 
    public function setNumLot($numLot)
    {
        $this->numLot = $numLot;

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
}

?>