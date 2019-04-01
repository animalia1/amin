<?php
include '../../entities/category.php';
include '../../core/categoryC.php';
if(isset($_POST['cat_title']) and isset($_POST['type_animaux'])){


   if($_REQUEST['id'] > 0){
      $c=new category($_POST['cat_title'],$_POST['type_animaux']);
      $ccore=new categoryC();
      $ccore->modifierCategorie($c,$_REQUEST['id']);
      header( "Location: add-category.php" );
   
   
   }else{
      $c=new category($_POST['cat_title'],$_POST['type_animaux']);
      $ccore=new categoryC();
      $ccore->ajoutCategory($c);
      header( "Location: add-category.php" );
   }
   
}
else if(isset($_REQUEST['delete'])){
   $pcore=new categoryC();
   $pcore->supprimerCategory($_REQUEST['delete']);
   header( "Location: add-category.php" );
}
?>