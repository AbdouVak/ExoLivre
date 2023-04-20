<?PHP

class Livre{
    private string $_titre;
    private string $_nbPage;
    private string $_anneeParution;
    private string $_prix;


    function __construct( string $titre, string $anneeParution, string $nbPage, string $prix){
        $this->_titre =$titre;
        $this->_nbPage = $nbPage;
        $this->_anneeParution = $anneeParution;
        $this->_prix = $prix;

    }

    public function __toString()
    {
        return "$this->_titre ($this->_anneeParution) : $this->_nbPage pages / $this->_prix €<br>";
    }
}

?>