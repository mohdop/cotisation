<?php

require_once("../cotisations/views/connexion.php");
require_once("../cotisations/database/db.php");
class User{
    protected  int $idUser;
    protected String $nomUser;
    protected String $prenomUser;
    protected String $email;
    protected String $passswords;
    protected int $num;


    /**
     * Get the value of idUser
     */ 
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set the value of idUser
     *
     * @return  self
     */ 
    public function setIdUser($idUser){
        return $this;
    }

    /**
     * Get the value of nomUser
     */ 
    public function getNomUser()
    {
        return $this->nomUser;
    }

    /**
     * Set the value of nomUser
     *
     * @return  self
     */ 
    public function setNomUser($nomUser)
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    /**
     * Get the value of prenomUser
     */ 
    public function getPrenomUser()
    {
        return $this->prenomUser;
    }

    /**
     * Set the value of prenomUser
     *
     * @return  self
     */ 
    public function setPrenomUser($prenomUser)
    {
        $this->prenomUser = $prenomUser;

        return $this;
    }

   
    /**
     * Get the value of passsword
     */ 
    public function getPasssword()
    {
        return $this->passsword;
    }

    /**
     * Set the value of passsword
     *
     * @return  self
     */ 
    public function setPasssword($passsword)
    {
        $this->passsword = $passsword;

        return $this;
    }
    
    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
   

    /**
     * Get the value of num
     */ 
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set the value of num
     *
     * @return  self
     */ 
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    } public function inscription($nomUser,$prenomUser,$login,$passswords,$num){
       
// Check connection

        $sql = "INSERT INTO User (passwords,prenom, nom, email, numTel ) VALUES ('$passswords','$prenomUser', '$nomUser', '$login', '$num')";
        mysqli_query($conn,$sql);
    }
    public function connexion($motdepasse,$num){
      
        
    }
}
?>


