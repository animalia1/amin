<?php
class panier{
    private $produitid1;
    private $prix1;
    private $quantity1;
    private $commandeid1;
    function __construct($produitid1,$prix1,$quantity1,$commandeid1){
        $this->produitid1=$produitid1;
        $this->prix1=$prix1;
        $this->quantity1=$quantity1;
        $this->commandeid1=$commandeid1;
    }
 


    

    /**
     * Get the value of produitid1
     */ 
    public function getProduitid1()
    {
        return $this->produitid1;
    }

    /**
     * Set the value of produitid1
     *
     * @return  self
     */ 
    public function setProduitid1($produitid1)
    {
        $this->produitid1 = $produitid1;

        return $this;
    }

    /**
     * Get the value of prix1
     */ 
    public function getPrix1()
    {
        return $this->prix1;
    }

    /**
     * Set the value of prix1
     *
     * @return  self
     */ 
    public function setPrix1($prix1)
    {
        $this->prix1 = $prix1;

        return $this;
    }

    /**
     * Get the value of quantity1
     */ 
    public function getQuantity1()
    {
        return $this->quantity1;
    }

    /**
     * Set the value of quantity1
     *
     * @return  self
     */ 
    public function setQuantity1($quantity1)
    {
        $this->quantity1 = $quantity1;

        return $this;
    }

    /**
     * Get the value of commandeid1
     */ 
    public function getCommandeid1()
    {
        return $this->commandeid1;
    }

    /**
     * Set the value of commandeid1
     *
     * @return  self
     */ 
    public function setCommandeid1($commandeid1)
    {
        $this->commandeid1 = $commandeid1;

        return $this;
    }
}

?>