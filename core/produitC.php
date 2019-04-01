<?PHP
include "categoryC.php";
class produitC {
	
        function ajoutProduit($produit){

                $sql="insert into produit(nom,price,description,image,category,type_animaux)
                values(:nom,:price,:description,:image,:category,:type_animaux)";
                $db=config::getConnexion();
                $query=$db->prepare($sql);
                $query->bindValue(':nom', $produit->getNom());
                $query->bindValue(':price', $produit->getPrice());
                $query->bindValue(':description', $produit->getDescription());
                $query->bindValue(':image', "images/".$produit->getImage());
                $query->bindValue(':category', $produit->getCategory());
                $query->bindValue(':type_animaux', $produit->getTypeanimaux());
                $query->execute();
        
		
        }	
        function afficherProduit(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
        }


        function afficherProduitc($id){
            //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
            $sql="SElECT * From produit where id='$id'";
            $db = config::getConnexion();
            try{
                $liste=$db->query($sql);
                foreach($liste as $produit){
                    return $produit;
                }
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
         function supprimerProduit($id){
		
            $sql="DELETE FROM produit where id= :id";
            $db = config::getConnexion();
            $req=$db->prepare($sql);
            $req->bindValue(':id',$id);
            try{
                $req->execute();
               // header('Location: index.php');
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }


        function modifierProduit($produit,$id){
            $sql="UPDATE produit set nom=:nom,price=:price,category=:category,type_animaux=:type_animaux, description=:description where id='$id'";
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->bindValue(':nom', $produit->getNom());
            $query->bindValue(':price', $produit->getPrice());
            $query->bindValue(':description', $produit->getDescription());
            $query->bindValue(':category', $produit->getCategory());
            $query->bindValue(':type_animaux', $produit->getTypeanimaux());
            $query->execute();
    
    
    }
    function afficherProduitFo($cat,$type){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit where category='$cat' and type_animaux='$type'";
		$db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
        }	
	}

?>