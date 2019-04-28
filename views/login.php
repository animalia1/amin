<?PHP
session_start();
include_once "../entities/client.php";
include_once "../core/clientC.php";
if (isset($_REQUEST['username']) and isset($_REQUEST['password'])  and  $_REQUEST['username']!=null and  $_REQUEST['password']!=null   )
{
    $nom=$_REQUEST['username'];
    $password=sha1($_REQUEST['password']);
    $client1=new clientC();
    $x=$client1->rechercherClient($nom,$password);
    if($x)
    {
        $_SESSION['id'] = $x['id'];
        $_SESSION['username']= $nom;
        $_SESSION['password']= $_REQUEST['password'];
            $url = 'index.php?login=true&id='.$_SESSION['id'];
        header("Location: $url");
    }
    else
    {
        echo sha1($_REQUEST['password']);
    }
}
else{ echo "vérifier les champs"; }
?>