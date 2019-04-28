<?php
class coupon{
    private $code;
    private $promotion;
    private $nb_user;
    function __construct($code,$promotion,$nb_user){
        $this->code=$code;
        $this->promotion=$promotion;
        $this->nb_user=$nb_user;
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of promotion
     */ 
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Set the value of promotion
     *
     * @return  self
     */ 
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Get the value of nb_user
     */ 
    public function getNb_user()
    {
        return $this->nb_user;
    }

    /**
     * Set the value of nb_user
     *
     * @return  self
     */ 
    public function setNb_user($nb_user)
    {
        $this->nb_user = $nb_user;

        return $this;
    }
    }
    ?>