<?php
class Produit{
	private $nom;
	private $price;
    private $description;
    private $image;
    private $category;
    private $type_animaux;
	function __construct($nom,$price,$description,$image,$category,$type_animaux){
		$this->nom=$nom;
		$this->price=$price;
        $this->description=$description;
        $this->image=$image;
        $this->category=$category;
        $this->type_animaux=$type_animaux;
    }
    function getNom(){
		return $this->nom;
    }
    function getPrice(){
		return $this->price;
    }
    function getDescription(){
		return $this->description;
    }
    function getImage(){
		return $this->image;
    }
    function getCategory(){
      return $this->category;
      }
      function getTypeanimaux(){
        return $this->type_animaux;
        }
    function setNom($nom){
		$this->nom=$nom;
    }
    function setPrice($Price){
		$this->price=$price;
    }
    function setDescription($description){
		$this->description=$description;
    }
    function setImage($image){
		$this->image=$image;
    }
    function setCategory($category){
      $this->category=$category;
      }
      function setTypeanimaux($type_animaux){
        $this->type_animaux=$type_animaux;
        }
    
}

    ?>