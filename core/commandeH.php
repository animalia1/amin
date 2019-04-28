<?PHP

  class commandeH {

    
    function ajoutCommandeH($commande){
      $sql="insert into commande(datecreation,status,username,prixtotale)
      values(:datecreation,:status,:username,:prixtotale)";
      $db=config::getConnexion();
      $query=$db->prepare($sql);
      $query->bindValue(':datecreation', $commande->getDatecreation());
      $query->bindValue(':status', $commande->getStatus());
      $query->bindValue(':username', $commande->getUsername());
      $query->bindValue(':prixtotale', $commande->getPrixtotale());
      $query->execute();


  }

   function afficheCommandeH(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * FROM commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
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
  function modifierstatus($id){
    $sql="update commande SET status='valide' where id=:id";
    $db=config::getConnexion();
    $query=$db->prepare($sql);
    
    $query->bindValue(':id', $id);
    $query->execute();


}

  public static function supprimerCommandeH($id){
		
		$sql="DELETE FROM commande where id= :id";
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
  public static function supprimerlignecommande($id){
		
		$sql="DELETE FROM panier where commandeid1= :id";
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
  public function recupererDernierCmd()
      {
         
        $sql="SELECT * FROM commande WHERE id=(SELECT MAX(id) FROM commande)";
       $db=config::getConnexion();
        $result= $db->query($sql);
        return $result;
      }
  }
  ?>