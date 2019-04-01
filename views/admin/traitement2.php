<?php
include '../../entities/produit.php';
include '../../core/produitC.php';

if(isset($_POST['nom']) and isset($_POST['price']) and isset($_POST['description']) and isset($_POST['image']) and isset($_POST['category']) and isset($_POST['type_animaux'])){
   //traitement des données
   //1-instance

   if($_REQUEST['id'] > 0){
      $p=new produit($_POST['nom'],$_POST['price'],$_POST['description'],$_POST['image'],$_POST['category'],$_POST['type_animaux']);
   //2-instance
   $pcore=new produitC();
   $pcore->modifierProduit($p,$_REQUEST['id']);
   
   
   }else{
      
   $p=new produit($_POST['nom'],$_POST['price'],$_POST['description'],$_POST['image'],$_POST['category'],$_POST['type_animaux']);
   //2-instance
   $pcore=new produitC();
   $pcore->ajoutProduit($p);
   }
   header( "Location: product.php" );
}
else if(isset($_REQUEST['delete'])){
   $pcore=new produitC();
   $pcore->supprimerProduit($_REQUEST['delete']);
   header( "Location: product.php" );
}

?>