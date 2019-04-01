<?php
include '../../entities/commande.php';
include '../../core/commandeC.php';
include '../../config.php';

function afficheCoupon($code){
    //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
    $sql="SELECT promotion FROM coupon where code='$code'";
    $db = config::getConnexion();
    try{
    $coupons=$db->query($sql);
        foreach($coupons as $coupon){
            return $coupon[0];

        }
    
    }
    
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}

if(isset($_REQUEST['id']) and isset($_REQUEST['quantity'])   and isset($_REQUEST['price'])){

    $p=new commande($_REQUEST['id'],$_REQUEST['price'],$_REQUEST['quantity']);
   //2-instance
   $pcore=new commandeC();
   $pcore->ajoutCommande($p);
   header ('Location: ../shop-detail.php?id='.$_REQUEST['id']);

}else if(isset($_REQUEST['supid'])){
    //2-instance
    $pcore=new commandeC();
    $pcore->supprimerCommande($_REQUEST['supid']);
    header ('Location: ../cart.php');

}else if(isset($_REQUEST['qt'])){
    //2-instance
    $pcore=new commandeC();
    $pcore->modifCommande($_REQUEST['qt']);
    header ('Location: ../cart.php');

}else if(isset($_REQUEST['coupon'])){
    //2-instance
    $coupon = afficheCoupon($_REQUEST['coupon']);
    $url = '../cart.php?coupon='.$coupon;
    header ("Location: $url");

}

?>