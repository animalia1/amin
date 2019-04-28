<?php
include '../../entities/commandeH.php';
include '../../core/commandeH.php';
include '../../config.php';




if(isset($_REQUEST['id']) and isset($_REQUEST['quantity'])   and isset($_REQUEST['price'])){

    $p=new commande($_REQUEST['id'],$_REQUEST['price'],$_REQUEST['quantity']);
   //2-instance
   $pcore=new commandeH();
   $pcore->ajoutCommandeH($p);
   header ('Location: ../shipping.php?id='.$_REQUEST['id']);

}else if(isset($_REQUEST['supid'])){
    //2-instance
    $pcore=new commandeH();
    $pcore->supprimerCommandeH($_REQUEST['supid']);
    $pcore->supprimerlignecommande($_REQUEST['supid']);
    header ('Location: product-orders.php');

}else if(isset($_REQUEST['modid'])){
    //2-instance
    $pcore=new commandeH();
    $pcore->modifierstatus($_REQUEST['modid']);
    header ('Location: product-orders.php');
}

?>