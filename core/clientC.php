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
class clientC
{
    function ajouterClient($e)
    {
        $sql = "INSERT INTO client(nom_utilisateur, email, password) VALUES (:nom_utilisateur,:email,:password)";
        $db = config::getConnexion();
        try {
            $pre = $db->prepare($sql);
            $nom_utilisateur = $e->getNomUtilisateur();
            $email = $e->getEmail();
            $password= $e->getPassword();
            $pre->bindValue(':nom_utilisateur',$nom_utilisateur);
            $pre->bindValue(':email', $email);
            $pre->bindValue(':password',$password);
            $pre->execute();
        } catch (Exception $e) {
            die ("erreur :" . $e->getMessage());
        }
    }
    function afficherClient()
    {
        $sql="SELECT * From client";
        $db = Connect::getConnection();
        try
        {
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    /***********************************************************************************************************/
    function rechercherClient($nom_utilisateur,$password)
    {
        $sql = "SELECT * from client where 'nom_utilisateur'='$nom_utilisateur' and 'password'='$password'";
        $db = config::getConnexion();
        try
        {
            $liste=$db->query($sql);
            
    $x= $liste->fetch();
    return $x;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    /****************************************************************************************************/
    function recupererClient($nom_utilisateur,$password)
    {
        $sql="SELECT nom_utilisateur FROM client WHERE nom_utilisateur=$nom_utilisateur AND password=$password";
        $db = Connect::getConnection();
        try
        {
            $liste=$db->query($sql);
            $array = $req->fetchALL();
            $nb = count($array);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
/************************************************************************************************************/
    function supprimerClient($nom_utilisateur)
    {
        $sql="DELETE FROM client where nom_utilisateur= :nom_utilisateur";
        $db = Connect::getConnection();
        $req=$db->prepare($sql);
        $req->bindValue(':nom_utilisateur',$nom_utilisateur);
        try
        {
            $req->execute();
            // header('Location: index.php');
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    /*******************************************************************************************/
    function modifierClient($event,$nom_utilisateur)
    {
        $sql="UPDATE client SET  nom_utilisateur=:nom_utilisateur,email=:email,password=:password WHERE nom_utilisateur=:nom_utilisateur";
        $db = Connect::getConnection();
        // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try
        {
            $req=$db->prepare($sql);
            $nom_utilisateur=$event->getNomUtilisateur();
            $email=$event->getEmail();
            $password=$event->getPassword();
            $datas = array(':nom_utilisateur'=>$nom_utilisateur, ':email'=>$email,':password'=>$password);
            $req->bindValue(':nom_utilisateur',$nom_utilisateur);
            $req->bindValue(':email',$email);
            $req->bindValue(':password',$password);
            $s=$req->execute();
            // header('Location: index.php');
        }
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }
    }
    /*********************************************************************************/
}
?>