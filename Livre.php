<?PHP

class Livre{
    private string $_titre;
    private string $_nbPage;
    private string $_anneeParution;
    private string $_prix;
    private Auteur $_auteur;


    function __construct( string $titre, string $anneeParution, string $nbPage, string $prix, Auteur $auteur){
        $this->_titre =$titre;
        $this->_nbPage = $nbPage;
        $this->_anneeParution = $anneeParution;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $this->_auteur->addBook($this);
    }
    
    
    public function getTitre() : string{return $this->_titre;}
    public function setTitre(string $titre){$this->_titre = $titre;}

    public function getAnneeParution() : string{return $this->_anneeParution;}
    public function setAnneeParution(string $anneeParution){$this->_anneeParution = $anneeParution;}

    
    public function getNbPage() : string{return $this->_nbPage;}
    public function setNbPage(string $nbPage){$this->_nbPage = $nbPage;}

    public function getPrix() : string{return $this->_prix;}
    public function setPrix(string $prix){$this->_prix = $prix;}

    public function getAuteur() : string{return $this->_auteur;}
    public function setAuteur(string $auteur){$this->_auteur = $auteur;}

    public function __toString()
    {
        return "$this->_titre ($this->_anneeParution) : $this->_nbPage pages / $this->_prix €<br>";
    }
}

?>