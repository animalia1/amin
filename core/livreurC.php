<?php
  class config {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
        self::$instance = new PDO('mysql:host=localhost;dbname=Animalia', 'root', '');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }
  }
?>
<?PHP
class LivreurC {
function afficherEmploye ($employe){
		echo "Cin: ".$employe->getCin()."<br>";
		echo "Nom: ".$employe->getNom()."<br>";
		echo "Prénom: ".$employe->getPrenom()."<br>";
		echo "tarif heure: ".$employe->getTarifHoraire()."<br>";
		echo "nb heures: ".$employe->getNbHeures()."<br>";
	}
	function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}
	public static function ajouterLivreur($livreur){
        
		
        $nom=$livreur->getNom();
        $adresse=$livreur->getAdresse();
        $salaire=$livreur->getSalaire();
        $date=$livreur->getDate();
        $codePostale=$livreur->getCodePostale();
        $numero=$livreur->getNumero();
        $email=$livreur->getEmail();
        $sql="INSERT INTO livreur (nom, adresse, codePostale, numero, email, dateR, salary) VALUES (:nom, :adresse, :codePostale, :numero, :email, :dateR, :salary)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':email',$email);
		$req->bindValue(':dateR',$date);
		$req->bindValue(':codePostale',$codePostale);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':salary',$salaire);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	public static function afficherLivreur(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	public static function afficherLivreurc($id){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From livreur where id='$id'";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			foreach($liste as $liv){
				return $liv;
			}
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	public static function supprimerLivreur($nom){
		
		$sql="DELETE FROM livreur where nom= :nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
		try{
			$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	public static function modifierLivreur($livreur,$id){
		$sql="UPDATE livreur SET nom=:nom, adresse=:adresse, codePostale=:codePostale, email=:email, numero=:numero,dateR=:dateR, salary=:salary WHERE id='$id'";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nom=$livreur->getNom();
        $adresse=$livreur->getAdresse();
        $salaire=$livreur->getSalaire();
        $date=$livreur->getDate();
        $codePostale=$livreur->getCodePostale();
        $numero=$livreur->getNumero();
        $email=$livreur->getEmail();
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':email',$email);
		$req->bindValue(':dateR',$date);
		$req->bindValue(':codePostale',$codePostale);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':salary',$salaire);
		
            $req->execute();
			
        }
        catch (Exception $e){
			header('Location: index.php');
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
        }
		
	}
	function recupererEmploye($cin){
		$sql="SELECT * from employe where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
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