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
    
    public function __toString()
    {
        return "$this->_titre ($this->_anneeParution) : $this->_nbPage pages / $this->_prix €<br>";
    }
}

?>