<?PHP

class Auteur{

    private string $_auteurNom;
    private string $_auteurPrenom;
    private $_bibliographie;

    public function __construct($auteurNom ,$auteurPrenom,$bibliographie)
    {
        $this->_auteurNom = $auteurNom;
        $this->_auteurPrenom = $auteurPrenom;
        $this->_bibliographie = $bibliographie;
    }

    public function __toString()
    {
        return "<h2>$this->_auteurNom $this->_auteurPrenom</h2>";
    }

    public function afficherBibliographie(){
        foreach($this->_bibliographie as $livre){
            echo "$livre";
        }
    }
}

?>