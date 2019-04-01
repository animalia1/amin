<?PHP
class Livreur{
	private $nom;
    private $email;
	private $adresse;
    private $numero;
    private $salaire;
    private $codePostale;
    private $date;
	function __construct($nom,$email,$numero,$adresse,$codePostale,$date,$salaire){
		$this->nom=$nom;
		$this->adresse=$adresse;
		$this->date=$date;
        $this->salaire=$salaire;
        $this->codePostale=$codePostale;
        $this->numero=$numero;
		$this->email=$email;
    }
	
	public function getNom()
	{
		return $this->nom;
	}
	public function setNom($nom)
	{
		$this->nom = $nom;

		return $this;
    }
	public function getAdresse()
	{
		return $this->adresse;
	}
	public function setAdresse($adresse)
	{
		$this->adresse = $adresse;

		return $this;
	}
	public function getSalaire()
	{
		return $this->salaire;
	}

	public function setSalaire($salaire)
	{
		$this->salaire = $salaire;

		return $this;
	}
    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getCodePostale()
    {
        return $this->codePostale;
    }

    /**
     * Set the value of codePostale
     *
     * @return  self
     */ 
    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;

        return $this;
    }
}

?>