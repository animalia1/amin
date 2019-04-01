<?php
    
    include "../../core/livreurC.php";
    include "../../entities/livreur.php";
    if(isset($_REQUEST['name']) and isset($_REQUEST['emailAddress']) and isset($_REQUEST['phoneNumber']) and isset($_REQUEST['adresse']) and isset($_REQUEST['code']) and isset($_REQUEST['date']) and isset($_REQUEST['salary']) ){
        if(empty($_REQUEST['name']) || empty($_REQUEST['emailAddress']) || empty($_REQUEST['phoneNumber']) || empty($_REQUEST['adresse']) || empty($_REQUEST['code']) || empty($_REQUEST['date']) || empty($_REQUEST['salary'])){
            echo "nice";
            $url = 'contact-card.php?error'; // this can be set based on whatever
        }
        else{
            if($_REQUEST['id'] > 0){
                $livreurr = new Livreur($_REQUEST['name'],$_REQUEST['emailAddress'],$_REQUEST['phoneNumber'],$_REQUEST['adresse'],$_REQUEST['code'],$_REQUEST['date'],$_REQUEST['salary']);
                livreurC::modifierLivreur($livreurr,$_REQUEST['id']);
                $url = 'contact-card.php?modif=1'; 

            }else{
                $url = 'contact-card.php?ajouter=1'; 
                $livreur = new Livreur($_REQUEST['name'],$_REQUEST['emailAddress'],$_REQUEST['phoneNumber'],$_REQUEST['adresse'],$_REQUEST['code'],$_REQUEST['date'],$_REQUEST['salary']);
                livreurC::ajouterLivreur($livreur);

            }
            // this can be set based on whatever
        }
    }

// clear out the output buffer
while (ob_get_status()) 
{
    ob_end_clean();
}

// no redirect
header( "Location: $url" );
?>