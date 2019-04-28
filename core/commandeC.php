<?PHP
 
  class commandeC {

    
    function ajoutCommande($ligne_commande){
      $sql="insert into ligne_commande(produitid,prix,quantity)
      values(:produitid,:prix,:quantity)";
      $db=config::getConnexion();
      $query=$db->prepare($sql);
      $query->bindValue(':produitid', $ligne_commande->getProduitid());
      $query->bindValue(':prix', $ligne_commande->getPrix());
      $query->bindValue(':quantity', $ligne_commande->getQuantity());
      $query->execute();


  }

   function afficheCommande(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * FROM ligne_commande l join produit p on l.produitid = p.id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
  }
  function recherche($id){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT COUNT(*) as mb,quantity FROM ligne_commande where produitid=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
  }
  function modifierquantity($qt,$qtnew,$id){
    $sql="update ligne_commande SET quantity=:quantity where produitid=:id";
    $db=config::getConnexion();
    $query=$db->prepare($sql);
    $query->bindValue(':quantity',$qt+$qtnew);
    $query->bindValue(':id', $id);
    $query->execute();


}

function Nombreprod(){
  //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
  $sql="SELECT COUNT(*) as mb FROM ligne_commande";
  $db = config::getConnexion();
  try{
  $liste=$db->query($sql);
  return $liste;
  }
      catch (Exception $e){
          die('Erreur: '.$e->getMessage());
      }	
}
  public static function supprimerCommande($id){
		
		$sql="DELETE FROM ligne_commande where ligneid= :id";
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
  
  public static function vider(){
		
		$sql="TRUNCATE ligne_commande ";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		try{
			$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


  public static function modifCommande($qt){
		$sql="UPDATE ligne_commande SET quantity=:qt";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
		
		$req->bindValue(':qt',$qt);
		
            $req->execute();
			
        }
        catch (Exception $e){
         // header('Location: index.php');
                echo " Erreur ! ".$e->getMessage();
       echo " Les datas : " ;
            }
      }
  

}
  ?>