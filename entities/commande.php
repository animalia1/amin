<?php
class commande{
    private $produitid;
    private $prix;
    private $quantity;
    function __construct($produitid,$prix,$quantity){
        $this->produitid=$produitid;
        $this->prix=$prix;
        $this->quantity=$quantity;
    }
 


    /**
     * Get the value of produitid
     */ 
    public function getProduitid()
    {
        return $this->produitid;
    }

    /**
     * Set the value of produitid
     *
     * @return  self
     */ 
    public function setProduitid($produitid)
    {
        $this->produitid = $produitid;

        return $this;
    }

    /**
     * Get the value of commandeid
     */ 
    

    /**
     * Get the value of price
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    
}

?>