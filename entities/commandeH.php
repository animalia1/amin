<?php
class commandeH1{
    private $datecreation;
    private $status;
    private $username;
    private $prixtotale;
    function __construct($datecreation,$status,$username,$prixtotale){
        $this->datecreation=$datecreation;
        $this->status=$status;
        $this->username=$username;
        $this->prixtotale=$prixtotale;
        
    }
 




    

   

    /**
     * Get the value of datecreation
     */ 
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set the value of datecreation
     *
     * @return  self
     */ 
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of prixtotale
     */ 
    public function getPrixtotale()
    {
        return $this->prixtotale;
    }

    /**
     * Set the value of prixtotale
     *
     * @return  self
     */ 
    public function setPrixtotale($prixtotale)
    {
        $this->prixtotale = $prixtotale;

        return $this;
    }
}

?>