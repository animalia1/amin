<?php
class category{
  private $cat_title;
  private $type_animaux;
	function __construct($cat_title,$type_animaux){
        $this->cat_title=$cat_title;
        $this->type_animaux=$type_animaux;
    }
    function getTitle(){
		return $this->cat_title;
    }
    function getTypeanimaux(){
      return $this->type_animaux;
      }
      function setTitle($cat_title){
        $this->cat_title=$cat_title;
        }
    function setTypeanimaux($type_animaux){
		$this->type_animaux=$type_animaux;
    }
}

    ?>