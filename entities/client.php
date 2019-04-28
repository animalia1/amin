<?php
class client
{
    private $nom_utilisateur;
    private $email;
    private $password;
    /**
     * client constructor.
     * @param $nom_utilisateur
     * @param $email
     * @param $password
     */
    public function __construct($nom_utilisateur, $email, $password)
    {
        $this->nom_utilisateur = $nom_utilisateur;
        $this->email = $email;
        $this->password = $password;
    }
    /**
     * @return mixed
     */
    public function getNomUtilisateur()
    {
        return $this->nom_utilisateur;
    }
    /**
     * @param mixed $nom_utilisateur
     */
    public function setNomUtilisateur($nom_utilisateur)
    {
        $this->nom_utilisateur = $nom_utilisateur;
    }
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}
?>