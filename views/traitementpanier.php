<?php
include '../entities/panier.php';
include '../core/panierC.php';
include '../core/commandeC.php';
include '../core/commandeH.php';
include '../entities/commandeH.php';
include '../config.php';
$commande1=new commandeC();
$prixTotale =0;
$listeCommandes=$commande1->afficheCommande();
    foreach($listeCommandes as $row){  
$prixTotale = $prixTotale +($row['price'] * $row['quantity']);
            }
            echo $prixTotale;
$lignecommande1=new commandeC();
$commande=new commandeH1(date("Y-m-d"),"en cours","amin",$prixTotale);
$commandeH=new commandeH();
$commandeH->ajoutcommandeH($commande);
$idcommande1=$commandeH->recupererDernierCmd();
foreach ($idcommande1 as $value) {
    # code..
    $id=$value['id'];
}
$listeCommandes=$lignecommande1->afficheCommande();
$pcore=new panierC();

    foreach($listeCommandes as $row){  
       // $p=new panier($row['id'],$row['price'],$row['quantity'],$idcommande1);
   $pcore->ajoutpanier($row['id'],$row['price'],$row['quantity'],$id);
echo"id".$row['id']."<br>" ;
echo"price".$row['price']."<br>";
echo"quantity".$row['quantity']."<br>" ;
echo"idcommande1".$id."<br>" ;
}
   $lignecommande1->vider();
  header ('Location: cart.php');



?>