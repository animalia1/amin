<?php
include '../../entities/coupon.php';
include '../../core/couponC.php';
include '../../config.php';
 
if(isset($_REQUEST['code']) and isset($_REQUEST['promotion'])   and isset($_REQUEST['nb_user'])){

    $p=new coupon($_REQUEST['code'],$_REQUEST['promotion'],$_REQUEST['nb_user']);
   //2-instance
   $pcore=new couponC();
   $pcore->ajoutcoupon($p);
   header ('Location: coupon.php?id='.$_REQUEST['code']);

}else if(isset($_REQUEST['supcode'])){
    //2-instance
    $pcore=new couponC();
    $pcore->supprimercoupon($_REQUEST['supcode']);
    header ('Location: coupon.php');

}else if(isset($_REQUEST['nbc'])){
    //2-instance
    $pcore=new couponC();
    $pcore->modifcoupon($_REQUEST['nbc']);
    header ('Location: coupon.php');


}else if(isset($_REQUEST['coupon'])){
    //2-instance
    $coupon = affichecoupon($_REQUEST['coupon']);
    $url = 'coupon.php?coupon='.$coupon;
    header ("Location: $url");

}

?>