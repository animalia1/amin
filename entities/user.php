<?php 
    class user{
        private:
        $nom,$prenom,$adresse,$mdp,$email,$zipcode;
        public:


        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        /**
         * Get the value of adresse
         */ 
        public function getAdresse()
        {
                return $this->adresse;
        }

        /**
         * Set the value of adresse
         *
         * @return  self
         */ 
        public function setAdresse($adresse)
        {
                $this->adresse = $adresse;

                return $this;
        }

        /**
         * Get the value of mdp
         */ 
        public function getMdp()
        {
                return $this->mdp;
        }

        /**
         * Set the value of mdp
         *
         * @return  self
         */ 
        public function setMdp($mdp)
        {
                $this->mdp = $mdp;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of zipcode
         */ 
        public function getZipcode()
        {
                return $this->zipcode;
        }

        /**
         * Set the value of zipcode
         *
         * @return  self
         */ 
        public function setZipcode($zipcode)
        {
                $this->zipcode = $zipcode;

                return $this;
        }

        public function __construct()
        {
                $this->zipcode = 0;
                $this->email = "";
                $this->mdp = "";
                $this->adresse = "";
                $this->prenom = "";
                $this->nom = "";
        }
        public function __construct($zipcode,$email,$mdp,$adresse,$prenom,$nom)
        {
                $this->zipcode = $zipcode;
                $this->email = $email;
                $this->mdp = $mdp;
                $this->adresse = $adresse;
                $this->prenom = $prenom;
                $this->nom = $nom;
        }

    }
    

?>