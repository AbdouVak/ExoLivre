<?PHP

class Auteur{

    private string $_auteurNom;
    private string $_auteurPrenom;
    private $_bibliographie;

    public function __construct($auteurNom ,$auteurPrenom)
    {
        $this->_auteurNom = $auteurNom;
        $this->_auteurPrenom = $auteurPrenom;
        $this->_bibliographie = [];
    }

    public function __toString()
    {
        return "<h2>$this->_auteurNom $this->_auteurPrenom</h2>";
    }

    public function addBook($livre){
        $this->_bibliographie[] = $livre;
    }    

    public function afficherBibliographie(){
        echo "<h2>Livre de $this->_auteurNom $this->_auteurPrenom</h2>";
        foreach($this->_bibliographie as $livre){
            echo $livre;
        }
    }


}

?>