<?PHP
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
class categoryC {
    
    function ajoutCategory($category){
        $sql="insert into category(cat_title,type_animaux)
        values(:cat_title,:type_animaux)";
        $db=config::getConnexion();
        $query=$db->prepare($sql);
        $query->bindValue(':cat_title', $category->getTitle());
        $query->bindValue(':type_animaux', $category->getTypeanimaux());
        $query->execute();


}	


function modifierCategorie($cat,$id){
    $sql="UPDATE category set cat_title=:cat_title,type_animaux=:type_animaux where cat_id='$id'";
    $db=config::getConnexion();
    $query=$db->prepare($sql);
    $query->bindValue(':cat_title', $cat->getTitle());
    $query->bindValue(':type_animaux', $cat->getTypeanimaux());
    $query->execute();


}
    
function afficherCategorieC($id){
    //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
    $sql="SElECT * From category where cat_id='$id'";
    $db = config::getConnexion();
    try{
        $liste=$db->query($sql);
        foreach($liste as $cat){
            return $cat;
        }
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
    function afficherCategory(){
    //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
    $sql="SElECT * From category";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
    }
    function afficherCategoryan($type){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From category where type_animaux='$type'";
        $db = config::getConnexion();
		try{
            $liste=$db->query($sql);
            return $liste;
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerCategory($id){
		
        $sql="DELETE FROM category where cat_id= :id";
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
}



?>