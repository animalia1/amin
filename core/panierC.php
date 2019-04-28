<?PHP

  class panierC {

    
    function ajoutpanier($id,$prix,$qt,$idcommande){
      $sql="insert into panier(produitid1,prix1,quantity1,commandeid1)
      values(:produitid1,:prix1,:quantity1,:commandeid1)";
      $db=config::getConnexion();
      $query=$db->prepare($sql);
      $query->bindValue(':produitid1', $id);
      $query->bindValue(':prix1', $prix);
      $query->bindValue(':quantity1', $qt);
      $query->bindValue(':commandeid1', $idcommande);

      $query->execute();


  }

   function afficheproduitcommande($id){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * FROM panier where commandeid1=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
  }
 /* 
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
  
*/
}
  ?>